let countdown; // holds countdown interval
let cumulativeSeconds = 0; // holds cumulative time
let cumulativeInterval; // holds cumulative interval
let timerIsActive = false; // flag for timer activity
let hiddenTimestamp = null;
let score = 0;
function updateScore() {
    score = Math.floor(cumulativeSeconds / 60) * 5;
    document.getElementById('scoreDisplay').textContent = score;
  }
var alarmSound = new Audio('/sounds/alarm.mp3');
function timer(seconds) {
  const now = Date.now();
  const then = now + seconds * 1000;

  countdown = setInterval(() => {
    const secondsLeft = Math.round((then - Date.now()) / 1000);

    // check if we should stop it
    if(secondsLeft < 0) {
      clearInterval(countdown);
      clearInterval(cumulativeInterval);
      timerIsActive = false;
      alarmSound.play();
        alarmSound.onended = function() {
            playCount++;
            if (playCount < 3) {
                alarmSound.play();
            }
        };
      return;
    }
    updateScore(); // update the score

    const hours = Math.floor(secondsLeft / 3600).toString().padStart(2, '0');
    const minutes = Math.floor((secondsLeft % 3600) / 60).toString().padStart(2, '0');
    const seconds = (secondsLeft % 60).toString().padStart(2, '0');
    // display it
    document.getElementById('timer').textContent = `${hours}:${minutes}:${seconds}`;
  }, 1000);

  cumulativeInterval = setInterval(() => {
    cumulativeSeconds++;
    const hours = Math.floor(cumulativeSeconds / 3600).toString().padStart(2, '0');
  const minutes = Math.floor((cumulativeSeconds % 3600) / 60).toString().padStart(2, '0');
  const seconds = (cumulativeSeconds % 60).toString().padStart(2, '0');

    document.getElementById('timer2').textContent = `${hours}:${minutes}:${seconds}`;
  }, 1000);
}

// start timer on button click
document.getElementById('startTimer').addEventListener('click', () => {
    const hours = parseInt(document.getElementById('inputHours').value);
    const minutes = parseInt(document.getElementById('inputMinutes').value);
    const seconds = parseInt(document.getElementById('inputSeconds').value);

    const totalSeconds = (hours * 60 * 60) + (minutes * 60) + seconds;
    timer(totalSeconds);
});

// stop timer on button click
document.getElementById('stopTimer').addEventListener('click', () => {
    clearInterval(countdown);
    clearInterval(cumulativeInterval);
    document.getElementById('timer').textContent = '00:00:00';
});

function displayCurrentTime() {
  const now = new Date();
  const hours = now.getHours();
  const minutes = now.getMinutes();
  const seconds = now.getSeconds();
  const ampm = hours >= 12 ? 'PM' : 'AM';
  const strTime = `${hours % 12}:${minutes}:${seconds} ${ampm}`;
  const strDate = `${now.getDate()}/${now.getMonth()+1}/${now.getFullYear()}`;

  document.getElementById('currentTime').textContent = `${strTime} || ${strDate}`;
}

document.addEventListener('visibilitychange', function() {
    if (!timerIsActive) return; // If the timer is not active, do nothing
  
    if (document.hidden) {
      // Tab is not visible, record the current timestamp
      hiddenTimestamp = Date.now();
    } else {
      // Tab is visible, calculate the difference
      const diffInSeconds = (Date.now() - hiddenTimestamp) / 1000;
      if (diffInSeconds > 10) {
        score-=10;
        updateScore(); // Subtract 10 seconds if the tab was hidden for more than 10 seconds
      }
    }
  });
// update current time every second
setInterval(displayCurrentTime, 1000);
