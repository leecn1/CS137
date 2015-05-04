<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- index.php -->
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>WeSellDVDs - DVDs Galore</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="css/default.css" />
    <script type="text/javascript" src="scripts/rotate.js"></script>
    <script type="text/javascript" src="scripts/menu.js"></script>
  </head>
  <body onload="startRotation()">
    <div id="page">
      <?php
        include("common/logo.php");
        include("common/mainMenu.php");
      ?>
      <div id="content">
        <div id="textLeft">
          <h3>Welcome to WeSellDVDs <?php echo $_SERVER['REMOTE_ADDR']?> - They're cheap!</h3>
          <?php date_default_timezone_set('America/Irvine');
                echo "Today is " . date("m/d/Y") . ", and the time is " .
                date("h:i:s A", time()) . " in PST.<br />";?>
          <p>Founded in 1995, WeSellDVDs was created to bring happiness to all
            movie lovers! We are one of the original companies to start selling
            DVDs, switching from VHS.
          </p>
          <p>We always have the best deals for DVDs! We will price-match with
            all major retailers if we do not have the lowest price. We have
            customer service 24/7 online, or by telephone.
          </p>
        </div>
        <div id="image">
          <img id="popular" src="" alt="Popular DVDs" width="105" height="148" />
        </div>
      </div>
      <?php
        include("common/footer.php");
      ?>
    </div>
  </body>
</html>
