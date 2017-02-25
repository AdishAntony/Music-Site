<?php
include_once 'dbconnect.php';
$username=$_POST["uname"];
$password=$_POST["pwd"];
$s="select type from signup where uname='$username' and pwd='$password'";
$result=mysql_query($s);
echo mysql_error();
$row=mysql_fetch_array($result);
if($row==0)
{
header("location:login2.php");
}
else if($row["type"]=="") 
{
header("location:user.php");
}
else if($row["type"]=="admin")
{
header("location:admin.php");
}
else 
{
echo "Invalid Username or Password";
}
?>
