@extends('layouts.app')
@section('content')
{{-- <div class="my-3"> --}}
    <div class="content">
        <div class="row" style="height: 50px;">
            <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8" style="background-color: blue; color: white;">
                <span style="padding: 10px 10px 10px 10px;">{{ $thisMonth->format('Y年m月') }}</span>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4" style="background-color: blue; color: white;">
                <form action="/logout" method="POST">
                    @csrf
                    <button class="btn btn-danger">Sign Out</button>
                </form>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-between">
        <a href="/calendar{{'?year='.$previousMonth->format('Y').'&month='.$previousMonth->format('m')}}" class="btn btn-primary">前月</a>
        <div class="text-center">
            <strong>{{$thisMonth->format('Y年n月')}}</strong>
        </div>
        <a href="/calendar{{'?year='.$nextMonth->format('Y').'&month='.$nextMonth->format('m')}}" class="btn btn-primary">翌月</a>
    </div>
    <div class="calendar-grid">
        @foreach([ '(月)', '(火)', '(水)', '(木)', '(金)', '(土)', '(日)',] as $weekName)
        <div class="week-block">
            {{$weekName}}
        </div>
        @endforeach
        @foreach($calendarDays as $calendarDay)
            @if($calendarDay['show'])
                <div class="day-block">
                    @if($calendarDay['status'])
                    <a href="/booking/{{ $calendarDay['date']->format('Y-m-d')}}" class="btn btn-primary">{{$calendarDay['date']->format('j')}}</a>
                    @else
                    <a href="/booking/{{ $calendarDay['date']->format('Y-m-d')}}" class="btn btn-secondary">{{$calendarDay['date']->format('j')}}</a>
                    @endif
                </div>
            @else
                <div class="day-block"></div>
            @endif
        @endforeach
    </div>
{{-- </div> --}}
<style>
.calendar-grid{
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    width:350px;
    margin: 0 auto;
}
.week-block{
    width: 50px;
    height: 28px;
    text-align: center;
    font-weight: bold;
}
.day-block{
    width: 50px;
    height: 50px;
}
.button-day{
    width: 45px;
    height: 45px;
    padding: 0;
    text-align: center;
    background: white;
    border: 1px solid red;
}
.d-flex {
    display: flex;
}
.justify-content-between {
    justify-content: space-between;
}
.text-center{
    text-align: center;
}
.my-3 {
    margin-bottom: 1.5rem;
}
</style>
@endsection