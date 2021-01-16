<!DOCTYPE html>
<html>
<head>
	<title>Pharmacist Registration</title>

	<style>
	
*{margin: 0; padding: 0 ; } 
*{ text-decoration: none; }
.clearfix { overflow: auto; }
.wrapper {
	margin: 0 auto;
	width: 1200px;

	background-color:#E8ECF5 ;
		}
header {
	margin: 0 auto;
	width: 1200px;
	background: linear-gradient(#7FB5F1,white,#7FB5F1);

}.top-bar{
	width: 100%;
	background: #005EBB;
}

.top-bar-links{
	padding: 15px;
	float: right;
}

.top-bar-links ul{
	list-style: none;
}

.top-bar-links ul li{
	margin-top: 10px;
	display: inline-block;
}

.top-bar-links ul li a{

	color: white;
}

.top-bar ul li a:hover{
	color: black;
}
.site-search{
	padding: 10px 10px 10px 10px;
	margin: 15px;
	float: right;
	background: #182666 ;
	border-radius: 10px;
}

.site-search input{
	border: 0;
	float: left;
	background-color: #ABB1CC;
}

.site-search button{
	width: 18px;
	height: 18px;
	background: url(<?php echo URLROOT ?>/public/img/search.png);
	border: 0;
	float: right;
	color: blue;
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
.table {

	background-color: #AED6F1 ;
	width: 600px;
	height: 1200px;
	float: left;
	

}
table{
	border: 1px solid black;
	margin: 0 auto;
		width: 600px;
		margin-top: 10px;
	margin-bottom: 20px;
	
	}
	
	td{
		width: 600px;
		
		text-align:left;
		background: #809fff;
		
	}
	
		
	
	th{
		color: white;
		background:#005EB8 ;
		padding: 15px;
	}
	.table,td,th:hover {
  opacity: 95%;
}
  .table,th:hover {
  opacity: 85%;
}
.table-search{
	padding: 10px 10px 10px 10px;
	margin: 15px;
	float: right;
	background: #3498DB;
	border-radius: 10px;
}

.table-search input{
	border: 0;
	float: left;
}

.table-search button{
	width: 18px;
	height: 18px;
	background: url(<?php echo URLROOT ?>/public/img/search.png);
	border: 0;
	float: right;
	color: blue;
}
* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
 height: 1200px;
  background-color: white;
 
  background-image: url("https://chicagohealthonline.com/wp-content/uploads/2020/03/AdobeStock_274131656-1170x700.png");

}

/* Full-width input fields */
.container input[type=text], input[type=number] , input[type=email] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
.container input[type=Date] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}


.container input[type=text]:focus, input[type=number]:focus {
  background-color: #ddd;
  outline: none;
}
.container:hover {
  opacity: 90%;
}

/* Overwrite default styles of hr */

/* Set a style for the submit button */
.container button {
  background-color: #367BA8;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
  opacity: 0.9;
}
.container button:hover {
	background:  #1E2B81;
		}
.container h1 {
	margin-bottom: 20px;
}

/* Add a blue text color to links */


/* Set a grey background color and center the text of the "sign in" section */

.sellerform {
	width: 600px;
	float: right;
	
}
textarea {
	width: 100%;
	padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
	</style>
</head>
<body>
<header>
	<img src="<?php echo URLROOT ?>/public/img/OO.jpg" alt="Girl in a jacket" width="100" height="50">
</header><!-- /header -->
<div class="wrapper">
	
	<div class="top-bar clearfix" >
			<div class="site-search">
				<form  >
					<input type="search" name="search-box">
					<button type="submit"></button>
				</form>
			</div><!--site-search-->
			<div class="top-bar-links">
				<ul>
					<li><a href="#">Log Out</a></li>
					
				</ul>
			</div><!--top-bar-links-->
		</div><!--top-bar-->
		<nav>
			<ul>
				<li><a href="#">Drug Stock</a></li>
				<li><a href="#">Pharmacist Registration</a></li>
				<li><a href="#">Delivery Person Registration</a></li>
				<li><a href="#">Customer Details</a></li>
					<li><a href="#">Supplier Registration</a></li>
			</ul>

		</nav>
	<div class ="table">
		<div class="site-search">
				<form method = "get" action ="SellerReg.html" >
					<input type="search" name="search-box">
					<button type="submit"></button>
				</form>
			</div><!--table-search-->
		
		<table width="50%">
	<tr>
			<th>Name</th>
			<th>Number</th>
			
			

	</tr>

	</table>
		
	</div><!--table-->
	<div class = "sellerform">
		<form method = "POST" action ="<?php echo URLROOT ?>/users/register">
  <div class="container">
   <h1>Pharmacist Registration Form</h1>
    <hr>

    <label for="name"><b>User Name</b></label>
    <input type="text" placeholder="Enter User Name" name="username" id="username" required>
    <span class="invalidFeedback">
      <?php echo $data['usernameError']; ?>
    </span>

     <label for="name"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="FirstName" id="FirstName" required>

     <label for="name"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="LastName" id="LastName" required>

 	<label for="Date"><b>DOB</b></label>
    <input type="Date" placeholder="Enter Date Of Birthday" name="DOB" id="DOB" required>

     <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" id="email" required>
    <span class="invalidFeedback">
      <?php echo $data['emailError']; ?>
    </span>
 
    <label for="number"><b>Phone Number</b></label>
    <input type="number" placeholder="Enter your contact number" name="phoneNumber" id="phoneNumber" required>

    <label for="text"><b>Password</b></label>
    <input type="text" placeholder="Enter Password" name="password" id="password" required>
    <span class="invalidFeedback">
      <?php echo $data['passwordError']; ?>
    </span>

    <label for="Date"><b>Form Date</b></label>
    <input type="Date" placeholder="Enter The Starting Date" name="fromDate" id="fromDate" required>
     <label for="Date"><b>To Date</b></label>
    <input type="Date" placeholder="Enter The Ending Date" name="toDate" id="toDate" >

    <label for="text"><b>LicenseNo</b></label>
    <input type="text" placeholder="Enter LicenseNo" name="licenseNo" id="licenseNo" required>

    <label for="NIC"><b>NIC</b></label>
    <input type="text" placeholder="Enter NIC" name="NIC" id="NIC" required>

    <button type="submit" class="registerbtn" name="submit">Add</button>
      
  </div>
  
  
</form>

	</div>
	
	</div><!--wrapper-->
</body>
</html>