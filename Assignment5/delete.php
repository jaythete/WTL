<?php 
include 'db_connect.php';

$id=$_POST['id'];
$sql = "DELETE FROM users WHERE id='$id'";
$conn->query($sql);

echo "Deleted Successfully";
echo "<form method='post' action='main.php' />";
echo "<button type='submit' name='BACK' style='padding:7px'>Home</button>";
echo "</form>";

?>
