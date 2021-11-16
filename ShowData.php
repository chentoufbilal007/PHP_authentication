<?php

$host="localhost";
$userh="root";
$passh="";
$db="dar";	
$conn1=mysqli_connect($host,$userh,$passh,$db);

if($conn1){
	echo "welcome user admin";
}else{

	echo "not connected";
}

$show=mysqli_query($conn1,"SELECT * FROM inscription ")  ;


  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Show data for users acount</title>


	<style type="text/css">
		Body {  
  font-family: "Times New Roman", Times, serif;  
  background-color:  
 #ff6666;  
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
.tab{
border: solid 3px;


}
tr{


}
td{

	border: solid 2px;
}
.cont{
	width: 60%;
	margin: 50px auto;
align-content: center;
}

	</style>

</head>
<body>
<div class="cont">
	<form>
		<table class="tab">
	<tr>
		<th>ID</th><th>USERNAME</th><th>EMAIL</th><th>TELE</th><th>PASSWORD</th><th>CODE</th>

	</tr>

<?php    while($index=mysqli_fetch_array($show)) {

echo "<tr>";

echo "<td>".$index['id']."</td>";
echo "<td>".$index['username']."</td>";
echo "<td>".$index['email']."</td>";
echo "<td>".$index['tele']."</td>";
echo "<td>".$index['password']."</td>";
echo "<td>".$index['CODE']."</td>";

echo "</tr>";
	// code...
}  ?>
</table>

	</form>

</div>
	<br><br><br><br><br><br><br><br><br><br><br><br>


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