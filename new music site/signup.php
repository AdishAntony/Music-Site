<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Music Site</title>
<meta name="keywords" content="free design template, CSS template, HTML website" />
<meta name="description" content="Free Design Template, Free CSS Website, XHTML CSS layout" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!--  Download Free CSS Templates from www.templatemo.com  -->	
<div id="templatemo_header_panel">
	<div id="templatemo_header_section">
    	<div id="templatemo_title_section">Music Mania</a></div>
      <div id="tagline">Music Site</div>
    </div>
</div> <!-- end of haeder -->

<div id="templatemo_menu_panel">
    <div id="templatemo_menu_section">
        <ul>
            <li><a href="index.php"  class="current">Home</a></li>
                       
            <li><a href="signup.php">SignUp</a></li>  
            <li><a href="login.php">Login</a></li>
			<li><a href="about.php">About Us</a></li> 
            <li><a href="contact.php" class="last">Contact Us</a></li>                     
        </ul> 
    </div>
</div> <!-- end of menu -->
<center><h3>Sign Up</h3></center>
<form  id="form1" name="form1" method="post" action="signup.php"  enctype="multipart/form-data">

<font color="#CC0000"><table align="center">

 <tr>
    <td style="color:#FF0000">First Name</td>
    <td ><input name="fname" type="text" id="fname" /></td>
  </tr>
   <br/>
   
   <tr>
     <td style="color:#FF0000">Last Name</td>
    <td><input name="lname" type="text" id="lname"/></td>
  </tr>
  
  <tr>
   <td style="color:#FF0000">Age</td>
    <td><input name="age" type="text" id="age"/></td>
  </tr>
 <tr>
     <td style="color:#FF0000">Address</td>
    <td><textarea name="address"></textarea></td>
  </tr>
  <tr>
<td style="color:#FF0000">Gender</td>
<td>
<input name="r" type="radio" value="male" id="gender" />
male
<input name="r" type="radio" value="female" id="gender"/>
female</td>
</tr>
<tr>
    <td style="color:#FF0000">User Name</td>
    <td ><input name="uname" type="text" id="uname" /></td>
  </tr>
  <tr>
    <td style="color:#FF0000">Password</td>
    <td ><input name="pwd" type="password" id="pwd" /></td>
  </tr>
  <tr>
    <td style="color:#FF0000">Re-enterPassword</td>
    <td ><input name="rpwd" type="password" id="rpwd" /></td>
  </tr>
  <br>
  <tr>
   <td><input name="b1" type="submit" value="Register" style="background-color:#66CCFF; color:#6000fff"/></td>
   
	<td> <input name="b2" type="reset" value="Reset" style="background-color: #66CAFF; color:#7000FFFF" /></td>
   </tr>
   </br>
   
                </table>
				</font>
				</form>
<?php
 
include_once 'dbconnect.php'; 
if(isset($_REQUEST["b1"]))
{
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$age=$_POST['age'];
$address=$_POST['address'];
$gender = $_POST['r'];
$uname=$_POST['uname'];
$pwd=$_POST['pwd'];
$query="insert into  signup  values('$fname','$lname','$age','$address','$gender','','$uname','$pwd')";
$out=mysql_query($query);
 if($out)
{
echo '<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<strong>Well done!</strong> Success Fully Registred
						</div>';

}
else
{
echo '<div class="alert alert-error">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<strong>Error!</strong> There is an error in registration.<br />Check fields are corrected!.
						</div>';
}


}
?>

    
   	
    
	
<!--  Free CSS Template by TemplateMo.com  -->
<div align=center>Copy right 2013</a></div></body>
</html>