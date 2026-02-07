<?php 
$uname=$_GET['uname']; 
$pass=$_GET['pass']; 
$mobile=$_GET['mobile']; 
$mail=$_GET['mail']; 
$dob=$_GET['dob']; 

$con=mysql_connect("localhost:3307/","root","Riyaz@786");
mysql_select_db("mini"); 
 
//$name=mysql_real_escape_string($name); 
//$enroll=mysql_real_escape_string($enroll); 
//$branch=mysql_real_escape_string($branch);
//$mail=mysql_real_escape_string($mail); 
 
$result=mysql_query("INSERT INTO register(username,password,dob,email,mobile) VALUES ('$uname','$pass','$dob','$mail','$mobile')",$con); 
//INSERT INTO register(username,password,dob,email,mobile) VALUES ('g2','g','2019-12-11','g1','5');
echo "<Center><h1>";
if ($result ===TRUE) 
{    echo "Record is successfully Inserted"; } 
else {    echo "Registration is Failed<br>".mysql_error(); } 
echo "</h1></center>";
?> 

<html>
<body>

<table align=center>
<tr>
	<td><a href="mini index.php"><button>HOME PAGE</button></a></td>
	
</tr>
</table>

</body>
</html>
 
 