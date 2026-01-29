@extends('layouts.app')
@section('content')
<div class="content">
    <div class="content">
        <div class="row" style="height: 50px;">
            <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8" style="background-color: blue; color: white;">
                <span style="padding: 10px 10px 10px 10px;">{{ $date->format('Y年m月d日') }}</span>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4" style="background-color: blue; color: white;">
                <form action="/logout" method="POST">
                    @csrf
                    <button class="btn btn-danger">Sign Out</button>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4" style="background-color: white; color: black;">
            
        </div>
        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4" style="background-color: white; color: black;">

        </div>
        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4" style="background-color: white; color: black;">
            <a href="/calendar" class="btn btn-secondary">戻る</a>
        </div>
    </div>
    @foreach ($times as $time)
    <div class="row" style="height: 50px;">
        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4" style="">
            @if($time['incidents_cnt'] > 0)
            <a href="/checksc{{'?today='.$today.'&time='.$time['timecheck_time']}}" class="btn btn-secondary">{{ $time['timecheck_time'] }}</a>
            @else
            <a href="/checksc{{'?today='.$today.'&time='.$time['timecheck_time']}}" class="btn btn-primary">{{ $time['timecheck_time'] }}</a>
            @endif
        </div>
    </div>
    @endforeach
</div>
@endsection
