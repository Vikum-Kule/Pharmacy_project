<?php require_once('db.php');?>
<?php 
$medTable = "medicine";
$medName = "name";
$medBrand = "brand";
$quary = "SELECT * FROM $medTable";
$result1 = mysqli_query($con,$quary);
$result2 = mysqli_query($con,$quary);
$result3 = mysqli_query($con,$quary);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Pharmacist</title>
	<link rel="stylesheet" type="text/css" href="header.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" href="make_order.css?v=<?php echo time(); ?>">
	<script type="text/javascript" src="jquery-3.5.1.min.js"></script>
	<script >
    $(document).ready(function() {
        $('#add').click(function(e) {
            e.preventDefault();
        })
    });

    </script>
	

</head>
<body>
	<div class="header">
	<img src="images\logo.JPG" width="100" height="50">
		<a href="#default" class="logo">Online Pharmacy <br> Management System</a>
		<div class="header-right">
			<a href="#">Make order</a>
			<a href="view_order.php">View order</a>
			<a href="my_account.php">My Account</a>
			<button>Log out</button>
		</div>

	</div>

<div id="leftSide" class="leftside">
  <table id="table1" >
  	<tr>
  		<td>Prescription</td>
  	</tr>
  	<tr>
  		<td><img src="images\prescription.png" width="100%" height="200"></td>
  	</tr>
  	<tr>
  		<td><textarea id="list" cols="35" rows="15"></textarea></td>
  	</tr>
   	<tr>
  		<td><p>customer name</p></td>
  	</tr>
  	<tr>
  		<td><p>bill number</p></td>
  	</tr>
  	<tr>
  	<td><p>customer number</p></td>
  	</tr>
  </table>
</div>
<div id="right-bottum" class="right-bottum" >
	<table id="table2">
		<form action="" method="POST">
		<tr>	
			<td>
				<label for="drugName">Drug name</label>
				<input type="text" list="allMedicine"  id="medicine" name= "medi_name">
					<datalist id="allMedicine" >
					    <?php 
							if($result1){
								while($rowName= mysqli_fetch_array($result1)){
									$name = $rowName["$medName"];
									echo "<option>$name</option>";

								}
							}
						
						?>  
					<!-- <option value="Acetaminophen">Acetaminophen</option>
					  <option value="duloxetine">duloxetine</option>
					  <option value="doxycycline">doxycycline</option> -->
					</datalist>
					
			</td>
			<td>
				<label for="brandName">Brand name</label>
				<input type="text" list="allBrand" id="brand" name="brand" >
					<datalist id="allBrand" >
					<?php 
							if($result2){
								
								while($rowName= mysqli_fetch_array($result2)){
									$brand = $rowName["$medBrand"];
									echo "<option>$brand</option>";

								}
							}
						
						?>  
					  <!-- <option value="Tylenol">Tylenol</option>
					  <option value="Cymbalta">Cymbalta</option>
					  <option value="Acticlate">Acticlate</option> -->
					</datalist>
			</td>	
		</tr>
		
		<tr>
			<td id="second_row">
				<label for="QTY" >QTY</label>
				<input type="number" id="QTY" name="QTY" max="20" min="1">
			</td>
			<td id="second_row">
				<label for="frequency" >Frequency</label>
				<input type="number" id="Frequency" name="Frequency" max="5" min="1">
			</td>
			<td id="second_row">
				<label for="dose" >Dose</label>
				<input type="number" id="dose" name="dose" max="3" min="1">
			</td>
			<td id="second_row"><button id="add" type="submit" name="add">ADD</button></td>
		</tr>
		</form>
		
		
	</table>
		<div class="order_medicine">		
			<table id="display" >
				<tr>
					<th>No.</th>
					<th>Drug name</th>
					<th>Brand</th>
					<th>Barcode</th>
					<th>QTY</th>
					<th>Dose</th>
					<th>Frequency</th>
					<th>Price</th>
				</tr>
				<?php 

					
					if(isset($_POST['add'])){
					
						$medName = $_POST['medi_name'];
			 			$sql = "SELECT * FROM `medicine` WHERE name='$medName' LIMIT 1 ";
						$result_set = mysqli_query($con,$sql);
						
						while($row= mysqli_fetch_array($result_set)) 
						{
							?>	
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td><?php echo $row[`medicineId`]; ?></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>		
						
					 	<?php 
						}
					}
						?>
		
		
		
		
			</table>
		</div>
		<div id="buttons">
			<button id="edit">Edit</button>
			<button id="remove">Remove</button>
			<input type="submit" name="submit" id="submit">
		</div>
</div>

<script type="text/javascript" src="display.js"></script>
</body>
</html>
<?php mysqli_close($con);?>