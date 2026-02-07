
<?php
$username=$_POST['username'];
$password=$_POST['password'];
$username=mysql_escape_string($username);
$password=mysql_escape_string($password);
mysql_connect("localhost","root","");
mysql_select_db("onlineshop");
$result=mysql_query("select * from users where email='$username' and password='$password'");
if(mysql_num_rows($result)==1){
	while ($row=mysql_fetch_array($result)) {
		$user_id=$row['user_id'];
	}
	header("location:index.php?user_id=$user_id");
}else{
	header("location:login.php");
}
/*$row=mysql_fetch_array($result);
	$user_id=$row['user_id'];

if ($row['email']==$username && $row['password']==$password) {
	header('location:index.php?user_id=$user_id');
} else {
	header('location:login.php');
}*/

?>
