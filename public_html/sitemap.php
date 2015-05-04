<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- sitemap.php -->
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>WeSellDVDs - Site Map</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="css/default.css" />
    <script type="text/javascript" src="scripts/menu.js"></script>
  </head>
  <body>
    <div id="page">
      <?php
        include("common/logo.php");
        include("common/mainMenu.php");
      ?>
      <div id="content">
        <div id="textOnly">
                <ol>
                  <li><a href="buy.php">Buy Now</a>
                    <ul>
                      <li><a href="deals.php">Deals</a></li>
                      <li><a href="new releases.php">New Releases</a></li>
                      <li><a href="coming soon.php">Coming Soon</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="about.php">About Us</a>
                    <ul>
                      <li><a href="mission.php">Our Mission</a></li>
                      <li><a href="location.php">Find A Location</a></li>
                      <li><a href="contact.php">Contact Us</a></li>
                      <li><a href="career.php">Careers</a></li>
                    </ul>
                  </li>
                  <li><a href="support.php">Technical Support</a></li>
                  <li><a href="contact.php">Contact Us</a></li>
                  <li><a href="cart.php">Your Cart</a></li>
                </ol>
        </div>
      </div>
      <?php
        include("common/footer.php");
      ?>
    </div>
  </body>
</html>
