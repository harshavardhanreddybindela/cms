function validateEmail(inputText)
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(inputText.value.match(mailformat))
  {
    alert("Valid email address!");
    document.myform.email.focus();
    return true;
  }
else
  {
    alert("Invalid email address!");
    document.myform.email.focus();
    return false;
  }
}