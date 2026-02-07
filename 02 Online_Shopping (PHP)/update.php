<?php
$user_id=$_POST['user_id'];
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

$result=mysql_query("UPDATE users SET first_name='$fname',last_name='$lname',email='$email',mobile='$mobile',password='$password' WHERE user_id='$user_id'");

	if ($result ===TRUE) {
	
	header("location:index.php?user_id=$user_id");
} else {
	
	echo "Failed to UPDATE";
}
?>
