<?php
include ("account.php");
$conn = mysqli_connect($hostname, $username, $password, $dbname);

$user = $_POST['user_name'];
$pwd = $_POST['passwd'];

$sql = "SELECT * FROM UserInfo
WHERE username LIKE '$user';";
 $result = mysqli_query($conn, $sql);
 $info = mysqli_fetch_assoc($result);
 $userdb = $info["username"];
 $pwdb = $info["password"];
 $IsProf = $info["IsProf"];
 $result = verify_pw($userdb, $pwdb, $user, $pwd);
 $ProfBool = check_prof($IsProf);
 $response = array("result" => $result, "IsProf" =>  $ProfBool);
 $jsonresponse = json_encode($response);
 echo $jsonresponse;

 function verify_pw($userdb, $pwdb, $user, $pwd){
     if(($userdb == $user) && password_verify($pwd, $pwdb)){
        return "Good";   
     }
     else {
        return "Bad";
     }
    }

 function check_prof($IsProf){
    if($IsProf == 1) {
      return True;
    }
    else {
       return False;
    }
 }

?>
