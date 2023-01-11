<html>
<body>
<table>
    <th>S.No.</th>
    <th>Branch Code</th>
    <th>Branch Name</th>
    <th>Action</th>
<?php
include("includes\db_connect.php");
if(empty($_GET['status_message']) == false)
{
print_r($_GET['status_message']);
}

$counter = 0;
$sql = "SELECT * FROM branches";

$result = $conn->query($sql);

if ($result->num_rows > 0){

  // output data of each row
  while($row = $result->fetch_assoc()) 
    {
        $counter+=1;
    echo "<tr>
    <td>".+$counter."</td>
    <td>".$row["branch_code"]."</td>
    <td>".$row["branch_name"]."</td>
    <td><a href='delete_branch.php?id=".$row['id']."' class='btn btn-danger'>Delete</a></td>
    <td><a href='edit_branch.php?id=".$row['id']."' class='btn btn-pencil'>Edit</a></td>
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