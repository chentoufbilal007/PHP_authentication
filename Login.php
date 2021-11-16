<?php 


ini_set("display_errors", "1");

error_reporting(E_ALL);

$host="localhost";
$userh="root";
$passh="";
$db="dar";	
$conn=mysqli_connect($host,$userh,$passh,$db);


if($conn){



	//header("location:WelcomePage.php");
}else{
	die("offline") ;
}


if(isset($_POST['cbr']))
{

$email =  filter_input(INPUT_POST, 'emaill') ;
$pass=strip_tags($_POST['passwordl']);    //(filter_input(INPUT_POST, 'passwordl'))   ;

$q="select  * from  inscription where email='$email'and password='$pass'";

$res = mysqli_query($conn,$q);
$result=mysqli_fetch_array($res);



if($result){


session_start();

$_SESSION['email']=$email;


header("location:WelcomePage.php"); 

}
else
{
   http://localhost/mail/login.html
   echo '<script>alert(" incorect passwor or email  please try  agian");

   window.location.href = "http://localhost/mail/login.html" </script>';
	
}
 

	
}





?>


