<?php
    include("includes\db_connect.php");
    
    if(isset($_POST['submit'])){
        $id= $_POST['id'];
        $branchcode = $_POST['branchcode'];
        $branchname = $_POST['branchname'];
    }
    $sql = "UPDATE branches SET branch_code='$branchcode',branch_name='$branchname' WHERE id='$id'";
    echo $sql;
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($conn, $sql);
    if($rs)
    {
        $status_message = "Successfully edited the student!";
    }
    else
    {
        $status_message = "Error in updating students";
    }

    header("Location: branch_list.php?status_message=$status_message");
    exit;
    // close connection
    mysqli_close($conn);
?>