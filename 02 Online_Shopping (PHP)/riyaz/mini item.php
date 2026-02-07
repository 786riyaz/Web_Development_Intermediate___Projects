<?php 
$id=$_GET['id'];

?> 
<html>
<head>
<style>
td{
	padding:5px;
	font-size:20px;
}
img{
	border:2px solid red;
	padding:5px;
	margin:5px;
	height:200px;
	width:200px;
	border-radius:10px;
}
button{
	width:25%;
	height:40px;
	border:5px solid black;
	font-size:25px;
	border-radius:10px;
}
</style>
</head>
<body>
<center>
	<h1><u>Product Details</u></h1>
<?php
$result=mysql_query("select * from items where id=$id");  
while($row=mysql_fetch_array($result))
{	
	$id=$row['id'];
	echo "<table  width='100%'>";
	echo "<tr><td><center><img src='";
	echo $row['item_photo']." '/></center></td></tr><TR><td><center>	Company:";
	echo $row['company']."</center></td></tr><TR><td><center>	Product Name:";
	ECHO $row['name']."</center></td></tr><tr><td><center>	Price:";
	ECHO $row['price']."</center></td></tr><tr><td><center>";
	echo $row['discription']."</center></td></tr></table><br>";
}
echo "<a href='index.php'><button>GO BACK</button></a>";
?>
</center>
</body>	
</html>