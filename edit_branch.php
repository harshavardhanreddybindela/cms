<?php
      include("includes\db_connect.php");
    echo "<pre>";
    print_r($_POST);
    if(isset($_GET['id'])){
        $id= $_GET['id'];
    $sql = "select * from branches where id='$id'";
    $rs = mysqli_query($conn, $sql);
    if($rs)
    {
      echo "Successfully edited your details!";
    }
    mysqli_close($conn);
    }
    $rs=mysqli_fetch_assoc($rs);
print_r($rs); 
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form method="post" action="update_branch.php" name="myform"">
<table>
<input type="hidden" id="id" name="id" value="<?php echo $rs['id']; ?>">
    <tr>
        <td><label for="branchcode">Branch Code:</td>
        <td><input type="text" id="branchcode" name="branchcode" value="<?php echo $rs['branch_code']; ?>"></td>
    </tr>
    <tr>
        <td><label for="branchname">Branch Name:</td>
        <td><input type="text" id="branchname" name="branchname" value="<?php echo $rs['branch_name']; ?>"></td>
    </tr>
    <tr align="middle">
	<td><input type="submit" value="Submit" name="submit"></td>
    </tr>
</table>
</form>
</body>
</html>
