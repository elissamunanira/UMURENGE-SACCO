<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1; margin:0 200px 200px 200px;}
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px o;
  border: none;
  cursor: pointer;
  width: 45%;
}
button:hover {
  opacity: 0.8;
}
.btn2{background-color:violet;width:30%;align-items: center;}
.btn1 a{ text-decoration: none;color: #fff;font-size: x-large;}
.btn2 a{ text-decoration: none;font-size: x-large;color:black;}
.cancelbtn {
  width: auto;
  text-decoration: none;
  list-style: none;
  padding: 10px 18px;
  background-color: #f44336;
}
.cancelbtn a {
      text-decoration: none;
      color: #fff;}
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}
.container {
  padding: 16px;
}
span.psw {
  float: right;
  padding-top: 16px;
}
/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
h2{text-align:center;}
</style>
</head>
<body>
<h2>Agent Login Form</h2>
<form action="checkagent.php" method="post">
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>
  <div class="container">
    <label for="username"><b>Email</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <label><br><br>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label><br><br>
    <button type="submit"class="btn1"><a href="agentmode.php">Login</a></button>
  <button type="button"class="btn2"><a href="signup.php">Sign up</a></button>
</div>
  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn"><a href="HOME.php">Cancel</a></button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>
</html>
