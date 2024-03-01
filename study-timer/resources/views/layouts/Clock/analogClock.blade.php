
<div id="ana_clock" class="text-center"></div>
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

        document.getElementById("ana_clock").innerHTML = time;
    }

    setInterval(updateClock, 1000);
</script>