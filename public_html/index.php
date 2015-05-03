<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- opening.html -->
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Welcome Page</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="css/opening.css" />
    <script type="text/javascript" src="scripts/opening.js"></script>
  </head>
  <body onload ="displayTime(); setInterval('displayTime()',1000); closeSlate(); setInterval('closeSlate()',30)">
    <img id="top" src="img/Film-Slate-top.jpg" alt="top" />
    <div id="overlay">
      <img id="bottom" src="img/Film-Slate-bottom.jpg" alt="bottom" />
      <div id="greeting">
      </div>
      <div id="hour">
      </div>
      <div id="minute">
      </div>
      <div id="second">
      </div>
      <div id="scene">
        <p>Welcome to WeSellDVDs</p>
        <button type="button" onclick="homePage()">Enter</button>
      </div>
      <div id="date">
      </div>
    </div>
  </body>
</html>
