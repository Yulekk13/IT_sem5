<aside class="right-side">
  <div class="date hide-mobile">
    DATE: <br />
    <span id="day"></span>
    <span>.</span>
    <span id="month"></span>
    <span>.</span>
    <span id="year"></span>
  </div>
  <div class="clock hide-mobile">
    TIME: <br />
    <span id="hours">00</span>
    <span>:</span>
    <span id="minutes">00</span>
    <span>:</span>
    <span id="seconds">00</span>
  </div>
</aside>

<style>
  .right-side {
    display: 1;
    width: 16%;
    background-color: #121237;
    align-items: center;
  }

  @media only screen and (max-width: 600px) {
   .hide-mobile 
   {display:none;}
  }
  .clock {
    font-family: Arial, Helvetica, sans-serif;
    color: #ecfcfc;
    font-weight: bold;
    font-size: 120%;
    border-style: solid;
    padding: 6px;
    margin: 15%;
    align-items: center;
    text-align: center;
  }

  .date {
    font-family: Arial, Helvetica, sans-serif;
    color: #ecfcfc;
    font-weight: bold;
    font-size: 120%;
    border-style: solid;
    padding: 6px;
    margin: 15%;
    align-items: center;
    text-align: center;
  }
</style>
