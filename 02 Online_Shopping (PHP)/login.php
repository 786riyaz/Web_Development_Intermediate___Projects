<html>
<head>
<title>Login</title>
<style>
body{
  margin: 0;
  padding: 0;
  background: url(Images/fashion.jpg) no-repeat;
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
.main input[type="text"],input[type="password"]{
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
.main a{
  text-decoration: none;
  font-size: 16px;
  line-height: 20px;
  color: white;
}
</style>
</head>
<body>



<form action="check.php" method="POST">
  

<div class="main">
  <img src="Images/logo.jpg" class="onlogo">
  <h2 align="center">Login Here</h2>
  <form>
  <p>Email</p>
  <input type="text" name="username" placeholder="Enter Email" required>
  <p>Password</p>
  <input type="Password" name="password" placeholder="Enter Password" required>
  <input type="submit" name="login" value="Login">
  <a href="register.php">Don't Have an Account ?</a><br>
 
  </form>
</div>

</form>

</body>
</html>