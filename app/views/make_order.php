<!DOCTYPE html>
<html>
<head>
	<title>Pharmacist</title>
	<script type="text/javascript" src="<?php echo URLROOT ?>/public/js/jquery-3.5.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/public/css/header.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/public/css/make_order.css">
	
	<script>
    $(document).ready(function() {
        $('#add').click(function(e) {
			e.preventDefault();
			// var medName = $('#name').val();
			// //document.write(medName);
			
			// $.ajax({
			// 	method: "POST",
			// 	url: "<?php echo URLROOT; ?>/view_drug/show_medicine",
			// 	data: $('#display').serialize(),
			// 	dataType:"html",


			// })
			
        })
    });
    
    </script>
	

</head>
<body>
	 <script>
        $(document).ready(function()
        {
          $("#display tr:even").css("background-color", "white");
        });
    </script>
	<!-- <?php print_r($data); ?> -->
	<div class="header">
	<img src="<?php echo URLROOT ?>/public/img/logo.JPG" width="100" height="50">
		<a href="#default" class="logo">Online Pharmacy <br> Management System</a>
		<div class="header-right">
			<form action="<?php echo URLROOT ?>/users/btn_logout" method="POST">
			<a href="http://localhost/mvc/view_drug/show_medicine">Make order</a>
			<a href="http://localhost/mvc/view_drug/show_orders">View order</a>
			<a href="http://localhost/mvc/view_drug/show_confirm_orders">Confirmed Orders</a>
			<a href="http://localhost/mvc/pages/my_account.php">My Account</a>
			
			<button type="submit" id="logout" name="logout">Log out</button>
			</form>
		</div>

	</div>

<div id="leftSide" class="leftside">
  <table id="table1" >
  <?php foreach ($data[1]['orderData'] as $orderData):?> 
  	<tr>
  		<td>Prescription</td>
  	</tr>
  	<tr>
  		<td><img src="<?php echo URLROOT ?>/public/img/prescription.png" width="100%" height="200"></td>
  	</tr>
  	<tr>
  		<td><textarea id="list" cols="35" rows="15">Orderd medicine list(non prescription)</textarea></td>
  	</tr>
   	<tr>
  		<td><p>NAME: <?php echo $orderData->FirstName." ".$orderData->LastName ?></p></td>
  	</tr>
  	<tr>
  		<td><p>CUSTOMER ID: <?php echo $orderData->customerId ?></p></td>
  	</tr>
  	<tr>
  	<td><p>TEL: <?php echo $orderData->PhoneNum ?></p></td>
	</tr>
	<?php endforeach ?>  
  </table>
</div>
<div id="right-up1">
	<h4>NOTICES</h4>
	<textarea name="notes" rows="5" cols="130">
	</textarea>
	<button id="submit">Send</button>
</div>
<div id="right-up">
	<a href="#" class="previous">&laquo; Previous</a>
	<a href="#" class="next">Next &raquo;</a>
  
</div>
<div id="right-bottum" class="right-bottum" >
	<form method="post" action="" id="med_data">
	<table id="table2">
		<tr>	
			<td>
				<label for="drugName">Drug name</label>
				<input type="text" list="allMedicine"  id="medicine" name= "medi_name">
					<datalist id="allMedicine" >
					    <?php foreach ($data[0]['medicine'] as $medicine){
					    	echo "<option>$medicine->name</option>";
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
						<?php foreach ($data[0]['medicine'] as $medicine){
					    	echo "<option value = $medicine->brand >$medicine->brand</option>";
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
				<label for="frequency" >Frequency(per day)</label>
				<input type="number" id="Frequency" name="Frequency" max="5" min="1">
			</td>
			<td id="second_row">
				<label for="dose" >Dose</label>
				<!-- <input type="text" list="alldose" id="dose" name="dose" > -->
					<!-- <datalist id="alldose" >
						<?php foreach ($data['drugs'] as $drug){

					    	echo "<option>$drug->brand</option>";
					    }
					    ?>
					</datalist> -->

				<input type="number" id="dose" name="dose" max="3" min="1">
			</td>
			<td id="second_row"><button id="add" type="submit" name="add">ADD</button></td>
		</tr>
	</table>
	</form>
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
				
				<!-- <?php foreach($data2['medData'] as $medData): ?>
				<tr>
						<td></td>
						<td></td>
						<td></td>
						<td><?php echo $medData->medicineId; ?></td>
						<td></td>
						<td></td>
						<td></td>
						<td><?php echo $medData->price; ?></td>
				</tr>
				<?php endforeach;?> -->
			</table>
		</div>
		<div id="buttons">
			<label>Total Price</label>
			<input type="text" name="total">
			<button id="edit">Edit</button>
			<button id="remove">Remove</button>
			<input type="submit" name="submit" id="submit">
		</div>
</div>

<script type="text/javascript" src="<?php echo URLROOT ?>/public/js/display.js"></script>
</body>
</html>
