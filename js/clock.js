function displayTime() {
  var dataTime = new Date();
  var hrs = dataTime.getHours();
  var mins = dataTime.getMinutes();
  var secs = dataTime.getSeconds();
  var session = document.getElementById("session");

  document.getElementById("hours").innerHTML = hrs;
  document.getElementById("minutes").innerHTML = mins;
  document.getElementById("seconds").innerHTML = secs;
}
setInterval(displayTime, 10);
