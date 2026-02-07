<?php
$user_id=$_GET['user_id'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<style type="text/css">
		body{
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
			margin-left: 10%;
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

			}
	</style>
	<link rel="stylesheet" type="text/css" href="http://use.fontawesome.com/releases/v5.6.3/css/all.css">

</head>
<body><div class="index">
<nav clas="head">
	<img src="Images/logo2.jpg" class="logo">	
		<ul>
			<?php
		if($user_id!='0')
		{
			$con=mysql_connect("localhost","root","");
		if(!$con)
		{	die("error in connection".mysql_error());	}
		else
		{
			mysql_select_db("onlineshop"); 	 
		}

		$result=mysql_query("select * from users where user_id='$user_id'");  
		while($row=mysql_fetch_array($result))
		{	
			$username=$row['first_name'];
		}?>
		<label style="color: white;"><?php echo "Hii  ".$username; ?></label>
		<li><a href="profile.php?user_id=<?php echo $user_id; ?>"><button class="cart">Edit profile</button></a></li>
		<li><a href="main.php"><button class="cart">LOGOUT</button></a></li>
		<li><a href="viewcart.php?user_id=<?php echo $user_id; ?>"><button class="cart"><i class="fas fa-shopping-cart">  CART</i></button></a></li>	<?php }else{ ?>
		<li><a href="login.php"><button class="cart">LOGIN</button></a></li>
		<li><a href="register.php"><button class="cart">REGISTER</button></a></li>
		<?php } ?>
	</ul>
</nav>
</div>
	<div class="dropdown">
<nav>
	<ul>
		<li><a href="index.php?user_id=<?php echo $user_id;?>">Home</a></li>
		<li><a href="#">Fashion <i class="fas fa-chevron-circle-down"></i></a>
			<ul>
				<li><a href='itemdisplay.php?category=watches & user_id=<?php echo $user_id;?>'>Watches</a></li>
				<li><a href='itemdisplay.php?category=Shoes & user_id=<?php echo $user_id;?>'>Shoes</a></li>
				<li><a href='itemdisplay.php?category=glass & user_id=<?php echo $user_id;?>'>Glasses</a></li>
			</ul>
		</li>	
		<li><a href="#">Men</a>

		</li>
		<li><a href="#">Women</a></li>

	</ul>	
</nav>
</div>
<div class="search">
	<form action="search.php?user_id=<?php echo $user_id;?>" method="POST">
		<input type="text" name="search" placeholder="Search Items" class="textsearch" required>
		<input type="submit" name="Search" value="Search" class="btn">
	</form>
</div>
</body>
</html>