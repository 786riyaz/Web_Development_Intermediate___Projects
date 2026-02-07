<?php
$uname=$_GET['uname'];
//echo $uname;
$con=mysql_connect("localhost:3307/","root","Riyaz@786");
if(!$con)
{	die("error in connection".mysql_error());	}
else
{	
mysql_select_db('mini',$con);
$result=mysql_query("Select * from register where username='$uname'",$con);
if(!$result)
{	echo "<br>error in connection<br>".mysql_error();	}
while($row=mysql_fetch_array($result))
{
	$uname=$row['username'];
	$pass=$row['password'];
	$dob=$row['dob'];
	$email=$row['email'];
	$mobile=$row['mobile'];
	$uid=$row['uid'];
}
}
?>
<html> 
<head>  
	<title>   Upadating </title>  
	<style>   
	td.no{
	text-align:center;}
	td{    
	margin: 10px;    
	font-size: 20px;  
		
	text-align:right;
	padding: 2px;   } 
	
	th{    
	margin: 10px;    
	font-size: 30px;    
	padding: 2px;   }   
	
	input[type=text], input[type=number] ,input[type=email],input[type=date]{      
	width: 100%;     
	padding-top:5px;
	padding-bottom:5px;	} 
	
	input[type=submit]{
    width: 75%;
height:35px;
font-size:20px;
border-radius:10px;
border:5px solid black;	}  
	</style> 
</head> 
<body> 
	<table align="center" >  
	<form action="mini updating.php" method="GET"> 
		<tr>    
			<th colspan="2" align="center"><u>Upadation Page</u><br><br>Change Data as per Requirement<br></th>    
		</tr>   
		<tr>    
			<td>User id:</td>    
			<td><input type="text" name="uid1" value="<?php echo $uid; ?>" required disabled>
			<input type="hidden" name="uid" value="<?php echo $uid; ?> "></td>  
		</tr>   
		<tr>    
			<td>Username:</td>    
			<td><input type="text" name="name" value="<?php echo $uname; ?>" required></td>  
		</tr>   
		<tr>    
			<td>Password:</td>    
			<td><input type="text" name="pass" value="<?php echo $pass; ?>" required></td>  
		</tr>   
		<tr>    
			<td>Date Of Birth:</td> 
			<td><input type="date" name="dob" value="<?php echo $dob; ?>" required></td>   
		</tr>  
		<tr>    
			<td>Mobile:</td>    
			<td><input type="number" name="mobile" value="<?php echo $mobile; ?>" required></td>   
		</tr>   
		<tr>    
			<td>Enter mail:</td>    
			<td><input type="email" name="mail" value="<?php echo $email; ?>" required></td>   
		</tr>   
		<tr> 
			<td class="no" align="center" colspan="2"><input type="submit" name="update" value="Update Data"></td>       
		</tr> 
	</form>
	</table> 
 
</body>  
</html> 
 
 
 
 