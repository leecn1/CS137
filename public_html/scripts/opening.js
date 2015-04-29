//opening.js

function displayTime()
{
  var now = new Date();
  var month = now.getMonth();
  var day = now.getDate();
  var year = now.getFullYear();
  var hour = now.getHours();
  var minute = now.getMinutes();
  var second = addZero(now.getSeconds());

  var greeting;
  if(hour < 12)
  {
    greeting = "Good Morning!";
  }
  else if(hour < 17)
  {
    greeting = "Good Afternoon!"
  }
  else
  {
    greeting = "Good Evening!";
  }
  document.getElementById("hour").innerHTML = "<p>Hour<br />" + hour + "</p>";
  document.getElementById("minute").innerHTML = "<p>Minute<br />" + minute + "</p>";
  document.getElementById("second").innerHTML = "<p>Second<br />" + second + "</p>";
  document.getElementById("greeting").innerHTML = "<p>" + greeting + "</p>";
}

function addZero(i)
{
  if(i < 10)
  {
    i = "0" + i;
  }
  return i;
}

function homePage()
{
  location.href = "home.php";
}
