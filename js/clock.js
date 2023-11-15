function displayTime() {
  var dataTime = new Date();
  var hrs = dataTime.getHours();
  var mins = dataTime.getMinutes();
  var secs = dataTime.getSeconds();

  if (hrs < 10) {
    hrs = "0" + hrs;
  }
  if (mins < 10) {
    mins = "0" + mins;
  }
  if (secs < 10) {
    secs = "0" + secs;
  }

  var session = document.getElementById("session");

  document.getElementById("hours").innerHTML = hrs;
  document.getElementById("minutes").innerHTML = mins;
  document.getElementById("seconds").innerHTML = secs;
}
setInterval(displayTime, 10);
