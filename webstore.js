function validate()
{


    var email = document.getElementById('un');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filter.test(email.value))
    {
    alert('Please provide a valid email address for the user name.');
    return false

    //email thing copied from https://www.codeproject.com/Tips/492632/Email-Validation-in-JavaScript
    }
    var textbox = document.getElementById('pw');

  if (pw.value == "")
    {
      alert('You must have a password.')
      return false

    }

    var textbox = document.getElementById('swim');
    var textbox = document.getElementById('glasses');
    var textbox = document.getElementById('surf');

  if(swim.value<0||glasses.value<0||surf.value<0)
    {
          alert('Invalid Quantity. All boxes must be filled and quantity must be greater than or equal to 0.');
          return false
    }

  if (document.getElementById('shipping').value!="3-Day"||document.getElementById('shipping').value!="7-Day"||document.getElementById('shipping').value!="Overnight")
    {
      alert('You must choose a shipping option.')
      return false

    }
    else {return true}
}
