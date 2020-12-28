<!DOCTYPE html>
<html>
<head>
	<title>Drug Stock</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<div class="wrapper">
		<div class="top-bar clearfix" >
			<div class="site-search">
				<form method = "get" action ="Drug_Stock_Page.html" >
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
				<li><a href="#">Notification</a></li>
				<li><a href="#">Inquiries</a></li>
				<li><a href="#">My Account</a></li>
			</ul>
		</nav>
	</div><!--wrapper-->
	<div class="drugsearch">
		<div class="genericname">
			<form method = "get" action ="Drug_Stock_Page.html" >
					<table>
						<tr>Generic Name</tr>
						<tr></tr>
					</table>
					<input type="search" name="search-box">
					<button type="submit"></button>
				</form>
		</div><!--genericname-->
		<div class="drugname">
			<form method = "get" action ="Drug_Stock_Page.html" >
					<table>
						<tr>Brand Name</tr>
						<tr></tr>
					</table>
					<input type="search" name="search-box">
					<button type="submit"></button>
				
				</form>
		</div><!--drugname-->
		<div class="drugcode">
			<form method = "get" action ="Drug_Stock_Page.html" >
					<table>
						<tr>Drug Code</tr>
						<tr></tr>
					</table>
					<input type="search" name="search-box">
					<button type="submit"></button>
				</form>
		</div><!--drugcode-->
	</div><!--drugsearch-->
	<div class="tabledrug">
		<table>
			<thead>
				<tr>
					<th>Select</th>
					<th>Generic Name</th>
					<th>Brand Name</th>
					<th>Drug Code</th>
					<th>Dose</th>
					<th>Expiration Date</th>
					<th>Tempurature</th>
					<th>Price</th>
					<th>QTY</th>
				</tr>
			</thead>
			<tbody>
				
			</tbody>
		</table>
	</div><!--tabledrug-->
	<div class="buttons">
		<button type="button">Add</button>
		<button type="button">Delete</button>
		<button type="button">Update</button>
	</div><!--buttons-->
</body>
</html>