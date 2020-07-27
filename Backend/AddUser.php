<?php
include ("account.php");
$conn = mysqli_connect($hostname, $username, $password, $dbname);

$pw = password_hash ('14', PASSWORD_DEFAULT);

$sql = "INSERT INTO UserInfo(username, password, firstname, lastname, IsProf)
values ('sc14', '$pw', 'Stephen', 'Curry', 0);";

$query = mysqli_query($conn, $sql);
?>
