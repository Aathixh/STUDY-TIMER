let countdown; // holds countdown interval
let cumulativeSeconds = 0; // holds cumulative time
let cumulativeInterval; // holds cumulative interval

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
      alarmSound.play();
            alarmSound.onended = function() {
                playCount++;
                if (playCount < 3) {
                    alarmSound.play();
                }
            };
      return;
    }
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
  const hours = document.getElementById('inputHours').value;
  const minutes = document.getElementById('inputMinutes').value;
  const seconds = document.getElementById('inputSeconds').value;

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

// update current time every second
setInterval(displayCurrentTime, 1000);