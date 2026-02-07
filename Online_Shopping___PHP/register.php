<html>
<head>
<title>Registration</title>
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



<form action="reg.php" method="POST">
  

<div class="main">
  <img src="Images/logo.jpg" class="onlogo">
  <h2 align="center">Register</h2>
  <form>
  <p>First Name:</p>
  <input type="text" name="firstname" placeholder="Enter Name" required>
  <p>Last Name:</p>
  <input type="text" name="lastname" placeholder="Enter Last Name" required>
  <p>Email:</p>
  <input type="Email" name="email" placeholder="Enter Email" required>
  <p>Mobile:</p>
  <input type="number" name="mobile" placeholder="Enter Mobile" required>
  <p>Password</p>
  <input type="Password" name="password" placeholder="Enter Password" required>
  <input type="submit" name="register" value="Register">
 
  </form>
</div>

</form>

</body>
</html>