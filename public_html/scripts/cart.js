//feedback3.js

function validateInput()
{
    var cartFormObj = document.getElementById("cartForm");
    var dealMovie = cartFormObj.deals.value;
    var qDeal = cartFormObj.qDeal.value;
    var rareMovie = cartFormObj.rare.value;
    var qRare = cartFormObj.qRare.value;
    var newMovie = cartFormObj.new.value;
    var qNew = cartFormObj.qNew.value;
    var exempt = cartFormObj.tax.checked;
    var everythingOK = true;

    if(!validateQ(qDeal))
    {
      alert("Error: Number of units for Deals is not a valid number.");
      everythingOK = false;
    }

    if(!validateQ(qRare))
    {
      alert("Error: Number of units for Rare Finds is not a valid number.");
      everythingOK = false;
    }

    if(!validateQ(qNew))
    {
      alert("Error: Number of units for New Releases is not a valid number.");
      everythingOK = false;
    }

    if(everythingOK)
    {
      var msg = "You bought:\n";

      if(qDeal != 0)
      {
        msg += "\nTitle: " + dealMovie + "\n\Quantity: " + qDeal + "\nPrice: " + (qDeal*10.99).toFixed(2) + "\n";
      }
      if(qRare != 0)
      {
        msg += "\nTitle: " + rareMovie + "\nQuantity: " + qRare + "\nPrice: " + (qRare*14.99).toFixed(2) + "\n";
      }
      if(qNew != 0)
      {
        msg += "\nTitle: " + newMovie + "\nQuantity: " + qNew + "\nPrice: " + (qNew*11.99).toFixed(2) + "\n";
      }
      var subTotal = calculateSubTotal(qDeal, qRare, qNew);
      msg += "\nRecepit: \nSubtotal: " + subTotal;
      if(exempt)
      {
        msg += "\nSales Tax %: 0";
        msg += "\nTotal Tax: 0.00";
        msg += "\nTotal Price: " + subTotal;
      }
      else
      {
        msg += "\nSales Tax %: 8.25";
        var totalTax = subTotal * 0.0825;
        msg += "\nTotal Tax: " + totalTax.toFixed(2);
        msg += "\nTotal Price: " + (subTotal + totalTax).toFixed(2);
      }
      alert(msg);
    }

}

function calculateSubTotal(qDeal, qRare, qNew)
{
  return (qDeal * 10.99) + (qRare * 14.99) + (qNew * 11.99);
}

function validateTax(cartFormObj)
{
  if(!cartFormObj.tax.checked)
  {
    return false;
  }
  return true;
}

function validateQ(q)
{
  return q >>> 0 === parseFloat(q);
}