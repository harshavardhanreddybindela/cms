<!DOCTYPE html>
<html>
<body bgcolor="#ffffe5">
<head>
	<script src="validation.js"></script>
</head>
<?php
 include("menu.php");
?>
<h1 align="middle">Student Register Form</h1>

<form method="post" action="insertstudent.php" name="myform" onsubmit="return validateForm()">
<fieldset>
  <legend>Enter details below</legend>
<table>
<tr>
  <td><label for="fname">First name:</label></td>
  <td><input type="text" id="fname" name="fname"></td>
</tr>
<tr>
  <td><label for="lname">Last name:</label></td>
  <td><input type="text" id="lname" name="lname"></td>
</tr>
<tr>
  <td><label for="email">Email:</label></td>
  <td><input type="email" id="email" name="email" ></td>
</tr>

<tr>
  <td><label for="phone">Phone No.:</label></td>
  <td><input type="tel" id="phone" name="phone"></td>
</tr>
<tr>
<td>
<label for="branches">Branch:</label>
<td><select type="option" name="branches" id="branches">
	<option value="select">-select-</option>
	<option value="cse">CSE</option>
	<option value="ece">ECE</option>
	<option value="it">IT</option>
	<option value="civil">CIVIL</option>
	<option value="mechanical">MECHANICAL</option>
</select></td>
</tr>
<tr>
<td>
<label for="Qualification">Qualification:</label>
<td><select type="option" name="qualification" id="qualification">
	<option value="select">-select-</option>
	<option value="highschool">Highschool</option>
	<option value="higherschool">Higherschool</option>
	<option value="bachelors">Bachelors</option>
	<option value="masters">Masters</option>
	<option value="phd">Phd</option>
</select></td>
</tr>
<tr>
  <td><label for="gender">Gender:</label></td>
  <td><input type="radio" name="gender" value="male"> Male <input type="radio" name="gender" value="female"> Female </td>
</tr>
<tr>
<td><label for="datepicker">Birthday:</label></td>
<td><input type="date" id="dob" name="dob"></td>
</tr>
<tr>
<td><label for="address">Address:</label></td>
<td><textarea type="text" id="address" name="address"></textarea></td>
</tr>
<tr>
<td><label for="city">City:</label></td>
<td><input type="text" id="city" name="city"></td>
</tr>
<tr>
<td><label for="pincode">Pincode:</label></td>
<td><input type="text" id="pincode" name="pincode"></td>
</tr>
<tr>
<td><label for="country">Country:</label></td>
<td><input type="text" id="country" name="country"></td>
</tr>
<tr>
<td><label>Hobbies:</label></td>
<tr>
<td><input type="checkbox" id="drawing" name="hobbies[]" value="drawing">
<label for="hobby"> Drawing</label></td>
</tr>
<tr>
<td><input type="checkbox" id="singing" name="hobbies[]" value="singing">
<label for="hobby"> Singing</label></td>
</tr>
<tr>
<td><input type="checkbox" id="dancing" name="hobbies[]" value="dancing">
<label for="hobby"> Dancing</label></td>
</tr>
<tr>
<td><input type="checkbox" id="sketching" name="hobbies[]" value="sketching">
<label for="hobby"> Sketching</label></td>
</tr>
<tr align="middle">
	<td><input type="submit" value="Submit" name="submit"></td>
	<td><input type="reset" value="Reset"></td>
</tr>
  
</table>
</fieldset>
</form>

</body>
</html>