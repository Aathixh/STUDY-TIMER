@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" href="/css/dashboard.css">
@endsection
@section('content')
    <h1 style="color: aliceblue; margin-left:1.5%">Dashboard</h1>
    <div class="grid-container">
        <div class="item1" style="display: flex; justify-content: center; align-items: center;">
            <div id="timer2" style="margin-right: 10%;font-size:1.5em">
                00:00:00
            </div>
            <button id="stopTimer2">Reset</button>
        </div>
        <div class="item2">
        </div>  
        <div class="item3">Score<br><div id="scoreDisplay">0</div></div>
        <div class="item4">
            <div id="timer" style="font-size:5.5em">00:00:00</div>
            <input type="number" id="inputHours" max="99" min="0" placeholder="Enter hours">
            <input type="number" id="inputMinutes" max="60" min="0" placeholder="Enter minutes">
            <input type="number" id="inputSeconds" max="60" min="0" placeholder="Enter seconds">
            <button id="startTimer">Start Timer</button>
            <hr><hr>
            <div id="currentTime" style="font-size:100%">00:00:00</div>
        </div>
      </div>
      <script src="/js/dashboard.js"></script>
@endsection