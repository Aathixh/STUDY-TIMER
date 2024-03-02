@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" href="/css/dashboard.css">
@endsection
@section('content')
    <header class = "topbar">
        <h1 style="color: aliceblue; margin-left:1.5%">Dashboard</h1>

    </header>
    <div class="grid-container">
        <div class="item1" style="display: flex; justify-content: center; align-items: center;">
            <div id="timer2" style="margin-right: 10%;font-size:1.5em">
                00:00:00
            </div>
        </div>
        <div class="item2">
        <audio id="concentrationSound" controls autoplay>
            <source src="img/Colorful-Flowers(chosic.com).mp3" type="audio/mp3">
        </audio>
        </div>  
        <div class="item3">Score<br><div id="scoreDisplay">0</div></div>
        <div class="item4">
            <div id="timer" style="font-size:5.5em">00:00:00</div>
            <input type="number" id="inputHours" max="99" min="0" placeholder="Enter hours" value="0">
            <input type="number" id="inputMinutes" max="60" min="0" placeholder="Enter minutes" value="0">
            <input type="number" id="inputSeconds" max="60" min="0" placeholder="Enter seconds" value="0">
            <button id="startTimer">Start Timer</button>
            <button id="stopTimer">Stop Timer</button>
            <hr><hr>
            <div id="currentTime" style="font-size:100%">00:00:00</div>
        </div>
      </div>
      <script src="/js/dashboard.js"></script>
@endsection