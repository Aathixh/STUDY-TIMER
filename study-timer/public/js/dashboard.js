var alarmSound = new Audio('/sounds/alarm.mp3');
var timer2 = 0;
var timer2Interval;
document.getElementById('startTimer').addEventListener('click', function() {
    var inputHours = document.getElementById('inputHours').value;
    var inputMinutes = document.getElementById('inputMinutes').value;
    var inputSeconds = document.getElementById('inputSeconds').value;

    var totalSeconds = (inputHours * 60 * 60) + (inputMinutes * 60) + (+inputSeconds);
    var display = document.getElementById('timer');
    startTimer(totalSeconds, display);
    var display2 = document.getElementById('timer2');
    timer2Interval = setInterval(function() {
        timer2++;
        var hours = Math.floor(timer2 / 3600);
        var minutes = Math.floor((timer2 % 3600) / 60);
        var seconds = timer2 % 60;
        display2.textContent = (hours < 10 ? "0" + hours : hours) + ":" + (minutes < 10 ? "0" + minutes : minutes) + ":" + (seconds < 10 ? "0" + seconds : seconds);
    }, 1000);
});
document.getElementById('stopTimer2').addEventListener('click', function() {
    clearInterval(timer2Interval); // Stop timer2
    timer2 = 0; // Reset timer2
    document.getElementById('timer2').textContent = "00:00:00"; // Reset timer2 display
});
function startTimer(duration, display) {
    var timer = duration, hours, minutes, seconds;
    var countdown = setInterval(function () {
        hours = parseInt(timer / 3600, 10);
        minutes = parseInt((timer % 3600) / 60, 10);
        seconds = parseInt(timer % 60, 10);

        hours = hours < 10 ? "0" + hours : hours;
        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = hours + ":" + minutes + ":" + seconds;

        if (--timer < 0) {
            clearInterval(countdown);
            clearInterval(timer2Interval)
            var playCount = 0;
            alarmSound.play();
            alarmSound.onended = function() {
                playCount++;
                if (playCount < 3) {
                    alarmSound.play();
                }
            };
        }
    }, 1000);
}
var currentTimeDisplay = document.getElementById('currentTime');
setInterval(function() {
    var now = new Date();
    var day = now.getDate();
    var month = now.getMonth() + 1; // January is 0!
    var year = now.getFullYear();

    var hours = now.getHours();
    var minutes = now.getMinutes();
    var seconds = now.getSeconds();

    var ampm = hours >= 12 ? 'PM' : 'AM';
    hours = hours % 12;
    hours = hours ? hours : 12; // the hour '0' should be '12'

    // add a zero in front of numbers<10
    day = day < 10 ? '0' + day : day;
    month = month < 10 ? '0' + month : month;
    hours = hours < 10 ? '0' + hours : hours;
    minutes = minutes < 10 ? '0' + minutes : minutes;
    seconds = seconds < 10 ? '0' + seconds : seconds;

    currentTimeDisplay.textContent = day + '/' + month + '/' + year + ' || ' + hours + ':' + minutes + ':' + seconds + ' ' + ampm;
}, 1000);