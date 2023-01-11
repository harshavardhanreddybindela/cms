<html>
<body>
<table>
    <th>S.No.</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>E-mail</th>
    <th>Phone</th>
    <th>Gender</th>
    <th>Date of Birth</th>
    <th>Address</th>
    <th>City</th>
    <th>Pincode</th>
    <th>Country</th>
    <th>Hobbies</th>
    <th>Qualification</th>
    <th>Action</th>
    
<?php
include("includes\db_connect.php");
include("menu.php");
if(empty($_GET['status_message']) == false)
{
print_r($_GET['status_message']);
}
$counter = 0;
$sql = "SELECT * FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0){
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $counter+=1;
    echo "<tr>
    <td>".+$counter."</td>
    <td>".$row["fname"]."</td>
    <td>".$row["lname"]."</td>
    <td>".$row["email"]."</td>
    <td>".$row["phone"]."</td>
    <td>".$row["gender"]."</td>
    <td>".$row["dob"]."</td>
    <td>".$row["address"]."</td>
    <td>".$row["city"]."</td>
    <td>".$row["pincode"]."</td>
    <td>".$row["country"]."</td>
    <td>".$row["hobbies"]."</td>
    <td>".$row["qualification"]."</td>
    <td><a href='delete_student.php?id=".$row['id']."' class='btn btn-danger'>Delete</a></td>
    <td><a href='edit_student.php?id=".$row['id']."' class='btn btn-pencil'>Edit</a></td>
    </tr>";
  }
}
else{
    echo "no results";
}

$conn->close();
?>
</table>
</body>
</html>