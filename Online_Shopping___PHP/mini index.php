<?php
$uid=$_GET['uid'];
$search=$_GET['search'];
?>
<html> 
<head>  
	<title> Home Page</title>  
<head>
<style>
table{
	text-align:right;
}
a{
	text-decoration:none;
	color:black;}
td{
border:no-border}
img{
	height=100%;
	width:100%;
}
table.item{
	border:3px dashed blue;
	border-radius:10px;
}
		body{
			background: #dedede;
			font-family: arial;
			margin: 0;
			padding: 0;
		}
		.dropdown{
			margin: 0 auto;
		}
		nav{
			height: 60px;
			background: #2c3e50;
			box-shadow: 0 10px 15px rgba(0,0,0,0.1);
		}
		.logo{
			padding: 5px 0 0;
			width: 100px;
			height: auto;
		}
		nav ul{
			padding: 0;
			margin: 0;
			margin-right: 30px;
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
		p{
			font-color:red;
		}

	td{    
	margin: 20px;
	padding:20px;
	font-size: 20px;  
	padding: 2px;   } 
	input[type=button]{      
	padding-top:5px;
	padding-bottom:5px;	}
	
	input[type=text]{      
	padding-top:5px;
	height:40px;
	width:100%;
	padding-bottom:5px;	} 
	input[type=button],[type=submit]{      
	width: 100%;
	height:40px;	
	padding-top:5px;
	padding-bottom:5px;	} 
	th{    
	margin: 10px;    
	font-size: 30px;    
	padding: 2px;   }  

	<link rel="stylesheet" type="text/css" href="http://use.fontawesome.com/releases/v5.6.3/css/all.css">
 	
	</style> 
</head> 

<body> 
	<table align="center">  
		<tr>    
			<th align="center"><u>My Shopping Website</u><br><br>All the products are available here...<br></th>    
		</tr>  
	</table>	<hr size=5px color=red>	
	
	<table width="100%">
	<tr>
		<td>
		<?php
		if($uid!='0')
		{
			$con=mysql_connect("localhost:3307/","root","Riyaz@786");
		if(!$con)
		{	die("error in connection".mysql_error());	}
		else
		{
			mysql_select_db("mini"); 	 
		}

		$result=mysql_query("select * from register where uid=$uid",$con);  
		while($row=mysql_fetch_array($result))
		{	
			$username=$row['username'];
		}
			echo "Hi.. $username</td><td>";
			echo "<td><a href='mini profile.php?uid=$uid'><button>Edit Profile</button></a></td>";
			echo "<td><a href='mini indexing.php'><button>Log Out</button></a></td><td>";
			echo "<td><a href='mini cart.php?uid=$uid&search=$search'><button>My cart</button></a></td><td>";
			
		}
		else
		{	
		echo "<A href='mini login.php?f=0'><input type='button' name='login' value='Login'></td><td>";	
		echo "<a href='mini register.html'><input type='button' name='register' value='Register'></a></td><td>";
		}
		?>
		
		<div class="dropdown">
		<nav>
			<ul>
				<li><a href="#">Search Item<i class="fas fa-chevron-circle-down"></i></a>
					<ul>
						<?php 
						echo "<li><a href='mini index.php?search=Rado&uid=$uid'>Rado</a></li>";
						echo "<li><a href='mini index.php?search=fashion&uid=$uid'>Fashion</a></li>";
						echo "<li><a href='mini index.php?search=Goggle&uid=$uid'>Goggles</a></li>";
						echo "<li><a href='mini index.php?search=0&uid=$uid'>All Items</a></li>";
						
						?>
					</ul>
				</li>	
			</ul>	
		</nav>
	</div>
	</td></tr></table></form>
	<hr size=5px color=red>	
</body> 
</html> 

<?php 
//echo $username." ".$search;
$con=mysql_connect("localhost:3307/","root","Riyaz@786");

if(!$con)
{	die("error in connection".mysql_error());	}
else
{
	mysql_select_db("mini"); 	 
?> 
<html>
<body>
	
</div>
<center>

<?php
if($search=='0')
{
	$result=mysql_query("select * from item",$con); 
}
else
{
	$result=mysql_query("select * from item where company='$search' or category='$search' or brand='$search'",$con); 
}
while($row=mysql_fetch_array($result))
{	
	$id=$row['id'];
	echo "<table width='100%' class='item'> <br>";
	echo "<tr ><td width='25%'><a href='mini item.php?id=$id&uid=$uid&search=$search'><center><img src='";
	echo $row['photo']."'></img>";
	echo "</center></a></td><td style=".'"font-size="50px"'."><a href='mini item.php?id=$id&uid=$uid&search=$search'><center><u><b>";
	echo $row['company']."</b></u><br>";
	echo $row['itemname']."<br><br>Price:";
	echo $row['price']."</a>";	
	$r=mysql_query("select * from cart where cid='$uid.$id'",$con);
	$cid=0;
	while($ro=mysql_fetch_array($r))
	{
		$cid=$ro['cid'];
		//echo $cid;
	}
	if($uid!=0)
	{
		if($cid==0)
		{
			echo "<br><br><a href='mini add.php?item=$id&uid=$uid&search=$search'><button>Add to Cart</button></a><br>";
		}else
		{
			echo "<br><br><a href='mini remove.php?item=$id&uid=$uid&search=$search&f=0'><button>Remove from Cart</button></a><br>";			
		}
	}
	echo "</td></tr>";
}
}
?>
</center></table>
</center>
</body>	
</html>


 
 