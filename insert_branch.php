<?php
include("includes\db_connect.php");

echo "<pre>";
print_r($_POST);
if(isset($_POST['submit'])){
    $branchcode= $_POST['branchcode'];
    $branchname= $_POST['branchname'];
}

$sql = "INSERT INTO branches(branch_code,branch_name) VALUES ('$branchcode','$branchname')";
echo "<br>$sql<br>";

$rs = mysqli_query($conn, $sql);

if($rs)
{
	echo "Form Successfully Submitted..!";
}

?>