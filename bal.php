<?php
$user_name=$_POST['user_name'];
$name=$_POST['name'];
$password=$_POST['password'];


if( $user_name== "")
         {

	echo "Card holder name cant be null";
	}
elseif($name== ""){
	echo "name  cant be null";

}
elseif($password== ""){
	echo "password cant be null";

}



else{

$conn=mysqli_connect('localhost','root','') or die(mysql_error());
mysqli_select_db($conn,'balance')or die(mysql_error());
$sql="INSERT INTO bank1 VALUES ('$user_name','$name','$password')";
mysqli_query($conn,$sql) ;
header("Location:login.html");
	exit();
		
}
?>