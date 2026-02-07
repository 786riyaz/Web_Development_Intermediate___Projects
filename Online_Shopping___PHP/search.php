<!DOCTYPE html>
<html>
<head>
	<title>Search items</title>
	<style type="text/css">
			body{
				background: #dedede;		
			}
		.searched_items{
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
	    img.searched_img{
			 	width: 30%;
			 	height: auto;
			 }
		td{
			 	text-align: center;
			 	border:none;


			 }
		table.searched{
			 	border:3px solid gray;
			 	border-radius: 5px;
			 	margin: 5px;

			 }
		a{
			color: black;
			text-decoration: none;
			}
			
	</style>
</head>
<body>
<div class="searched_items">
	<h3 align="center" style="color: grey"><u>Searched items</u></h3>
	<?php 
		$user_id=$_GET['user_id'];
		$search=$_POST['search'];

$search=mysql_escape_string($search);

mysql_connect("localhost","root","");
mysql_select_db("onlineshop");
$result=mysql_query("select * from items where category='$search' OR company='$search' OR name='$search'");
	
		while($row=mysql_fetch_array($result)){
			$id=$row['item_id']; ?>
		<table align="center" width="100%" class="searched">
	<tr>
		<td colspan="2"><a href="item.php?item_id=<?php echo $id;?> & user_id=<?php echo $user_id;?>"><img src="<?php echo $row['item_photo'];?>" class="searched_img"></a></td>
		
	</tr>
	
	<tr>
		<td colspan="2" style="text-decoration: bold;"><a href="item.php?item_id=<?php echo $id;?> & user_id=<?php echo $user_id;?>"><u><?php echo $row['name'];?></u></a></td>
		
	</tr>
	<tr>
		
		<td colspan="2"><a href="item.php?item_id=<?php echo $id;?> & user_id=<?php echo $user_id;?>">Company:  <?php echo $row['company'];?></a></td>
	</tr>
	<tr>
		
		<td colspan="2"><a href="item.php?item_id=<?php echo $id;?> & user_id=<?php echo $user_id;?>">Price: <label style="color: green; text-decoration: bold; font-size: 25px;"><?php echo $row['price'];?></label></a></td>
	</tr>
	</table>
	<?php } ?>
</div>
</body>
</html>



