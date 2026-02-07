<?php
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];

mysql_escape_string($fname);
mysql_escape_string($lname);
mysql_escape_string($email);
mysql_escape_string($mobile);
mysql_escape_string($password);

mysql_connect("localhost","root","");
mysql_select_db("onlineshop");

$result=mysql_query("INSERT INTO users(first_name,last_name,email,mobile,password) VALUES ('$fname','$lastname','$email','$mobile','$password') ");

	if ($result ===TRUE) {
	
	header('location:login.php');
} else {
	
	echo "Failed to insert";
}
?>
