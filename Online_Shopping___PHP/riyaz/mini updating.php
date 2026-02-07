<?php 
$uid=$_GET['uid']; 
$username=$_GET['name'];
$password=$_GET['pass']; 
$dob=$_GET['dob']; 
$mail=$_GET['mail']; 
$mobile=$_GET['mobile']; 
//echo $uid.$username.$password.$dob.$mail.$mobile;
mysql_connect("localhost:3307/","root","Riyaz@786");
mysql_select_db("mini"); 
 
 $result=mysql_query("update register set username='$username', password='$password', dob='$dob', email='$mail', mobile='$mobile' where uid=$uid"); 

echo "<Center><h1>";
if ($result ===TRUE) 
{    echo "Record is successfully Upadated"; } 
else {    echo "Upadation of Record is Failed<br>";
		echo mysql_error();} 
echo "</h1></center>";
?> 

<html>
<body>
<center>
<a href="mini index.php"><button>HOME PAGE</button></a></td>
</center>
</body>
</html>
 
 