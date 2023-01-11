<?php
    include("includes\db_connect.php");
    
    if(isset($_POST['submit'])){
        $id= $_POST['id'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $dob= $_POST['dob'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $pincode = $_POST['pincode'];
        $country = $_POST['country'];
        $hobbies = $_POST['hobbies'];
        $hobbies_str = implode("|", $hobbies); 
        $qualification= $_POST['qualification'];
        $branch= $_POST['branch_name'];
        echo "<pre>";
        print_r($_POST);
    // using sql to create a data entry query
    $sql = "UPDATE student SET fname='$fname', lname='$lname', email='$email', phone='$phone', gender='$gender', dob='$dob', address='$address', city='$city',pincode='$pincode', country='$country', hobbies='$hobbies_str', qualification='$qualification',branch_name='$branch' WHERE id='$id'";
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

    header("Location: students_list.php?status_message=$status_message");
    exit;
  }
    // close connection
    mysqli_close($conn);
?>