var alarmSound = new Audio('/sounds/alarm.mp3');
var timer2 = 0;
var timer2Interval;
var score = 0;
var scoreDisplay = document.querySelector('.scoreDisplay');
// Load score from cookie
var scoreCookie = document.cookie.split('; ').find(row => row.startsWith('score='));
if (scoreCookie) {
    score = parseInt(scoreCookie.split('=')[1]);
    scoreDisplay.textContent = "Score: " + score;
}
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
    // Start score increment
    setInterval(function() {
        score += 5;
        document.cookie = "score=" + score;
        scoreDisplay.textContent = "Score: " + score; // Save score in cookie
    }, 60000); // 60000 milliseconds = 1 minute
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