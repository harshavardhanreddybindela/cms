<?php
    include("includes\db_connect.php");
    echo "<pre>";
    print_r($_POST);
    if(isset($_GET['id'])){
    $id= $_GET['id'];
    // using sql to create a data entry query
    $sql ="delete from student where id='$id'";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($conn, $sql);
    if($rs)
    {
        echo "Successfully deleted your record";
    }
  
    // close connection
    mysqli_close($conn);
    }
?>