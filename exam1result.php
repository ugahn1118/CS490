<?php
include ("account.php");
$conn = mysqli_connect($hostname, $username, $password, $dbname);

$sql = "";
$sqlValues = "";
$exam = $_POST[8];
$postChecker = $_POST[3];

echo "Connected to backend";

echo json_encode($_POST);


if( !(empty($_POST[3]))){

for ( $i = 0; $i < 4; $i++ ) {
    
    $num_tests = (count($_POST[$i]) - 4);
 

    if ( $num_tests == 6 ) {
        //insert query for entries 0-5 and last 3
        //insert into test 1 2 3 4 5 6
        if( $i==0 ){
            $array = $_POST[$i]; 
            if( $exam == 1){             
            $sql .= "INSERT INTO exam1Result(q1nameres, q1colonres, q1constraintres, q1test1, q1test2, q1test3, q1test4, q1test5, q1test6, q1total, ";
            }
            elseif( $exam == 2 ){
            $sql .= "INSERT INTO exam2Result(q1nameres, q1colonres, q1constraintres, q1test1, q1test2, q1test3, q1test4, q1test5, q1test6, q1total, ";
            }
            elseif( $exam == 3 ){
            $sql .= "INSERT INTO exam3Result(q1nameres, q1colonres, q1constraintres, q1test1, q1test2, q1test3, q1test4, q1test5, q1test6, q1total, ";
            }
            else{
                echo "No such exam number.";
            }
            
            $sqlValues .= "VALUES($array[0], $array[1], $array[2], $array[3], $array[4], $array[5], $array[6], $array[7], $array[8], $array[9], ";
            
        }
        elseif( $i==1 )
        {
            $array = $_POST[$i];
            $sql .= "q2nameres, q2colonres, q2constraintres, q2test1, q2test2, q2test3, q2test4, q2test5, q2test6, q2total, ";
            $sqlValues .= "$array[0], $array[1], $array[2], $array[3], $array[4], $array[5], $array[6], $array[7], $array[8], $array[9], ";
        }
        elseif( $i==2 )
        {
            $array = $_POST[$i];
            $sql .= "q3nameres, q3colonres, q3constraintres, q3test1, q3test2, q3test3, q3test4, q3test5, q3test6, q3total, ";
            $sqlValues .= "$array[0], $array[1], $array[2], $array[3], $array[4], $array[5], $array[6], $array[7], $array[8], $array[9], ";
        }
        elseif( $i==3 )
        {
            $array = $_POST[$i];
            $sql .= "q4nameres, q4colonres, q4constraintres, q4test1, q4test2, q4test3, q4test4, q4test5, q4test6, q4total, ";
            $sqlValues .= "$array[0], $array[1], $array[2], $array[3], $array[4], $array[5], $array[6], $array[7], $array[8], $array[9], ";
        }
        else{
            exit();
        } 
    }
    elseif ( $num_tests == 5 ) {
        //insert query for entries for 0-4 and last 3
        if( $i==0 ){
            if( $exam == 1){             
                $sql .= "INSERT INTO exam1Result(q1nameres, q1colonres, q1constraintres, q1test1, q1test2, q1test3, q1test4, q1test5, q1total, ";
                }
                elseif( $exam == 2 ){
                $sql .= "INSERT INTO exam2Result(q1nameres, q1colonres, q1constraintres, q1test1, q1test2, q1test3, q1test4, q1test5, q1total, ";
                }
                elseif( $exam == 3 ){
                $sql .= "INSERT INTO exam3Result(q1nameres, q1colonres, q1constraintres, q1test1, q1test2, q1test3, q1test4, q1test5, q1total, ";
                }
                else{
                    echo "No such exam number.";
                }
            $array = $_POST[$i];    
            $sqlValues .= "VALUES($array[0], $array[1], $array[2], $array[3], $array[4], $array[5], $array[6], $array[7], $array[8], ";
        }
        elseif( $i==1 )
        {
            $array = $_POST[$i];
            $sql .= "q2nameres, q2colonres, q2constraintres, q2test1, q2test2, q2test3, q2test4, q2test5, q2total, ";
            $sqlValues .= "$array[0], $array[1], $array[2], $array[3], $array[4], $array[5], $array[6], $array[7], $array[8], ";
        }
        elseif( $i==2 )
        {
            $array = $_POST[$i];
            $sql .= "q3nameres, q3colonres, q3constraintres, q3test1, q3test2, q3test3, q3test4, q3test5, q3total, ";
            $sqlValues .= "$array[0], $array[1], $array[2], $array[3], $array[4], $array[5], $array[6], $array[7], $array[8], ";
        }
        elseif( $i==3 )
        {
            $array = $_POST[$i];
            $sql .= "q4nameres, q4colonres, q4constraintres, q4test1, q4test2, q4test3, q4test4, q4test5, q4total, ";
            $sqlValues .= "$array[0], $array[1], $array[2], $array[3], $array[4], $array[5], $array[6], $array[7], $array[8], ";
        }   
        else{
            exit();
        }  
    }
    elseif ( $num_tests == 4 ) {
        //insert query for entries for 0-3 and last 3
        if( $i==0 ){
            $array = $_POST[$i];
            if( $exam == 1){             
                $sql .= "INSERT INTO exam1Result(q1nameres, q1colonres, q1constraintres, q1test1, q1test2, q1test3, q1test4, q1total, ";
                }
                elseif( $exam == 2 ){
                $sql .= "INSERT INTO exam2Result(q1nameres, q1colonres, q1constraintres, q1test1, q1test2, q1test3, q1test4, q1total, ";
                }
                elseif( $exam == 3 ){
                $sql .= "INSERT INTO exam3Result(q1nameres, q1colonres, q1constraintres, q1test1, q1test2, q1test3, q1test4, q1total, ";
                }
                else{
                    echo "No such exam number.";
                }
                
            $sqlValues .= "VALUES($array[0], $array[1], $array[2], $array[3], $array[4], $array[5], $array[6], $array[7], ";
        }
        elseif( $i==1 )
        {
            $array = $_POST[$i];
            $sql .= "q2nameres, q2colonres, q2constraintres, q2test1, q2test2, q2test3, q2test4, q2total, ";
            $sqlValues .= "$array[0], $array[1], $array[2], $array[3], $array[4], $array[5], $array[6], $array[7], ";
        }
        elseif( $i==2 )
        {
            $array = $_POST[$i];
            $sql .= "q3nameres, q3colonres, q3constraintres, q3test1, q3test2, q3test3, q3test4, q3total, ";
            $sqlValues .= "$array[0], $array[1], $array[2], $array[3], $array[4], $array[5], $array[6], $array[7], ";
        }
        elseif( $i==3 )
        {
            $array = $_POST[$i];
            $sql .= "q4nameres, q4colonres, q4constraintres, q4test1, q4test2, q4test3, q4test4, q4total, ";
            $sqlValues .= "$array[0], $array[1], $array[2], $array[3], $array[4], $array[5], $array[6], $array[7], ";
        }     
        else{
            exit();
        } 
    }
    elseif ( $num_tests == 3 ) {
        //insert query for entries for 0-2 and last 3
        if( $i==0 ){
            $array = $_POST[$i];  
            if( $exam == 1){             
                $sql .= "INSERT INTO exam1Result(q1nameres, q1colonres, q1constraintres, q1test1, q1test2, q1test3, q1total, ";
                }
                elseif( $exam == 2 ){
                $sql .= "INSERT INTO exam2Result(q1nameres, q1colonres, q1constraintres, q1test1, q1test2, q1test3, q1total, ";
                }
                elseif( $exam == 3 ){
                $sql .= "INSERT INTO exam3Result(q1nameres, q1colonres, q1constraintres, q1test1, q1test2, q1test3, q1total, ";
                }
                else{
                    echo "No such exam number.";
                }
              
            $sqlValues .= "VALUES($array[0], $array[1], $array[2], $array[3], $array[4], $array[5], $array[6], ";
        }
        elseif( $i==1 )
        {
            $array = $_POST[$i];
            $sql .= "q2nameres, q2colonres, q2constraintres, q2test1, q2test2, q2test3, q2total, ";
            $sqlValues .= "$array[0], $array[1], $array[2], $array[3], $array[4], $array[5], $array[6], ";
        }
        elseif( $i==2 )
        {
            $array = $_POST[$i];
            $sql .= "q3nameres, q3colonres, q3constraintres, q3test1, q3test2, q3test3, q3total, ";
            $sqlValues .= "$array[0], $array[1], $array[2], $array[3], $array[4], $array[5], $array[6], ";
        }
        elseif( $i==3 )
        {
            $array = $_POST[$i];
            $sql .= "q4nameres, q4colonres, q4constraintres, q4test1, q4test2, q4test3, q4total, ";
            $sqlValues .= "$array[0], $array[1], $array[2], $array[3], $array[4], $array[5], $array[6], ";
        }    
        else{
            exit();
        } 
    }
    elseif ( $num_tests == 2 ) {
        //insert query for entries for 0-1 and last 3
        if( $i==0 ){
            $array = $_POST[$i];
            if( $exam == 1){              
                $sql .= "INSERT INTO exam1Result(q1nameres, q1colonres, q1constraintres, q1test1, q1test2, q1total, ";
                }
                elseif( $exam == 2 ){
                $sql .= "INSERT INTO exam2Result(q1nameres, q1colonres, q1constraintres, q1test1, q1test2, q1total, ";
                }
                elseif( $exam == 3 ){
                $sql .= "INSERT INTO exam3Result(q1nameres, q1colonres, q1constraintres, q1test1, q1test2, q1total, ";
                }
                else{
                    echo "No such exam number.";
                }
               
            $sqlValues .= "VALUES($array[0], $array[1], $array[2], $array[3], $array[4], $array[5], ";
        }
        elseif( $i==1 )
        {
            $array = $_POST[$i];
            $sql .= "q2nameres, q2colonres, q2constraintres, q2test1, q2test2, q2total, ";
            $sqlValues .= "$array[0], $array[1], $array[2], $array[3], $array[4], $array[5], ";
        }
        elseif( $i==2 )
        {
            $array = $_POST[$i];
            $sql .= "q3nameres, q3colonres, q3constraintres, q3test1, q3test2, q3total, ";
            $sqlValues .= "$array[0], $array[1], $array[2], $array[3], $array[4], $array[5], ";
        }
        elseif( $i==3 )
        {
            $array = $_POST[$i];
            $sql .= "q4nameres, q4colonres, q4constraintres, q4test1, q4test2, q4total, ";
            $sqlValues .= "$array[0], $array[1], $array[2], $array[3], $array[4], $array[5], ";
        }    
        else{
            exit();
        } 
    }
    elseif ( $num_tests == 1){
    
        //insert query for entries for 0 and last 3
        if( $i==0 ){ 
            $array = $_POST[$i]; 
            if( $exam == 1){             
                $sql .= "INSERT INTO exam1Result(q1nameres, q1colonres, q1constraintres, q1test1,  q1total, ";
                }
                elseif( $exam == 2 ){
                $sql .= "INSERT INTO exam2Result(q1nameres, q1colonres, q1constraintres, q1test1,  q1total, ";
                }
                elseif( $exam == 3 ){
                $sql .= "INSERT INTO exam3Result(q1nameres, q1colonres, q1constraintres, q1test1, q1total, ";
                }
                else{
                    echo "No such exam number.";
                }
              
            $sqlValues .= "VALUES($array[0], $array[1], $array[2], $array[3], $array[4], ";
        }
        elseif( $i==1 )
        {
            $array = $_POST[$i];
            $sql .= "q2nameres, q2colonres, q2constraintres, q2test1, q2total, ";
            $sqlValues .= "$array[0], $array[1], $array[2], $array[3], $array[4], ";
        }
        elseif( $i==2 )
        {
            $array = $_POST[$i];
            $sql .= "q3nameres, q3colonres, q3constraintres, q3test1, q3total, ";
            $sqlValues .= "$array[0], $array[1], $array[2], $array[3], $array[4], ";
        }
        elseif( $i==3 )
        {
            $array = $_POST[$i];
            $sql .= "q4nameres, q4colonres, q4constraintres, q4test1, q4total, ";
            $sqlValues .= "$array[0], $array[1], $array[2], $array[3], $array[4], ";
        }    
        else{
            exit();
        } 
    }
    else{
        echo "No Test Cases";
    }
}
$totalScore = $_POST[4];
$numTestCasesCorrect = $_POST[5];
$user = $_POST[7];
$numTestCasesRan = $_POST[9];
$q1StudentAns = $_POST[10];
$q2StudentAns = $_POST[11];
$q3StudentAns = $_POST[12];
$q4StudentAns = $_POST[13];
$q1TestCaseTotal = $_POST[14];
$q2TestCaseTotal = $_POST[15];
$q3TestCaseTotal = $_POST[16];
$q4TestCaseTotal = $_POST[17];

$escapeq1 = mysqli_real_escape_string($conn, $q1StudentAns);
$escapeq2 = mysqli_real_escape_string($conn, $q2StudentAns);
$escapeq3 = mysqli_real_escape_string($conn, $q3StudentAns);
$escapeq4 = mysqli_real_escape_string($conn, $q4StudentAns);

$sql .= " totalScore, numTestCasesCorrect, user, exam, numTestCasesRan, q1StudentAns, q2StudentAns, q3StudentAns, q4StudentAns, q1TestCaseTotal, q2TestCaseTotal, q3TestCaseTotal, q4TestCaseTotal)\n";
$sqlValues .= "$totalScore, $numTestCasesCorrect, '".$user."', '".$exam."', $numTestCasesRan, '".$escapeq1."', '".$escapeq2."', '".$escapeq3."', '".$escapeq4."', $q1TestCaseTotal, $q2TestCaseTotal, $q3TestCaseTotal, $q4TestCaseTotal);";
$sqlquery = $sql .$sqlValues; 
$query = mysqli_query($conn, $sqlquery);
echo $sqlquery;

echo "String1";
echo $sql;
echo "String2";
echo $sqlValues;

echo mysqli_error($conn);
}
else{
    for ( $i = 0; $i < 3; $i++ ) {

        $num_tests = (count($_POST[$i]) - 4);
     
    
        if ( $num_tests == 6 ) {
            //insert query for entries 0-5 and last 3
            //insert into test 1 2 3 4 5 6
            if( $i==0 ){
                $array = $_POST[$i]; 
                if( $exam == 1){             
                $sql .= "INSERT INTO exam1Result(q1nameres, q1colonres, q1constraintres, q1test1, q1test2, q1test3, q1test4, q1test5, q1test6, q1total, ";
                }
                elseif( $exam == 2 ){
                $sql .= "INSERT INTO exam2Result(q1nameres, q1colonres, q1constraintres, q1test1, q1test2, q1test3, q1test4, q1test5, q1test6, q1total, ";
                }
                elseif( $exam == 3 ){
                $sql .= "INSERT INTO exam3Result(q1nameres, q1colonres, q1constraintres, q1test1, q1test2, q1test3, q1test4, q1test5, q1test6, q1total, ";
                }
                else{
                    echo "No such exam number.";
                }
                
                $sqlValues .= "VALUES($array[0], $array[1], $array[2], $array[3], $array[4], $array[5], $array[6], $array[7], $array[8], $array[9], ";
                
            }
            elseif( $i==1 )
            {
                $array = $_POST[$i];
                $sql .= "q2nameres, q2colonres, q2constraintres, q2test1, q2test2, q2test3, q2test4, q2test5, q2test6, q2total, ";
                $sqlValues .= "$array[0], $array[1], $array[2], $array[3], $array[4], $array[5], $array[6], $array[7], $array[8], $array[9], ";
            }
            elseif( $i==2 )
            {
                $array = $_POST[$i];
                $sql .= "q3nameres, q3colonres, q3constraintres, q3test1, q3test2, q3test3, q3test4, q3test5, q3test6, q3total, ";
                $sqlValues .= "$array[0], $array[1], $array[2], $array[3], $array[4], $array[5], $array[6], $array[7], $array[8], $array[9], ";
            }
            else{
                exit();
            } 
        }
        elseif ( $num_tests == 5 ) {
            //insert query for entries for 0-4 and last 3
            if( $i==0 ){
                if( $exam == 1){             
                    $sql .= "INSERT INTO exam1Result(q1nameres, q1colonres, q1constraintres, q1test1, q1test2, q1test3, q1test4, q1test5, q1total, ";
                    }
                    elseif( $exam == 2 ){
                    $sql .= "INSERT INTO exam2Result(q1nameres, q1colonres, q1constraintres, q1test1, q1test2, q1test3, q1test4, q1test5, q1total, ";
                    }
                    elseif( $exam == 3 ){
                    $sql .= "INSERT INTO exam3Result(q1nameres, q1colonres, q1constraintres, q1test1, q1test2, q1test3, q1test4, q1test5, q1total, ";
                    }
                    else{
                        echo "No such exam number.";
                    }
                $array = $_POST[$i];    
                $sqlValues .= "VALUES($array[0], $array[1], $array[2], $array[3], $array[4], $array[5], $array[6], $array[7], $array[8], ";
            }
            elseif( $i==1 )
            {
                $array = $_POST[$i];
                $sql .= "q2nameres, q2colonres, q2constraintres, q2test1, q2test2, q2test3, q2test4, q2test5, q2total, ";
                $sqlValues .= "$array[0], $array[1], $array[2], $array[3], $array[4], $array[5], $array[6], $array[7], $array[8], ";
            }
            elseif( $i==2 )
            {
                $array = $_POST[$i];
                $sql .= "q3nameres, q3colonres, q3constraintres, q3test1, q3test2, q3test3, q3test4, q3test5, q3total, ";
                $sqlValues .= "$array[0], $array[1], $array[2], $array[3], $array[4], $array[5], $array[6], $array[7], $array[8], ";
            }
            else{
                exit();
            }  
        }
        elseif ( $num_tests == 4 ) {
            //insert query for entries for 0-3 and last 3
            if( $i==0 ){
                $array = $_POST[$i];
                if( $exam == 1){             
                    $sql .= "INSERT INTO exam1Result(q1nameres, q1colonres, q1constraintres, q1test1, q1test2, q1test3, q1test4, q1total, ";
                    }
                    elseif( $exam == 2 ){
                    $sql .= "INSERT INTO exam2Result(q1nameres, q1colonres, q1constraintres, q1test1, q1test2, q1test3, q1test4, q1total, ";
                    }
                    elseif( $exam == 3 ){
                    $sql .= "INSERT INTO exam3Result(q1nameres, q1colonres, q1constraintres, q1test1, q1test2, q1test3, q1test4, q1total, ";
                    }
                    else{
                        echo "No such exam number.";
                    }
                    
                $sqlValues .= "VALUES($array[0], $array[1], $array[2], $array[3], $array[4], $array[5], $array[6], $array[7], ";
            }
            elseif( $i==1 )
            {
                $array = $_POST[$i];
                $sql .= "q2nameres, q2colonres, q2constraintres, q2test1, q2test2, q2test3, q2test4, q2total, ";
                $sqlValues .= "$array[0], $array[1], $array[2], $array[3], $array[4], $array[5], $array[6], $array[7], ";
            }
            elseif( $i==2 )
            {
                $array = $_POST[$i];
                $sql .= "q3nameres, q3colonres, q3constraintres, q3test1, q3test2, q3test3, q3test4, q3total, ";
                $sqlValues .= "$array[0], $array[1], $array[2], $array[3], $array[4], $array[5], $array[6], $array[7], ";
            }
            else{
                exit();
            } 
        }
        elseif ( $num_tests == 3 ) {
            //insert query for entries for 0-2 and last 3
            if( $i==0 ){
                $array = $_POST[$i];  
                if( $exam == 1){             
                    $sql .= "INSERT INTO exam1Result(q1nameres, q1colonres, q1constraintres, q1test1, q1test2, q1test3, q1total, ";
                    }
                    elseif( $exam == 2 ){
                    $sql .= "INSERT INTO exam2Result(q1nameres, q1colonres, q1constraintres, q1test1, q1test2, q1test3, q1total, ";
                    }
                    elseif( $exam == 3 ){
                    $sql .= "INSERT INTO exam3Result(q1nameres, q1colonres, q1constraintres, q1test1, q1test2, q1test3, q1total, ";
                    }
                    else{
                        echo "No such exam number.";
                    }
                  
                $sqlValues .= "VALUES($array[0], $array[1], $array[2], $array[3], $array[4], $array[5], $array[6], ";
            }
            elseif( $i==1 )
            {
                $array = $_POST[$i];
                $sql .= "q2nameres, q2colonres, q2constraintres, q2test1, q2test2, q2test3, q2total, ";
                $sqlValues .= "$array[0], $array[1], $array[2], $array[3], $array[4], $array[5], $array[6], ";
            }
            elseif( $i==2 )
            {
                $array = $_POST[$i];
                $sql .= "q3nameres, q3colonres, q3constraintres, q3test1, q3test2, q3test3, q3total, ";
                $sqlValues .= "$array[0], $array[1], $array[2], $array[3], $array[4], $array[5], $array[6], ";
            }
            else{
                exit();
            } 
        }
        elseif ( $num_tests == 2 ) {
            //insert query for entries for 0-1 and last 3
            if( $i==0 ){
                $array = $_POST[$i];
                if( $exam == 1){              
                    $sql .= "INSERT INTO exam1Result(q1nameres, q1colonres, q1constraintres, q1test1, q1test2, q1total, ";
                    }
                    elseif( $exam == 2 ){
                    $sql .= "INSERT INTO exam2Result(q1nameres, q1colonres, q1constraintres, q1test1, q1test2, q1total, ";
                    }
                    elseif( $exam == 3 ){
                    $sql .= "INSERT INTO exam3Result(q1nameres, q1colonres, q1constraintres, q1test1, q1test2, q1total, ";
                    }
                    else{
                        echo "No such exam number.";
                    }
                   
                $sqlValues .= "VALUES($array[0], $array[1], $array[2], $array[3], $array[4], $array[5], ";
            }
            elseif( $i==1 )
            {
                $array = $_POST[$i];
                $sql .= "q2nameres, q2colonres, q2constraintres, q2test1, q2test2, q2total, ";
                $sqlValues .= "$array[0], $array[1], $array[2], $array[3], $array[4], $array[5], ";
            }
            elseif( $i==2 )
            {
                $array = $_POST[$i];
                $sql .= "q3nameres, q3colonres, q3constraintres, q3test1, q3test2,q3total, ";
                $sqlValues .= "$array[0], $array[1], $array[2], $array[3], $array[4], $array[5], ";
            }
            else{
                exit();
            } 
        }
        elseif ( $num_tests == 1){
        
            //insert query for entries for 0 and last 3
            if( $i==0 ){ 
                $array = $_POST[$i]; 
                if( $exam == 1){             
                    $sql .= "INSERT INTO exam1Result(q1nameres, q1colonres, q1constraintres, q1test1, q1total, ";
                    }
                    elseif( $exam == 2 ){
                    $sql .= "INSERT INTO exam2Result(q1nameres, q1colonres, q1constraintres, q1test1, q1total, ";
                    }
                    elseif( $exam == 3 ){
                    $sql .= "INSERT INTO exam3Result(q1nameres, q1colonres, q1constraintres, q1test1, q1total, ";
                    }
                    else{
                        echo "No such exam number.";
                    }
                  
                $sqlValues .= "VALUES($array[0], $array[1], $array[2], $array[3], $array[4], ";
            }
            elseif( $i==1 )
            {
                $array = $_POST[$i];
                $sql .= "q2nameres, q2colonres, q2constraintres, q2test1, q2total, ";
                $sqlValues .= "$array[0], $array[1], $array[2], $array[3], $array[4], ";
            }
            elseif( $i==2 )
            {
                $array = $_POST[$i];
                $sql .= "q3nameres, q3colonres, q3constraintres, q3test1, q3total, ";
                $sqlValues .= "$array[0], $array[1], $array[2], $array[3], $array[4], ";
            }
            else{
                exit();
            } 
        }
        else{
            echo "No Test Cases";
        }
    }
$totalScore = $_POST[4];
$numTestCasesCorrect = $_POST[5];
$user = $_POST[7];
$numTestCasesRan = $_POST[9];
$q1StudentAns = $_POST[10];
$q2StudentAns = $_POST[11];
$q3StudentAns = $_POST[12];
$q4StudentAns = $_POST[13];
$q1TestCaseTotal = $_POST[14];
$q2TestCaseTotal = $_POST[15];
$q3TestCaseTotal = $_POST[16];
$q4TestCaseTotal = $_POST[17];

$escapeq1 = mysqli_real_escape_string($conn, $q1StudentAns);
$escapeq2 = mysqli_real_escape_string($conn, $q2StudentAns);
$escapeq3 = mysqli_real_escape_string($conn, $q3StudentAns);


$sql .= " totalScore, numTestCasesCorrect, user, exam, numTestCasesRan, q1StudentAns, q2StudentAns, q3StudentAns, q1TestCaseTotal, q2TestCaseTotal, q3TestCaseTotal)\n";
$sqlValues .= "$totalScore, $numTestCasesCorrect, '".$user."', '".$exam."', $numTestCasesRan, '".$escapeq1."', '".$escapeq2."', '".$escapeq3."', $q1TestCaseTotal, $q2TestCaseTotal, $q3TestCaseTotal);";
$sqlquery = $sql .$sqlValues; 
$query = mysqli_query($conn, $sqlquery);
echo $sqlquery;

echo "String1";
echo $sql;
echo "String2";
echo $sqlValues;

echo mysqli_error($conn);
}

/*
$totalScore = $_POST[4];
$numTestCasesCorrect = $_POST[5];
$user = $_POST[7];
$numTestCasesRan = $_POST[9];
$q1StudentAns = $_POST[10];
$q2StudentAns = $_POST[11];
$q3StudentAns = $_POST[12];
$q4StudentAns = $_POST[13];
$q1TestCaseTotal = $_POST[14];
$q2TestCaseTotal = $_POST[15];
$q3TestCaseTotal = $_POST[16];
$q4TestCaseTotal = $_POST[17];

$escapeq1 = mysqli_real_escape_string($conn, $q1StudentAns);
$escapeq2 = mysqli_real_escape_string($conn, $q2StudentAns);
$escapeq3 = mysqli_real_escape_string($conn, $q3StudentAns);
$escapeq4 = mysqli_real_escape_string($conn, $q4StudentAns);

$sql .= " totalScore, numTestCasesCorrect, user, exam, numTestCasesRan, q1StudentAns, q2StudentAns, q3StudentAns, q4StudentAns, q1TestCaseTotal, q2TestCaseTotal, q3TestCaseTotal, q4TestCaseTotal)\n";
$sqlValues .= "$totalScore, $numTestCasesCorrect, '".$user."', '".$exam."', $numTestCasesRan, '".$escapeq1."', '".$escapeq2."', '".$escapeq3."', '".$escapeq4."', $q1TestCaseTotal, $q2TestCaseTotal, $q3TestCaseTotal, $q4TestCaseTotal);";
$sqlquery = $sql .$sqlValues; 
$query = mysqli_query($conn, $sqlquery);
echo $sqlquery;

echo "String1";
echo $sql;
echo "String2";
echo $sqlValues;

echo mysqli_error($conn);
*/

?>