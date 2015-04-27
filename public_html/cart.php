<!-- cart.html -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="css/default.css" />
    <script type="text/javascript" src="scripts/cart.js"></script>
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
                    <option value="Avengers">The Avengers</option>
                    <option value="Hunger">The Hunger Games</option>
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
                    <option value="007">The World Is Not Enough</option>
                    <option value="Totoro">My Neighbor Totoro - Japanese</option>
                    <option value="Kane">Citizen Kane</option>
                  </select>
                </td>
                <td>Price per Unit: $14.99 + tax</td>
                <td>Units: <input type="text" name="qRare" size=5 value = "0"/></td>
              </tr>
              </tr>
              <tr>
                <td>Choose from New Releases:</td>
                <td>
                  <select multiple name="new">
                    <option value="Hobbit" selected>The Hobbit: The Battle of the Five Armies</option>
                    <option value="Interstellar">Interstellar</option>
                    <option value="Woods">Into the Woods</option>
                  </select>
                </td>
                <td>Price per Unit: $11.99 + tax</td>
                <td>Units: <input type="text" name="qNew" size=5 value = "0"/></td>
              </tr>
              <tr>
                <td colspan="2"><input type="checkbox" name="tax" value="exempt" /> I have tax-exempt status.</td>
              </tr>
            </table>
            Note: Hold down Ctrl (Windows) or command (Mac) to select multiple for New Releases.
          </fieldset>
          <input type="submit" name="submit" value="Submit" />
          <input type="reset" name="reset" value="Reset" />
        </form>
      </div>
      <!--#include virtual="common/footer.php"-->
    </div>
  </body>
</html>
