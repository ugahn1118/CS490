<?php

include ("account.php");
$conn = mysqli_connect($hostname, $username, $password, $dbname);

$qinfo1 = $_POST['question_1'];
$qinfo2 = $_POST['question_2'];
$qinfo3 = $_POST['question_3'];
$qinfo4 = $_POST['question_4']; 
$points1 = $_POST['pts_1'];
$points2 = $_POST['pts_2'];
$points3 = $_POST['pts_3'];
$points4 = $_POST['pts_4'];
$session = $_POST['exam'];

$question1 = "SELECT * FROM Questions WHERE Name LIKE '$qinfo1';";
$question2 = "SELECT * FROM Questions WHERE Name LIKE '$qinfo2';";
$question3 = "SELECT * FROM Questions WHERE Name LIKE '$qinfo3';";
$question4 = "SELECT * FROM Questions WHERE Name LIKE '$qinfo4';";

$q1query = mysqli_query($conn, $question1);
$q2query = mysqli_query($conn, $question2);
$q3query = mysqli_query($conn, $question3);
$q4query = mysqli_query($conn, $question4);

$row1 = mysqli_fetch_assoc($q1query);
$row2 = mysqli_fetch_assoc($q2query);
$row3 = mysqli_fetch_assoc($q3query);
$row4 = mysqli_fetch_assoc($q4query);

$insertExamQ1 = "INSERT INTO exam3(Name, Instructions, TestCases, Constraints, Difficulty, Topic, Points, Session)
VALUES ('".$row1['Name']."', '".$row1['Instructions']."', '".$row1['TestCases']."', '".$row1['Constraints']."', '".$row1['Difficulty']."', '".$row1['Topic']."', '".$points1."', '".$session."');";

$insertExamQ2 = "INSERT INTO exam3(Name, Instructions, TestCases, Constraints, Difficulty, Topic, Points, Session)
VALUES ('".$row2['Name']."', '".$row2['Instructions']."', '".$row2['TestCases']."', '".$row2['Constraints']."', '".$row2['Difficulty']."', '".$row2['Topic']."', '".$points2."', '".$session."');";

$insertExamQ3 = "INSERT INTO exam3(Name, Instructions, TestCases, Constraints, Difficulty, Topic, Points, Session)
VALUES ('".$row3['Name']."', '".$row3['Instructions']."', '".$row3['TestCases']."', '".$row3['Constraints']."', '".$row3['Difficulty']."', '".$row3['Topic']."', '".$points3."', '".$session."');";

$insertExamQ4 = "INSERT INTO exam3(Name, Instructions, TestCases, Constraints, Difficulty, Topic, Points, Session)
VALUES ('".$row4['Name']."', '".$row4['Instructions']."', '".$row4['TestCases']."', '".$row4['Constraints']."', '".$row4['Difficulty']."', '".$row4['Topic']."', '".$points4."', '".$session."');";

mysqli_query($conn, $insertExamQ1);
mysqli_query($conn, $insertExamQ2);
mysqli_query($conn, $insertExamQ3);
mysqli_query($conn, $insertExamQ4);

$questions = array($row1, $row2, $row3, $row4);
echo json_encode($questions);
echo json_encode($_POST);
?>