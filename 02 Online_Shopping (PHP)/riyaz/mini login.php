<?php 
$uname=$_GET['uname']; 
$pass=$_GET['pass1'];

$con=mysql_connect("localhost:3307/","root","Riyaz@786");

if(!$con)
{	die("error in connection".mysql_error());	}
else
{
	mysql_select_db("mini"); 	 
	//$name=mysql_real_escape_string($name); 
	//$enroll=mysql_real_escape_string($enroll); 
	//$branch=mysql_real_escape_string($branch);
	//$mail=mysql_real_escape_string($mail); 
	// echo $uname."<br>";
	// echo $pass;
	 $result=mysql_query("select * from register where username='$uname' and password='$pass';",$con); 
	//echo $result;
	echo "<Center><h1>";
	if (mysql_num_rows($result)==1) 
	{
		echo "Hello..! $uname<br><br>";
		echo "You Have SuccessFully Loged In<br><br>";
	}
	else
	{
		echo "Login Failed<br>".mysql_error();
		exit();
	}
	echo "</h1></center>";
}
?> 
<html>
<body>
<center>
	<h1><u>Your Details</u></h1>
	<table border=1>
	<tr><td><b><center>User ID</center></b></td>
	<td><b><center>Username</center></b></td>
	<td><b><center>Password</center></b></td>
	<td><b><center>Date Of Birth</center></b></td>
	<td><b><center>EMAIL ADDRESS</center></b></td>
	<td><b><center>Mobile Number</center></b></td></tr>
	
<?php
$result=mysql_query("select * from register where username='$uname' and password='$pass';",$con); 
while($row=mysql_fetch_array($result))
{	echo "<tr height='20px'><td><center>";
	$uid=$row['uid'];
	echo $row['uid']."</center></td><td><center>";
	echo $row['username']."</center></td><td><center>";
	echo $row['password']."</center></td><td><center>";
	echo $row['dob']."</center></td><td><center>";
	echo $row['email']."</center></td><td><center>";
	echo $row['mobile']."</center></td></tr></table><br><br>";
}
echo "<a href='mini index.php'><button>HOME PAGE</button></a>";
echo "<a href='mini profile.php?uname=$uname'><button>Edit Profile</button></a></td>";
echo "<a href=#><button>Change details</button></a></td>";
?>
</center>
</body>	
</html>