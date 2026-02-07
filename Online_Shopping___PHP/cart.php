<?php
	$id=$_GET['item_id'];
	$user_id=$_GET['user_id'];
	if ($user_id==0) {
		header("Location:index.php?user_id=0");
	}
	else{
	mysql_connect("localhost","root","");
	mysql_select_db("onlineshop");
	$result=mysql_query("INSERT INTO cart VALUES('$user_id.$id','$user_id','$id')");
	
	
	if ($result ===TRUE) {
	
	header("Location:index.php?user_id=$user_id");
	} else {
	
	echo "Some Error Occurred! or You Alredy inserted";
	}
}
	?>
	