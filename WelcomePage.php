<?php 

session_start();


$well=$_SESSION['email'];








 ?>

 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WelcomePage</title>
    <style type="text/css">
        
ody {  
  font-family: "Times New Roman", Times, serif;  
  background-color:  #29a329;  
}  
button {   
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
        background-color:    #99e6ff;

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
 button:hover {   
        opacity: 0.7;   
    }   


    .container {   
        width: 80%;
        padding: 25px;   
        background-color:   #ffffff;
        border-radius: 40px;
        float: left;
       
    }

           .site-footer
{
  background-color:#26272b;
  padding:40px;
  font-size:15px;
  line-height:24px;
  color:#737373;
  border-radius: 30px;

}
.site-footer hr
{
  border-top-color:#bbb;
  opacity:0.5
}
.site-footer hr.small
{
  margin:20px 0
}
.site-footer h6
{
  color:#fff;
  font-size:16px;
  text-transform:uppercase;
  margin-top:5px;
  letter-spacing:2px
}
.site-footer a
{
  color:#737373;
}
.site-footer a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links
{
  padding-left:0;
  list-style:none
}
.footer-links li
{
  display:block
}
.footer-links a
{
  color:#737373
}
.footer-links a:active,.footer-links a:focus,.footer-links a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links.inline li
{
  display:inline-block
}
.site-footer .social-icons
{
  text-align:right
}

.copyright-text
{
  margin-left: 200px;
}

@media (max-width:991px)
{
  .site-footer [class^=col-]
  {
    margin-bottom:30px
  }
}
@media (max-width:767px)
{
  .site-footer
  {
    padding-bottom:0
  }
  .site-footer .copyright-text,.site-footer .social-icons
  {
    text-align:center
  }
}


    </style>
</head>
<body>


    <form method="POST" action="WelcomePage.php">
        

   
   <h1>WELCOME<?php   echo "  USER   ".$well."  "; ?>   TO OUR SERVICE YOU CAN FIND SOMTHING HERE</h1>


   <h2><?php
 ;
 
// Function to get the client IP address
?></h2>


<br><br><br><br>

<div> <a href="ShowData.php">click here to see your data </a></div>

         <br><br><br>

         
 <a href="logout.php">Log out </a>

    </form><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
   <footer class="site-footer">
          </div>
          <div class="col-xs-6 col-md-3">
          <div class="col-xs-6 col-md-3">
       
            <ul class="footer-links">


              <li><a href="http://scanfcode.com/about/">About Us</a></li>
              <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
              <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
           
            </ul>
          </div>
        </div>
        <hr>
      </div>
            <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by Not yet Exist  </p>
            
      
</footer>
</body>
</html>

