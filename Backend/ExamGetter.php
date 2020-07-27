<?php
/*
receive a username as an array
send back everything that jordan sent
in a exam result + instructions from the exam 1
*/
include ("account.php");
$conn = mysqli_connect($hostname, $username, $password, $dbname);

$sql = "SELECT username FROM UserInfo;";
$query = mysqli_query($conn, $sql);

$users = array();
while ($row = mysqli_fetch_assoc($query)){
    array_push($users, $row['username']);
}

echo json_encode($users);
 
?>
