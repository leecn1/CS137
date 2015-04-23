<!-- feedback.html -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="css/default.css" />
    <title>Feeback Form!</title>
  </head>
  <body>
    <div id="page">
      <!--#include virtual="common/logo.php"-->
      <!--#include virtual="common/mainMenu.php"-->
      <div id="feedback">
        <form>
          <table summary="Feedback form for WeSellDVDs">
            <tr valign="top">
              <td>First Name:</td>
              <td><input type="text" name="firstN" size="30"
                placeholder="Enter first name here..." /></td>
            </tr>
            <tr valign="top">
              <td>Last Name:</td>
              <td><input type="text" name="lastN" size="30"
                placeholder="Enter last name here..." /></td>
            </tr>
            <tr valign="top">
              <td>Phone Number:</td>
              <td><input type="text" name="phone" size="30"
                placeholder="Enter phone number here..." /></td>
            </tr>
            <tr valign="top">
              <td>Email Address:</td>
              <td><input type="text" name="email" size="30"
                placeholder="Enter email address here..." /></td>
            </tr>
            <tr valign="top">
              <td>Comment:</td>
              <td><textarea rows="5" cols="40" placeholder="Enter comments here..."></textarea></td>
            </tr>
            <tr valign="top">
              <td></td>
              <td><input type="submit" name="submit" value="Submit" /></td>
            </tr>
          </table>
        </form>
      </div>
      <!--#include virtual="common/footer.php"-->
    </div>
  </body>
</html>
