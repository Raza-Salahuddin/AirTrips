<?php
$username = $_POST['user'];
$password = $_POST['pass'];

$con=mysqli_connect("localhost","root","","login");
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($con,$username);
$password = mysqli_real_escape_string($con,$password);


$result= mysqli_query($con,"SELECT * FROM register where username = '$username' AND password='$password'" )
or die("failde to query database".mysqli_error($con));
$row =mysqli_fetch_array($result);
if (($row['username']==$username) && ($row['password']==$password ))
{

	echo "  Hi! " .$row['username'];
}
else
{
	echo "failed to login"; 
	
}
?>