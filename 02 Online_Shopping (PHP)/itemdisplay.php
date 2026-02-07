<?php include"header.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Card</title>

	<style type="text/css">
		a{
			text-decoration: none;
			color:black;

		}
		.main{
			 width:100%;
 			 height:auto;
			 position: relative;
			 box-sizing: border-box;
			 color: black;
			 border-radius: 8px;
			 background: #dedede;
			 padding: 20px;
			 font-size: 20px;
			 }
		.P{
			 width: 90%;
			 height: auto;
			 border-radius: 20px;
		  }
		
		 .space{
		 	height: auto;
		 	width: 100%;
		 }
		 td{
		 	border:none;
		 }
		 table.item{
			border:3px solid gray;
			border-radius:10px;
			margin:10px;
		}
		
	</style>
</head>
<body>
	<div class="space">
		<img src="Images/f4.jpg" width="100%" height="300px">
	</div>
	<div class="container">
	<div class="main">
		<?php
		$category=$_GET['category'];
		mysql_connect("localhost","root","");
		mysql_select_db("onlineshop");
		$result=mysql_query("select * FROM items where category='$category'");

		while ($row=mysql_fetch_array($result)) {
			$id=$row['item_id'];
			?>
	<table style="width: 100%;" class="item"> 
		<tr>
			<td rowspan="4" style="width: 40%;"><a href="item.php?item_id=<?php echo $id;?> & user_id=<?php echo $user_id;?>"><img src="<?php echo $row['item_photo'];?>" class="P"></a></td>
			<td style="color: black; font-size: 25px; font-style: bold; width: 40%;"><a href="item.php?item_id=<?php echo $id;?>& user_id=<?php echo $user_id;?>"><u><?php echo $row['name'];?></u></a></td>
			<td rowspan="4" style="color: green; font-size: 30px; font-style: bold;" align="center"><a style="color:green;" href="item.php?item_id=<?php echo $id;?>& user_id=<?php echo $user_id;?>"><?php echo $row['price'];?></a></td>		
		</tr>
		
		<tr>
			<td><a href="item.php?item_id=<?php echo $id;?>& user_id=<?php echo $user_id;?>"><?php echo $row['company'];?></a></td>
		</tr>
		<tr>
			<td><a href="item.php?item_id=<?php echo $id;?>& user_id=<?php echo $user_id;?>"><?php echo $row['discription'];?></a></td>
		</tr>
<?php } ?>
<!-- 	<?php
mysql_connect("localhost","root","");
		mysql_select_db("onlineshop");
$result=mysql_query("select * from items"); 

while($row=mysql_fetch_array($result))
{	
	$id=$row['item_id'];
	echo "<table width='100%' class='item'> <br>";
	echo "<tr><td width='25%'><a href='item.php?item_id=$id'><center><img src='";
	echo $row['item_photo']."'></img>";
	echo "</center></a></td><td style=".'"font-size="50px"'."><a href='item.php?item_id=$id'><center><u><b>";
	echo $row['company']."</b></u><br>";
	echo $row['name']."<br>"."Price:";
	echo $row['price']."<br></center></a></td></tr></table>";

}

?>  -->	</table>
</div>
</div>
</body>
</html>