@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Clock</div>

                    <div class="card-body">
                        <div id="clock" class="text-center"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function updateClock() {
            var now = new Date();
            var hours = now.getHours();
            var minutes = now.getMinutes();
            var seconds = now.getSeconds();

            hours = hours < 10 ? "0" + hours : hours;
            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            var time = hours + ":" + minutes + ":" + seconds;

            document.getElementById("clock").innerHTML = time;
        }

        setInterval(updateClock, 1000);
    </script>
@endsection