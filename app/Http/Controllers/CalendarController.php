<?php

namespace App\Http\Controllers;

use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
// use App\Models\Incident;

class CalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        \Log::debug("CalendarController::index() ");
        //表示したい年（デフォルトは今日の年）
        $year = $request->input('year')??Carbon::today()->format('Y');
        //表示したい月（デフォルトは今日の月）
        $month = $request->input('month')??Carbon::today()->format('m');
        //表示する年月の初日
        $calendarYm = Carbon::Create($year, $month, 01, 00, 00, 00);

        //カレンダーの日付を$calendarDaysの配列に集める
        $calendarDays = [];

        //１．　月初の日付が日曜日ではないときの、追加する前月カレンダーの日付。
        if($calendarYm->dayOfWeek != 6){
            $calendarStartDay = $calendarYm->copy()->subDays($calendarYm->dayOfWeek);
            for ($i = 0; $i < ($calendarYm->dayOfWeek - 1); $i++) {
                $calendarDays[] = ['date'=>$calendarStartDay->copy()->addDays($i),'show'=>false,'status'=>false];
            }
        }

        //２． 当月の日付
        \Log::debug("CalendarController::index() Carbon::now:" . Carbon::now()->format("Y-m-d 00:00:00"));
        for ($i = 0; $i < $calendarYm->daysInMonth; $i++) {
            if($calendarYm->copy()->addDays($i) > Carbon::now()->format("Y-m-d 00:00:00")){
                $show = true;
                $status = true;
            } else {
                $show = true;
                $status = false;
            }
            $calendarDays[] = ['date'=>$calendarYm->copy()->addDays($i),'show'=>$show,'status'=>$status];
        }

        //３.　月末の日付が土曜日ではないときの、追加する翌月カレンダーの日付。
        if($calendarYm->copy()->endOfMonth()->dayOfWeek != 0){
            for ($i = $calendarYm->copy()->endOfMonth()->dayOfWeek+1; $i < 7; $i++) {
                $calendarDays[] = ['date'=>$calendarYm->copy()->addDays($i),'show'=>false,'status'=>false];
            }
        }

        return view('calendar.index', [
            'calendarDays' => $calendarDays,//集めた日付
            'previousMonth' => $calendarYm->copy()->subMonth(),//前月
            'nextMonth' => $calendarYm->copy()->addMonth(),//翌月
            'thisMonth' => $calendarYm,//当月
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        \Log::debug("CalendarController::show()");
        $times = [
                ['timecheck_time' => '09:00', 'incidents_cnt' => 0],
                ['timecheck_time' => '10:00', 'incidents_cnt' => 0],
                ['timecheck_time' => '11:00', 'incidents_cnt' => 0],
                ['timecheck_time' => '12:00', 'incidents_cnt' => 0],
                ['timecheck_time' => '13:00', 'incidents_cnt' => 0],
                ['timecheck_time' => '14:00', 'incidents_cnt' => 0],
                ['timecheck_time' => '15:00', 'incidents_cnt' => 0],
                ['timecheck_time' => '16:00', 'incidents_cnt' => 0],
                ['timecheck_time' => '17:00', 'incidents_cnt' => 0],
                ['timecheck_time' => '18:00', 'incidents_cnt' => 0],
                ['timecheck_time' => '19:00', 'incidents_cnt' => 0],
            ];
        $params = $request->all();
        \Log::debug("CalendarController::show() request:" . print_r($params, true));
        $date = new DateTime($params['today'], new DateTimeZone('Asia/Tokyo'));
        // \Log::debug("CalendarController::show() date:" . print_r($date, true));
        $new_times = [];
        foreach($times as $time) {
            $check_time = $params['today'] . ' ' . $time['timecheck_time'] . ':00';
            // $incidents_cnt = Incident::where('check_time', '=', $check_time)->count();
            \Log::debug("CalendarController::show() incidents_cnt:" . print_r($incidents_cnt, true));
            // $time['incidents_cnt'] = $incidents_cnt;
            $new_times[] = $time;
        }

        return view('calendar.show', [
            'date' => $date,
            'today' => $params['today'],
            'times' => $new_times,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
