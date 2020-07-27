<?php
include ("account.php");
$conn = mysqli_connect($hostname, $username, $password, $dbname);

$Exam = $_POST['Exam'];
$Name = $_POST['Name'];

if($Exam == 1){
    $sql = "SELECT * FROM exam1Result WHERE user LIKE '$Name';";
    $query = mysqli_query($conn, $sql);

    $result = array();

    while ($row = mysqli_fetch_assoc($query)){
    array_push($result, $row);
    }
    $sql2 = "SELECT Instructions, TestCases, Points, Constraints FROM exam1 ;";
    $query2 = mysqli_query($conn, $sql2);

    while ($row2 = mysqli_fetch_row($query2)){
    array_push($result, $row2);
    }

echo json_encode($result);
}
elseif($Exam == 2){
    $sql = "SELECT * FROM exam2Result WHERE user LIKE '$Name';";
    $query = mysqli_query($conn, $sql);

    $result = array();

    while ($row = mysqli_fetch_assoc($query)){
    array_push($result, $row);
    }
    $sql2 = "SELECT Instructions, TestCases, Points, Constraints FROM exam2 ;";
    $query2 = mysqli_query($conn, $sql2);

    
    while ($row2 = mysqli_fetch_row($query2)){
    array_push($result, $row2);
    }

echo json_encode($result);
}
elseif($Exam == 3){
    $sql = "SELECT * FROM exam3Result WHERE user LIKE '$Name';";
    $query = mysqli_query($conn, $sql);

    $result = array();

    while ($row = mysqli_fetch_assoc($query)){
    array_push($result, $row);
    }
    $sql2 = "SELECT Instructions, TestCases, Points, Constraints FROM exam3 ;";
    $query2 = mysqli_query($conn, $sql2);

    
    while ($row2 = mysqli_fetch_row($query2)){
    array_push($result, $row2);
    }

echo json_encode($result);
}

else{
    echo json_encode("No Such Exam.");
}



?>
