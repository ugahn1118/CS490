<?php
include ("account.php");
$conn = mysqli_connect($hostname, $username, $password, $dbname);

$data = $_POST;

$q1nameres = $data['q1nameres'];
$q1colonres = $data['q1colonres'];
$q1constraintres = $data['q1constraintres'];
$q1total = $data['q1total'];
$q2nameres = $data['q2nameres'];
$q2colonres = $data['q2colonres'];
$q2constraintres = $data['q2constraintres'];
$q2total = $data['q2total'];
$q3nameres = $data['q3nameres'];
$q3colonres = $data['q3colonres'];
$q3constraintres = $data['q3constraintres'];
$q3total = $data['q3total'];
$q4nameres = $data['q4nameres'];
$q4colonres = $data['q4colonres'];
$q4constraintres = $data['q4constraintres'];
$q4total = $data['q4total'];
$totalScore = $data['totalScore'];
$user = $data['user'];
$q1TestCaseTotal = $data['q1TestCaseTotal'];
$q2TestCaseTotal = $data['q2TestCaseTotal'];
$q3TestCaseTotal = $data['q3TestCaseTotal'];
$q4TestCaseTotal = $data['q4TestCaseTotal'];
$q1Comment = $data['q1Comment'];
$q2Comment = $data['q2Comment'];
$q3Comment = $data['q3Comment'];
$q4Comment = $data['q4Comment'];
$exam = $data['exam'];

if( $exam == 1){
    $sql = "UPDATE exam1Result SET q1nameres = $q1nameres, q1colonres = $q1colonres, q1constraintres = $q1constraintres, q1total = $q1total, q2nameres = $q2nameres, q2colonres = $q2colonres, q2constraintres = $q2constraintres, q2total = $q2total, q3nameres = $q3nameres, q3colonres = $q3colonres, q3constraintres = $q3constraintres, q3total = $q3total, q4nameres = $q4nameres, q4colonres = $q4colonres, q4constraintres = $q4constraintres, q4total = $q4total, totalScore = $totalScore, q1TestCaseTotal = $q1TestCaseTotal, q2TestCaseTotal = $q2TestCaseTotal, q3TestCaseTotal = $q3TestCaseTotal, q4TestCaseTotal = $q4TestCaseTotal, q1Comment = '$q1Comment', q2Comment = '$q2Comment', q3Comment = '$q3Comment', q4Comment = '$q4Comment'  WHERE user = '$user';";
    $query = mysqli_query($conn, $sql);
}else if( $exam == 2){
    $sql = "UPDATE exam2Result SET q1nameres = $q1nameres, q1colonres = $q1colonres, q1constraintres = $q1constraintres, q1total = $q1total, q2nameres = $q2nameres, q2colonres = $q2colonres, q2constraintres = $q2constraintres, q2total = $q2total, q3nameres = $q3nameres, q3colonres = $q3colonres, q3constraintres = $q3constraintres, q3total = $q3total, q4nameres = $q4nameres, q4colonres = $q4colonres, q4constraintres = $q4constraintres, q4total = $q4total, totalScore = $totalScore, q1TestCaseTotal = $q1TestCaseTotal, q2TestCaseTotal = $q2TestCaseTotal, q3TestCaseTotal = $q3TestCaseTotal, q4TestCaseTotal = $q4TestCaseTotal, q1Comment = '$q1Comment', q2Comment = '$q2Comment', q3Comment = '$q3Comment', q4Comment = '$q4Comment'  WHERE user = '$user';";
    $query = mysqli_query($conn, $sql);
}else{
    $sql = "UPDATE exam3Result SET q1nameres = $q1nameres, q1colonres = $q1colonres, q1constraintres = $q1constraintres, q1total = $q1total, q2nameres = $q2nameres, q2colonres = $q2colonres, q2constraintres = $q2constraintres, q2total = $q2total, q3nameres = $q3nameres, q3colonres = $q3colonres, q3constraintres = $q3constraintres, q3total = $q3total, q4nameres = $q4nameres, q4colonres = $q4colonres, q4constraintres = $q4constraintres, q4total = $q4total, totalScore = $totalScore, q1TestCaseTotal = $q1TestCaseTotal, q2TestCaseTotal = $q2TestCaseTotal, q3TestCaseTotal = $q3TestCaseTotal, q4TestCaseTotal = $q4TestCaseTotal, q1Comment = '$q1Comment', q2Comment = '$q2Comment', q3Comment = '$q3Comment', q4Comment = '$q4Comment'  WHERE user = '$user';";
    $query = mysqli_query($conn, $sql);
}

echo mysqli_error($conn);

?>
