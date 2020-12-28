<!DOCTYPE html>
<html>
<head>
	<title>Pharmacist</title>
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/public/css/header.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/public/css/confirmed_order.css">
    <script type="text/javascript" src="<?php echo URLROOT ?>/public/js/jquery-3.5.1.min.js"></script>        

</head>
<body>
    <script>
        $(document).ready(function()
        {
          $("tr:even").css("background-color", "white");
        });
    </script>
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

     <div class="confirmed">
        <h2>Confirmed Orders</h2>
        <table id="confirmed_orders">
            <tr>
                <th>Order number</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>date & time</th>
                <th>Total Price</th>
            </tr>
             <?php foreach($data['orders'] as $orders): ?>
                <tbody>
                <tr>
                        <td><?php echo $orders->orderId; ?></td>
                        <td><?php echo $orders->FirstName; ?></td>
                        <td><?php echo $orders->LastName; ?></td>
                        <td><?php echo $orders->DateTime; ?></td>
                        <td><?php echo $orders->price; ?></td>
                        
                </tr>
                </tbody>
                <?php endforeach;?>
        </table>
    </div>

</body>
</html>