<?php
$id=$_GET['item_id'];
$user_id=$_GET['user_id'];

mysql_connect("localhost","root","");
mysql_select_db("onlineshop");
$result=mysql_query("DELETE FROM cart WHERE c_id='$user_id.$id'");
if ($result === TRUE) {
	header("Location:viewcart.php?user_id=$user_id");
}
else{
	echo "Error";
}
?>