<!-- cart.html -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="css/default.css" />
    <script type="text/javascript" src="scripts/cart.js"></script>
    <script type="text/javascript" src="scripts/menu.js"></script>
    <title>Your Cart!</title>
  </head>
  <body>
    <div id="page">
      <!--#include virtual="common/logo.php"-->
      <!--#include virtual="common/mainMenu.php"-->
      <div id="cart">
        <form id="cartForm" action="" onsubmit="validateInput()">
          <fieldset>
            <legend>Your Shopping Cart</legend>
            <table summary="Customer's shopping cart">
              <tr>
                <td>Choose from Deals:</td>
                <td>
                  <select name="deals">
                    <option value="The Avengers">The Avengers</option>
                    <option value="The Hunger Games">The Hunger Games</option>
                    <option value="Fury">Fury</option>
                  </select>
                </td>
                <td>Price per Unit: $10.99 + tax</td>
                <td>Units: <input type="text" name="qDeal" size=5 value = "0"/></td>
              </tr>
              <tr>
                <td>Choose from Rare Finds:</td>
                <td>
                  <select name="rare">
                    <option value="The World Is Not Enough 007">The World Is Not Enough</option>
                    <option value="My Neighbor Totoro">My Neighbor Totoro - Japanese</option>
                    <option value="Citizen Kane">Citizen Kane</option>
                  </select>
                </td>
                <td>Price per Unit: $14.99 + tax</td>
                <td>Units: <input type="text" name="qRare" size=5 value = "0"/></td>
              </tr>
              </tr>
              <tr>
                <td>Choose from New Releases:</td>
                <td>
                  <input type="checkbox" name="Hero" value="Big Hero 6" />Big Hero 6<br />
                  <input type="checkbox" name="Inter" value="Interstellar" />Interstellar<br />
                  <input type="checkbox" name="Woods" value="Into the Woods" />Into the Woods
                </td>
                <td>Price per Unit: $11.99 + tax</td>
                <td>Units: <input type="text" name="qNew" size=5 value = "0"/><br />
                    Units: <input type="text" name="qNew1" size=5 value = "0"/><br />
                    Units: <input type="text" name="qNew2" size=5 value = "0"/>
                </td>
              </tr>
              <tr>
                <td colspan="2"><input type="checkbox" name="tax" value="exempt" /> I have tax-exempt status.</td>
              </tr>
            </table>
          </fieldset>
          <input type="submit" name="submit" value="Submit" />
          <input type="reset" name="reset" value="Reset" />
        </form>
      </div>
      <!--#include virtual="common/footer.php"-->
    </div>
  </body>
</html>
