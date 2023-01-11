<?php
  // database details
  include("includes\db_connect.php");
echo "<pre>";
print_r($_POST);
if(isset($_POST['submit'])){
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$dob= $_POST['dob'];
$address = $_POST['address'];
$city = $_POST['city'];
$pincode=$_POST['pincode'];
$country = $_POST['country'];
$hobbies = $_POST['hobbies'];
$hobbies_str = implode("|", $hobbies);  
$qualification= $_POST['qualification'];
$branch= $_POST['branches'];
}

// insert in database 
$sql = "INSERT INTO student(fname,lname,email,phone,gender,dob,address,city,pincode,country,hobbies,qualification,branch_name)  VALUES ('$fname','$lname','$email','$phone','$gender','$dob','$address','$city','$pincode','$country','$hobbies_str','$qualification','$branch')";
echo "<br>$sql<br>";

$rs = mysqli_query($conn, $sql);

if($rs)
{
	echo "Form Successfully Submitted..!";
}

?>