function validateForm() {
  let a = document.getElementById("fname").value;
  if (a == "") {
    alert("Please Enter First Name");
    return false;
  }
  let b = document.getElementById("lname").value;
  if (b==""){
    alert("Please Enter Last Name");
    return false;
  }
  let c = document.getElementById("email").value;
  if (c==""){
    alert("Please Enter Email");
    return false;
  } 
  let d = document.getElementById("phone").value;
    if (d==""){
    alert("Please Enter Phone number");
    return false;
  }
  if ( ( myform.gender[0].checked == false ) && ( myform.gender[1].checked == false ) )
  {
    alert ( "Please choose your Gender: Male or Female" );
    return false;
  }
  let f = document.getElementById('dob').value;
    if(f== ""){
      alert("Please select your date of birth");
      return false;
    }
  let h = document.getElementById("address").value;
    if (h==""){
    alert("Please Enter Address");
    return false;
  }
  let i = document.getElementById("city").value;
    if (i==""){
    alert("Please Enter city");
    return false;
  }
  let j = document.getElementById("pincode").value;
    if (j==""){
    alert("Please Enter pincode");
    return false;
  }
  let k = document.getElementById("country").value;
    if (k==""){
    alert("Please Enter pincode");
    return false;
  }
  if (( document.myform.hobby1.checked == false ) &&  (document.myform.hobby2.checked == false) &&  (document.myform.hobby3.checked == false) && (document.myform.hobby4.checked == false) &&  (document.myform.hobby5.checked == false) && (document.myform.hobby6.checked ==false))
    {
        alert ( "Please check atleast one of your hobbies " );
        return false;
    }
  var e = document.getElementById("qualification");
    var strUser = e.options[e.selectedIndex].value;
    if(strUser==0) 
    {
      alert("Please select your qualification");
      return false;
    }
    if (( document.myform.bca.checked == false ) && (document.myform.bcom.checked == false) && (document.myform.bsc.checked == false) &&(document.myform.ba.checked == false) && (document.myform.mca.checked == false) && (document.myform.mcom.checked ==false) && (document.myform.msc.checked == false) && (document.myform.ma.checked ==false))
    {
        alert ( "Please check your interested course" );
        return false;
    }
}
