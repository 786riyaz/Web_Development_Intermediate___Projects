<html> 
<head>  
	<title> Home Page</title>  
	<style>   
	td{    
	margin: 20px;
	padding:20px;
	font-size: 20px;  
	padding: 2px;   } 
	input[type=button]{      
	padding-top:5px;
	padding-bottom:5px;	}
	
	input[type=text]{      
	padding-top:5px;
	height:40px;
	width:100%;
	padding-bottom:5px;	} 
	input[type=button],[type=submit]{      
	width: 100%;
	height:40px;	
	padding-top:5px;
	padding-bottom:5px;	} 
	th{    
	margin: 10px;    
	font-size: 30px;    
	padding: 2px;   }   
	</style> 
</head> 

<body> 
	<table align="center">  
		<tr>    
			<th align="center"><u>My Shopping Website</u><br><br>All the products are available here...<br></th>    
		</tr>  
	</table>	<hr size=5px color=red>	
	<form action="index.php" method="get">
	<table width="100%">
	<tr>
		<td>
		<input type="button" name="login" value="Login" onclick="location.href='login.php'"></td><td>
	<input type="text" name='search' placeholder='SEARCH BY CATEGORY...'> </td><td>
	<input type="submit" name="search" value="Search"></td><td>
	<a href="register.php"><input type="button" name="register" value="Register"></a></td></tr>
	</table></form>
	<hr size=5px color=red>	
</body> 
</html> 

<?php 

$con=mysql_connect("localhost","root","");

if(!$con)
{	die("error in connection".mysql_error());	}
else
{
	mysql_select_db("onlineshop"); 	 
?> 
<html>
<head>
<style>
a{
	text-decoration:none;
	color:black;}
td{
border:no-border}
img{
	height:100%;
	width:100%;
}
table.item{
	border:3px dashed blue;
	border-radius:10px;
}
</style>
</head>
<body>
<center>
<?php
$result=mysql_query("select * from items",$con); 

while($row=mysql_fetch_array($result))
{	
	$id=$row['item_id'];
	echo "<table width='100%' class='item'> <br>";
	echo "<tr ><td width='25%'><a href='item.php?item_id=$id'><center><img src='";
	echo $row['photo']."'></img>";
	echo "</center></a></td><td style=".'"font-size="50px"'."><a href='mini item.php?item_id=$id'><center><u><b>";
	echo $row['company']."</b></u><br>";
	echo $row['itemname']."<br>"."Price:";
	echo $row['price']."<br></center></a></td></tr></table>";

}
}
?>
</center>
</body>	
</html>


 
 