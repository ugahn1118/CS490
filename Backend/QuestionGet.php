<?php

include ("account.php");
$conn = mysqli_connect($hostname, $username, $password, $dbname);

$sql = "SELECT * FROM Questions;";


$query = mysqli_query($conn, $sql);

$questions = array();

while ($row = mysqli_fetch_assoc($query)){
    array_push($questions, $row);
}

echo json_encode($questions);

?>
