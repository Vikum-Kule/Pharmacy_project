<!DOCTYPE html>
<html lang="en">
<head>
 
  <title>Staff Login</title>
 
  
  
</head>
<style>
  * { margin: 0; padding: 0; box-sizing: border-box;}

body { font: 16px Arial, "Helvetica Neue", Helvetica, sans-serif;  }

.wrapper{ 

background-image: url("https://c1.wallpaperflare.com/preview/990/593/237/apothecary-pharmacy-chemist-mortar-and-pestle.jpg");
 height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  width: 1200px; margin: 0 auto; display: flex; flex-wrap: wrap}

header { width: 1200px;
  background: linear-gradient(#7FB5F1,white,#7FB5F1);
}
a {
  text-decoration: none;
  font-variant: bold;
}
nav {
  width: 100%;
  background: blue;
  background: linear-gradient(#003087,#005EBB,#003087);
  text-align: center;
}

nav ul{
  list-style: none;
}

nav ul li{
  display: inline;
}
nav ul li a{
  color: white;
  text-transform: uppercase;
  margin: 25px 10px 25px 10px;
  display: inline-block;
}

nav ul li a:hover{
  color: black;
}

 .site-search {
  padding: 0px 10px;
  margin-top: 10px;
  float: right;
  border-radius: 10px;
height: 40px;
margin-bottom: 20px;
padding: 10px 10px 10px 10px;
  margin: 15px;
  float: right;
  background: #3498DB;
  border-radius: 10px;
}
.site-search input{
  border: 0;
  float: left;
}
/* .site-search button {
 width: 18px;
  height: 18px;
  background: url(<?php echo URLROOT ?>/public/img/search.png);
  border: 0;
  float: right;
  color: blue;
} */
.site-search button:hover {
  background: #1E2B81;
}

.container input[type=text],input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
.logform:hover {
  opacity: 95%;
}
.container button {
  background-color:#044D6F  ;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

.container button:hover {
  opacity: 0.95;
}
.logform{

  
background:#10142E ;
}

.logform h1{
  font-variant: bold;
  text-align: center;
   background: -webkit-linear-gradient(black,#07153D,#667EBF,#07153D,black);
  padding: 50px;
  color: white;
  border-bottom: 5px solid #709699 ;
}
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #12727A ;
  margin-bottom: 50px;
}

.imgcontainer {
 
  text-align: center;
  width: 400px;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
  text-align: center;
}

.container {
  padding: 16px;
}
.container b {
  color: white;
}
.container input {

  background-color: #BFBFC3 ;
}

span.psw {
  float: center;
  padding-top: 16px;
}

</style>
<body>

  <div class="wrapper">
    <header>
      <img src="<?php echo URLROOT ?>/public/img/OO.jpg" alt="Girl in a jacket" width="100" height="50">
    </header>
    
    
      <div class="site-search">
      <form  method="get" action="SellerReg.html">
        <input type="text" placeholder="search">
        <button type="submit"></button>
      </form>
     </div>

   
 
  
<div class ="logform">
  

<h1>Staff Login Form</h1>

<form action="<?php echo URLROOT; ?>/users/login" method="POST">
  <div class="imgcontainer">
    <img src="<?php echo URLROOT ?>/public/img/BB.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <form action="<?php echo URLROOT ?>/users/login" method="POST">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>
    <span class="invalidFeedback">
      <?php echo $data['usernameError']; ?>
    </span>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    <span class="invalidFeedback">
      <?php echo $data['passwordError']; ?>
    </span>    
    <button type="submit" name="login">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
    
  </div>
  <div class="container2">
    <button type="button" class="cancelbtn">Cancel</button>
    </form>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</div>

</div>
</center>
      
</body>
</html>