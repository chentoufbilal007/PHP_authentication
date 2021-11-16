<?php
ini_set("display_errors", "1");

error_reporting(E_ALL);

$host="localhost";
$userh="root";
$passh="";
$db="dar";


$conn=mysqli_connect($host,$userh,$passh,$db);


 
 if($conn){
  
 }
else{

  echo "eeeeeeeeeee";
}


//$h="INSERT INTO `inscription`(`id`, `username`, `email`, `tele`, `password`) VALUES ('23','[value-2]','[value-3]','[value-4]','[value-5]')";

    

if(isset($_POST['insc'])){


/*$username=filter_input(input_post, 'username');
$email=filter_input(input_post,'email');
$tele=filter_input(input_post,'tele');
$password= filter_input(input_post,'password');*/

$ran=rand(17,742221898);

$usernam=$_POST['username'];
$emai=$_POST['email'];
$tel=$_POST['tele'];
$passwor=$_POST['password'];
$pa=password_hash($passwor, PASSWORD_DEFAULT);


//put try and catch
//put textzone validation
$RE_password=$_POST['Rpassword'];

if($passwor==$RE_password){
  $qu="INSERT INTO `inscription`(`username`, `email`, `tele`, `password`) VALUES ('$usernam','$emai','$tel','$passwor')";
$rse=mysqli_query($conn,$qu);
session_start();
$_SESSION['email']=$usernam;
header("location:WelcomePage.php");
}else{


    echo '<script>alert(" password and repeat password must be similair  please try  agian");

   window.location.href = "http://localhost/mail/inscription.html" </script>';
}




}

  ?>


