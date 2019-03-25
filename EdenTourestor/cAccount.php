
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "login");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_REQUEST['fname']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['lname']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$usernam = mysqli_real_escape_string($link, $_REQUEST['username']);
$password =mysqli_real_escape_string($link, $_REQUEST['password']);
$city =mysqli_real_escape_string($link, $_REQUEST['city']);
$address =mysqli_real_escape_string($link, $_REQUEST['address']);
$confirmpassword =mysqli_real_escape_string($link, $_REQUEST['confirmpassword']);
	$phone =mysqli_real_escape_string($link, $_REQUEST['phone']);

 
// Attempt insert query execution
$sql = "INSERT INTO register (fname, lname, phone, password, confirmpassword,city,address,email,username) VALUES ('$first_name', '$last_name', '$phone','$password','$confirmpassword','$city','$address','$email','$usernam')";
if(mysqli_query($link, $sql)){
    echo "Registration successfull!.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>