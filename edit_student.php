<?php
      include("includes\db_connect.php");
      include("menu.php");
    echo "<pre>";
    print_r($_POST);
    if(isset($_GET['id'])){
        $id= $_GET['id'];
    $sql = "select * from student where id='$id'";
    $rs = mysqli_query($conn, $sql);
    if($rs)
    {
      echo "Successfully edited your details!";
    }
    mysqli_close($conn);
    }
    $rs=mysqli_fetch_assoc($rs);
    $hobbies_array = explode('|', $rs['hobbies']);
    $hobbies_array = array_map("trim", $hobbies_array);

    print_r($hobbies_array);

    if(isset($_POST['submit'])){
    if(!empty($_POST['qualification'])) {
      $selected = $rs['qualification'];
      foreach($rs['qualification'] as $selected){
        echo '  ' . $selected;
    }
  }
  
}  
print_r($rs); 
?>
<!DOCTYPE html>
<html>
<body bgcolor="#ffffe5">
<head>
  <script src="validation.js"></script>
</head>
<h1 align="middle">Student Register Form</h1>

<form method="post" action="update_student.php" name="myform" onsubmit="return validateForm()">
<input type="hidden" id="id" name="id" value="<?php echo $rs['id']; ?>">
<fieldset>
  <legend>Edit your details below</legend>
<table>
<tr>
  <td><label for="fname">First name:</label></td>
  <td><input type="text" id="fname" name="fname" value="<?php echo $rs['fname']; ?>"></td>
</tr>
<tr>
  <td><label for="lname">Last name:</label></td>
  <td><input type="text" id="lname" name="lname" value="<?php echo $rs['lname']; ?>"></td>
</tr>
<tr>
  <td><label for="email">Email:</label></td>
  <td><input type="email" id="email" name="email" value="<?php echo $rs['email']; ?>"></td>
</tr>

<tr>
  <td><label for="phone">Phone No.:</label></td>
  <td><input type="tel" id="phone" name="phone" value="<?php echo $rs['phone']; ?>"></td>
</tr>
<td>
<label for="branches">Branch:</label>
<td><select type="option" name="branches" id="branches">
	<option value="select">-select-</option>
	<option value="cse" 
  <?php
  if($rs['branch']=='cse'){
    echo "selected";
  }
  ?>>CSE</option>
	<option value="ece" 
  <?php
  if($rs['branch']=='ece'){
    echo "selected";
  }
  ?>>ECE</option>
	<option value="it" 
  <?php
  if($rs['branch']=='it'){
    echo "selected";
  }
  ?>>IT</option>
	<option value="civil" <?php
  if($rs['branch']=='civil'){
    echo "selected";
  }
  ?>>CIVIL</option>
	<option value="mechanical" 
  <?php
  if($rs['branch']=='mechanical'){
    echo "selected";
  }
  ?>>MECHANICAL</option>
</select></td>
</tr>

<tr>
<td>
<label for="qualification">Qualification:</label>
<td><select type="option" name="qualification" id="qualification">
	<option value="select">-select-</option>
	<option value="highschool" 
  <?php
  if($rs['qualification']=='highschool'){
    echo "selected";
  }
  ?>>Highschool</option>
	<option value="higherschool"
  <?php
  if($rs['qualification']=='higherschool'){
    echo "selected";
  }
  ?>>Higherschool</option>
	<option value="bachelors"
  <?php
  if($rs['qualification']=='bachelors'){
    echo "selected";
  }
  ?>
  >Bachelors</option>
	<option value="masters"
  <?php
  if($rs['qualification']=='masters'){
    echo "selected";
  }
  ?>>Masters</option>
	<option value="phd"
  <?php
  if($rs['qualification']=='phd'){
    echo "selected";
  }
  ?>>Phd</option>
</select></td>
</tr>
<tr>
  <td><label for="gender">Gender:</label></td>
  <td><input type='radio' name='gender' value='male' <?php if ($rs['gender'] != "female") echo "checked"; ?>/>Male   <input type="radio" name="gender" value="female" <?php if ($rs['gender'] == "female") echo "checked"; ?>/>Female </td>
</tr>
<tr>
<td><label for="datepicker">Birthday:</label></td>
<td><input type="date" id="dob" name="dob" value="<?php echo $rs['dob']; ?>"></td>
</tr>
<tr>
<td><label for="address">Address:</label></td>
<td><textarea type="text" id="address" name="address" ><?php echo $rs['address']; ?></textarea></td>
</tr>
<tr>
<td><label for="city">City:</label></td>
<td><input type="text" id="city" name="city" value="<?php echo $rs['city']; ?>"></td>
</tr>
<tr>
<td><label for="pincode">Pincode:</label></td>
<td><input type="text" id="pincode" name="pincode" value="<?php echo $rs['pincode']; ?>"></td>
</tr>
<tr>
<td><label for="country">Country:</label></td>
<td><input type="text" id="country" name="country" value="<?php echo $rs['country']; ?>"></td>
</tr>
<tr>
<td><label>Hobbies:</label></td>
<tr>
<td><input type="checkbox" id="drawing" name="hobbies[]" value="drawing" <?php if(in_array("drawing",$hobbies_array)) echo "checked = true"; ?>>Drawing</td>
</tr>
<tr>
<td><input type="checkbox" id="singing" name="hobbies[]" value="singing" <?php if(in_array("singing",$hobbies_array)) echo "checked = true"; ?>>Singing</td>
</tr>
<tr>
<td><input type="checkbox" id="dancing" name="hobbies[]" value="dancing" <?php if(in_array("dancing",$hobbies_array)) echo "checked = true"; ?>>Dancing</td>
</tr>
<tr>
<td><input type="checkbox" id="sketching" name="hobbies[]" value="sketching" <?php if(in_array("sketching",$hobbies_array)) echo "checked = true"; ?>>Sketching</td>
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