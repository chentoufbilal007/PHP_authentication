<?php 

$host="localhost";
$userh="root";
$passh="";
$db="dar";    
$conn=mysqli_connect($host,$userh,$passh,$db);

session_start();
$tar_email=$_SESSION['xml'];
$_SESSION['email']=$tar_email;




if(isset($_POST['st'])){


$passwordrest=$_POST['password'];
$re_passwordrest=$_POST['Rpassword'];
if($passwordrest==$re_passwordrest){
$q="UPDATE `inscription` SET PASSWORD ='$passwordrest' WHERE email='$tar_email' ";
$res=mysqli_query($conn,$q);

if($res){
//put textzone validation
session_start();

header("location:WelcomePage.php");

}

else{

       echo '<script>alert(" incorect passwor or email  please try  agian");

   window.location.href = "http://localhost/mail/ResetPassword.php" </script>';
}  


}else{

       echo '<script>alert(" password and repeat password  must be similair  please try  agian");

   window.location.href = "http://localhost/mail/ResetPassword.php" </script>';
}




}




 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>test</title>
	<style type="text/css">
		
body {  
  font-family: "Times New Roman", Times, serif;  
  background-color:  #29a329;  
}  
.btn {   
       background-color: dodgerblue;   
       width: 30%;  
        color:        #80ff80;   
        padding: 15px;   
        margin: 10px 0px;
        border-color: dodgerblue;   
        border-radius: 7px;   
        cursor: pointer;
          
         }   
 form {   
        border: none;
        height: 100%;
        background-color:    ;

    }   
 input[type=text], input[type=password],input[type=email] {   
        width: 70%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid green;   
        box-sizing: border-box; 
        border-radius: 10px;  
    }  
 .btn:hover {   
        opacity: 0.7;   
    }   


    .container {  
    margin: 30px; 
        width: 90%;
        padding: 25px;   
        background-color:   #ffffff;
        border-radius: 40px;
        float: left;
       
    }

	

	</style>
 
</head>

<body>


	<form method="POST" action="ResetPassword.php" id="form">
		

   
        <div class="container">   
            <h3>Welcome <?php  echo $tar_email; ?>    Type your new password below  : </h3><br><br>   
<input type="password" placeholder="Enter your password"    name="password"   required  maxlength="20"  autofocus> <br><br>
<input type="password" placeholder="repaet  your password"  name="Rpassword"   required  ="20"  ><br><br> 
           
            <input type="submit" name="st" class="btn" value="Done">
           
            <br>

         
            
        </div>   

	</form>


</body>
</html>
