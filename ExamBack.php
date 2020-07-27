<?php
include ("account.php");
$conn = mysqli_connect($hostname, $username, $password, $dbname);

$session = $_POST['whichTest'];


if($session == "1"){
    $sql = "SELECT * FROM exam1;";
    $query = mysqli_query($conn, $sql);

    $questions = array();

    while ($row = mysqli_fetch_assoc($query)){
    array_push($questions, $row);
    }
echo json_encode($questions);
}
elseif($session == "2"){
    $sql = "SELECT * FROM exam2;";
    $query = mysqli_query($conn, $sql);

    $questions = array();

    while ($row = mysqli_fetch_assoc($query)){
    array_push($questions, $row);
    }
echo json_encode($questions);
}
elseif($session == "3"){
    $sql = "SELECT * FROM exam3;";
    $query = mysqli_query($conn, $sql);

    $questions = array();

    while ($row = mysqli_fetch_assoc($query)){
    array_push($questions, $row);
    }
echo json_encode($questions);
}
else{
    echo json_encode("No Such Exam.");
}



?>