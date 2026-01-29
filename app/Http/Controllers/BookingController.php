<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index($ymd)
    {
        \Log::debug("BookingController::index() ymd[{$ymd}]");
        $arr = explode('-', $ymd);
        //表示したい年（デフォルトは今日の年
        $year = $arr[0];
        //表示したい月（デフォルトは今日の月）
        $month = $arr[1];
        //表示する年月の初日
        $calendarYm = Carbon::Create($year, $month, 01, 00, 00, 00);
        //カレンダーの日付を$calendarDaysの配列に集める
    }
    public function create($ymd)
    {
        \Log::debug("BookingController::create() ymd[{$ymd}]");
        return [];
    }
    public function store(Request $request)
    {

    }
}
