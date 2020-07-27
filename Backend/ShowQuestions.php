<?php

include ("account.php");
$conn = mysqli_connect($hostname, $username, $password, $dbname);

$sql = "SELECT * FROM Questions;";


$query = mysqli_query($conn, $sql);


while ($row = mysqli_fetch_assoc($query)){
    printf("%s, %s\n", $row["Name"], $row["Instructions"]);
}

?>
