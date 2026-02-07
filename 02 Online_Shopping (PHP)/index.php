<?php
$user_id=$_GET['user_id'];
include 'header.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<style type="text/css">
	/*Header stylesheet*/
	/*body{
			background: #dedede;
			font-family: sans-serif;
			margin: 0;
			padding: 0;
		}
		.dropdown{
			margin: 0 auto;
			width: 100%;
			height: auto;
		}
		.index{
			width: 100%;
			height: auto;
		}
		
		nav{
			width: 100%;
			height: 60px;
			background: #2c3e50;
			box-shadow: 0 10px 15px rgba(0,0,0,0.1);
		}
		.logo{
			padding: 5px 0 0;
			width: 100px;
			height: auto;
			margin-left: 25%;
		}
		.cart{
			font-size: 20px;
		 	color: white;
			background: none;

		}
		nav ul{
			padding: 0;
			margin: 0;
			margin-right: 40%;
			float: right;

		}
		nav ul li{
			font-size: 20px;
			background: #2c3e50;
			position: relative;
			list-style: none;
			display: inline-block;
		}
		nav ul li a{
			display: block;
			padding: 0 15px;
			color: white;
			text-decoration: none;
			line-height: 60px;
			font-size: 15px;
		}
		nav ul li a:hover{
			background: #243342;
		}
		nav ul ul{
			position: absolute;
			top:60px;
			display: none;

		}
		nav ul li:hover > ul{
			display: block;
		}
		nav ul ul li{
			width:150px;
			float: none;
			display: list-item;
			position: relative;

		}
		.search{
			width: 100%;
			height: auto;
			padding: 5px;
			}
		.textsearch{
				width: 70%;
				height: 20px;
				font-size: 15px;
				border-radius: 10px;
				padding: 5px;
			}
		.btn{
				width: 25%;
				height: auto;
				font-size: 20px;
				background: #2c3e50;
				color: white;
				border-radius: 10px;
				border:2px solid white;

			}*/
	/*End*/			
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
			border:3px solid gray;
			border-radius:10px;
		}
		.slider{
			overflow: hidden;
			width: 100%;
			height:auto;
			border-radius: 5px;
			border:2px solid grey;
		}
		.slider figure{
			position: relative;
			width:500%;
			margin:0;
			left: 0;
			animation: 20s slider infinite;
		}
		.slider figure img{
			width: 20%;
			height: 300px;
			float: left;
		}
		@keyframes slider{
			0%{
					left:0 ;
			}
			20%{
					left: 0;
			}
			25%{
					left:-100% ;
			}
			45%{
					left: -100%;
			}
			50%{
					left: -200%;
			}
			70%{
					left: -200%;
			}
			75%{
					left: -300%;
			}
			95%{
					left: -300%;
			}
			100%{
				left: -400%;
			}
		}
	</style>
	<link rel="stylesheet" type="text/css" href="http://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>
<body>
		

	<div style="height: 100px;"> 
	<h3 align="center" style="color: gray;"><u>All Product are Available Here</u></h3>
</div>
	<div class="slider">
		<figure>
		<a href="itemdisplay.php?category=watches & user_id=<?php echo $user_id;?>"><img src="Images/f7.jpg" width="100%" height="auto"></a>
		<a href="itemdisplay.php?category=shoes &user_id=<?php echo $user_id;?>"><img src="Images/f11.jpg" width="100%" height="auto">
		</a>
		<a href="itemdisplay.php?category=glass &user_id=<?php echo $user_id;?>"><img src="Images/g9.jpg" width="100%" height="auto">
		</a>
		<a href="itemdisplay.php?category=shoes &user_id=<?php echo $user_id;?>"><img src="Images/s8.jpg" width="100%" height="auto">
		</a>
		<a href="itemdisplay.php?category=watches &user_id=<?php echo $user_id;?>"><img src="Images/w1.jpg" width="100%" height="auto">
		</a>
		</figure>	
	</div>
	<div class="main">
		<center>
<?php
mysql_connect("localhost","root","");
		mysql_select_db("onlineshop");
$result=mysql_query("select * from items"); 

while($row=mysql_fetch_array($result))
{	
	$id=$row['item_id'];
	echo "<table width='100%' class='item'> <br>";
	echo "<tr><td width='25%'><a href='item.php?item_id=$id & user_id=$user_id'><center><img src='";
	echo $row['item_photo']."'></img>";
	echo "</center></a></td><td style=".'"font-size="50px"'."><a href='item.php?item_id=$id & user_id=$user_id'><center><u><b>";
	echo $row['company']."</b></u><br>";
	echo $row['name']."<br>"."Price:";?>
	<label style="color: green; text-decoration: bold; font-size: 25px;">
	<?php echo $row['price']."<br></center></a></td></tr></table>";?>
</label>
<?php
}

?>
</center>
</div>
</body>
</html>