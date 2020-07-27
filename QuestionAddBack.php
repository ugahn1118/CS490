<?php
include ("account.php");
$conn = mysqli_connect($hostname, $username, $password, $dbname);
$Name = $_POST ['fName'];
$Instructions = $_POST ['fInstructions'];
$TestCases = $_POST['fTestCases'];
$Constraints = $_POST['fConstraint'];
$Difficulty = $_POST ['fDifficulty'];
$Topic = $_POST ['fTopic'];

$dTestCases = json_decode($TestCases);
$array = json_decode(json_encode($dTestCases), true);

echo '<pre>'; print_r($array); echo '</pre>';

for( $i=0; $i<count($array); $i++ )
{
    foreach( $array[$i] as $key => $value )
    {
        /*if (strpos($value, "'") )
        {
           $value = str_replace("'", "\''", $value);
        } */ 
        //$array[$i][$key] = mysqli_real_escape_string($conn, $value);
    }
}

$TestCases = json_encode($array);

echo $TestCases;

$sql = "INSERT INTO Questions (Name, Instructions, TestCases, Constraints, Difficulty, Topic)
VALUES ('".$Name."', '".$Instructions."', '".$TestCases."', '".$Constraints."', '".$Difficulty."', '".$Topic."');";

$query = mysqli_query($conn, $sql);

echo mysqli_error($conn);

echo "Question added";

?>