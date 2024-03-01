@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" href="/css/dashboard.css">
@section('content')
    <h1>Dashboard</h1>
    <div class="grid-container">
        <div class="item1">
            <div id="timer2">
                00:00:00
            </div>
            <button id="stopTimer2">Reset</button>
        </div>
        <div class="item2">
            <div id="clockContainer">
                <div id="hour"></div>
                <div id="minute"></div>
                <div id="second"></div>
            </div>  
        </div>  
        <div class="item3">Score<br><div id="scoreDisplay">0</div></div>
        <div class="item4">
            <div id="timer">00:00:00</div>
            <input type="number" id="inputHours" max="99" min="0" placeholder="Enter hours">
            <input type="number" id="inputMinutes" max="60" min="0" placeholder="Enter minutes">
            <input type="number" id="inputSeconds" max="60" min="0" placeholder="Enter seconds">
            <button id="startTimer">Start Timer</button>
        </div>
      </div>
      <script src="/js/dashboard.js"></script>
@endsection