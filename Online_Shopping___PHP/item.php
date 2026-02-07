<?php include 'header.php';?>
 
<html>
<head>
<style>
td{
	padding:5px;
	font-size:20px;
}
img{
	border:2px solid white;
	padding:5px;
	margin:5px;
	height:auto;
	width:40%;
	border-radius:10px;
}
button.btn{
	width:25%;
	height:40px;
	border:2px solid black;
	font-size:20px;
	border-radius:10px;
	background: red;
}

/*related item css*/
.related{
			 width:100%;
 			 height:auto;
			 position: relative;
			 box-sizing: border-box;
			 color: black;
			 border-radius: 8px;
			 background: #dedede;
			 padding: 10px;
			 font-size: 20px;
			 font:sans-serif;
			 }
			 img.relate{
			 	width: 30%;
			 	height: auto;
			 }
			 td{
			 	text-align: center;
			 	border:none;


			 }
			 table.relatedt{
			 	border:3px solid gray;
			 	border-radius: 5px;
			 	margin: 5px;

			 }
			 a{
			color: black;
			text-decoration: none;
			}
			
/**/
</style>
</head>
<body>
<center>
	<h2><u>Product Details</u></h2>
<?php
$id=$_GET['item_id'];
$category="";
mysql_connect("localhost","root","");
mysql_select_db("onlineshop");
$result=mysql_query("select * from items where item_id='$id'");  
while($row=mysql_fetch_array($result))
{	
	$id=$row['item_id'];
	$category=$row['category'];
	echo "<table  width='100%'>";
	echo "<tr><td><center><img src='";
	echo $row['item_photo']." '/></center></td></tr><TR><td><center>	Company:";
	echo $row['company']."</center></td></tr><TR><td><center>	Product Name:";
	echo $row['name']."</center></td></tr><tr><td><center>	Price:";?>
		<label style="color: green; text-decoration: bold; font-size: 25px;">
	<?php echo $row['price']."</center></td></tr><tr><td><center>";?>
		</label>
	<?php echo $row['discription']."</center></td></tr></table><br>";
}

?>
<a href="cart.php?item_id=<?php echo $id;?> & user_id=<?php echo $user_id;?>"><button class="btn">ADD TO CART</button></a>
</center>
<div class="related">
	<h3 align="center" style="color: grey"><u>Related items</u></h3>
	<?php 

		$result=mysql_query("select *from items where category='$category'");
		while($row=mysql_fetch_array($result)){
			$id=$row['item_id']; ?>
		<table align="center" width="100%" class="relatedt">
	<tr>
		<td colspan="2"><a href="item.php?item_id=<?php echo $id;?>& user_id=<?php echo $user_id;?>"><img src="<?php echo $row['item_photo'];?>" class="relate"></a></td>
		
	</tr>
	
	<tr>
		<td colspan="2" style="text-decoration: bold;"><a href="item.php?item_id=<?php echo $id;?>& user_id=<?php echo $user_id;?>"><u><?php echo $row['name'];?></u></a></td>
		
	</tr>
	<tr>
		
		<td colspan="2"><a href="item.php?item_id=<?php echo $id;?>& user_id=<?php echo $user_id;?>">Company:  <?php echo $row['company'];?></a></td>
	</tr>
	<tr>
		
		<td colspan="2"><a href="item.php?item_id=<?php echo $id;?>& user_id=<?php echo $user_id;?>">Price: <label style="color: green; text-decoration: bold; font-size: 25px;"><?php echo $row['price'];?></label></a></td>
	</tr>
	</table>
	<?php } ?>
</div>
</body>	
</html>