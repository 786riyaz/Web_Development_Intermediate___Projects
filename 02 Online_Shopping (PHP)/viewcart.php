<!DOCTYPE html>
<html>
<head>
	<title>Display</title>
	<style type="text/css">
		body{
			background: #dedede;
			}
		.main{
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
			 img.viewimage{
			 	width: 30%;
			 	height: auto;
			 }
			 td{
			 	text-align: center;
			 	border:none;


			 }
			 table.viewcart{
			 	border:3px solid gray;
			 	border-radius: 5px;
			 	margin: 5px;

			 }
			 a{
			color: black;
			text-decoration: none;
			}
			button{
				width:20%;
				height:25px;
				border:2px solid white;
				font-size:10px;
				border-radius:10px;
				background: grey;
				color:white;
				}

		</style>
</head>
<body>
<div class="main">
<?php
$user_id=$_GET['user_id'];
mysql_connect("localhost","root","");
mysql_select_db("onlineshop");
$result=mysql_query("select * FROM cart where user_id='$user_id'");

while ($row=mysql_fetch_array($result)) {
	$id=$row['item_id'];
	$r=mysql_query("select * from items where item_id='$id'");
	while ($row=mysql_fetch_array($r)) {
		?>
	<table align="center" width="100%" class="viewcart">
	<tr>
		<td colspan="2"><a href="item.php?item_id=<?php echo $id;?>& user_id=<?php echo $user_id;?>"><img src="<?php echo $row['item_photo'];?>" class="viewimage"></a></td>
		
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
	<tr>
		<td colspan="2" align="center"><a href="delete_cart.php?item_id=<?php echo $id;?> &user_id=<?php echo $user_id;?>"><button>DELETE FROM CART</button></a>
	</tr>
	</table>
<?php }} ?>
</div>
</body>
</html>