<?php
$user_name=$_POST['user_name'];
$password=$_POST['password'];
$conn=mysqli_connect('localhost','root','') or die(mysql_error());
mysqli_select_db($conn,'techno') or die(mysql_error());
$sql="select  * from info where user_name='$user_name' and password='$password'";
$result=mysqli_query($conn,$sql) ;
if(mysqli_num_rows($result)>0)
{
$row=mysqli_fetch_assoc($result);
echo $row["name"];
echo "welcome";
header("Location:amt.html");
exit();
}
else
echo "Card Number does not match";?>