<html>
<head>
<title>EDIT PROFILE</title>
<style>
body{
  margin: 0;
  padding: 0;
  background: url(Images/f1.jpg) no-repeat;
  background-size: cover;
  background-position: center;
  font-family: sans-serif;
}
.main{
  width:auto;
  height:auto;
  background: #000;
  color: #fff;
  top:50%;
  left: 50%;
  position: absolute;
  transform: translate(-50%,-50%);
  box-sizing: border-box;
  padding: 70px 30px;
}
.onlogo{
  width: 100px;
  height: 100px;
  border-radius: 50%;
  position: absolute;
  top: -50px;
  left: calc(50% - 50px);
}
.main p{
  margin: 0;
  padding: 0;
  font-weight: 20px;
}
.main input{
  width: 100%;
  margin-bottom: 20px;

}
.main input[type="text"],input[type="password"],input[type="number"],input[type="Email"]{
  border: none;
  border-bottom: 1px solid #fff;
  background: transparent;
  outline: none;
  height: 40px;
  color: grey;
  font-size: 16px;
}
.main input[type="submit"]{
  border: none;
  background: #fb2525;
  outline: none;
  height: 40px;
  color: #fff;
  font-size: 18px;
  border-radius: 20px;
}
.main input[type="submit"]:hover{
  cursor: pointer;
  background: #ffc107;
  color: #000;
}

</style>
</head>
<body>

  <?php 
$user_id=$_GET['user_id'];
mysql_connect("localhost","root","");
mysql_select_db("onlineshop");
$result=mysql_query("select * from users where user_id='$user_id'");
while($row=mysql_fetch_array($result)){
?>
<form action="update.php" method="POST">


<div class="main">
  <img src="Images/logo.jpg" class="onlogo">
  <h2 align="center">Update Information</h2>
  <form>
    <p>User ID</p>
  <input type="text" name="user_id" value="<?php echo $row['user_id'];?>">
  <p>First Name:</p>
  <input type="text" name="firstname" value="<?php echo $row['first_name'];?>">
  <p>Last Name:</p>
  <input type="text" name="lastname" value="<?php echo $row['last_name'];?>">
  <p>Email:</p>
  <input type="Email" name="email" value="<?php echo $row['email'];?>">
  <p>Mobile:</p>
  <input type="number" name="mobile" value="<?php echo $row['mobile'];?>">
  <p>Password</p>
  <input type="Password" name="password" value="<?php echo $row['password'];?>">
  <input type="submit" name="Update" value="Update">
 
  </form>
</div>

</form>
<?php }?>

</body>
</html>