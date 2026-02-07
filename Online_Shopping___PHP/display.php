<!DOCTYPE html>
<html>
<head>
	<title>Display</title>
</head>
<body>

<?php
$category=$_GET['category'];

	
mysql_connect("localhost","root","");
mysql_select_db("onlineshop");
$result=mysql_query("select * FROM items where category='$category'");

while ($row=mysql_fetch_array($result)) {
	echo "name".$row['name'];
	echo "price".$row['price'];
	echo "company".$row['company'];?>
	<img src="<?php echo $row['item_photo'];?>" height="100" width="100">
	<?php
	}
	?>

</body>
</html>