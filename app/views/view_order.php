<!DOCTYPE html>
<html>

<head>
    <title>Pharmacist</title>
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/public/css/header.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/public/css/select_order.css">
    <script type="text/javascript" src="<?php echo URLROOT ?>/public/js/jquery-3.5.1.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#add').click(function(e) {
            e.preventDefault();
            
        })
    });
    
    </script>
</head>

<body>

     <script>
        $(document).ready(function()
        {
          $("#request tr:even").css("background-color", "white");
          $("#accept tr:even").css("background-color", "white");
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

    <div class="requested">
        <h2>Requested Orders</h2>
        <table id="request">
            <tr>
                <th>Order number</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>date & time</th>
                <th>Image Path</th>
                <th></th>
            </tr>
             <?php foreach($data[0]['nonOrders'] as $nonOrders): ?>
                <tbody>
                <tr>
                        <td><?php echo $nonOrders->orderId; ?></td>
                        <td><?php echo $nonOrders->FirstName; ?></td>
                        <td><?php echo $nonOrders->LastName; ?></td>
                        <td><?php echo $nonOrders->DateTime; ?></td>
                        <td><?php echo $nonOrders->image_path; ?></td>

                        <td><form method="POST" action="<?php echo URLROOT; ?>/view_drug/show_medicine"> <input type="hidden" name="orderId" value="<?php echo $nonOrders->orderId; ?>"><button id="process" type="submit" name="process" >Process</button></form></td>
                        
                </tr>
                </tbody>
                <?php endforeach;?>
        </table>
    </div>

    <div class="accepted">
        <h2>Processing Orders</h2>
        <table id="accept">
            <tr>
                <th>Order number</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>date & time</th>
                <th>Total Price</th>
                <th></th>
            </tr>
            <?php foreach($data[1]['orders'] as $orders): ?>
                <tr>
                        <td><?php echo $orders->orderId; ?></td>
                        <td><?php echo $orders->FirstName; ?></td>
                        <td><?php echo $orders->LastName; ?></td>
                        <td><?php echo $orders->DateTime; ?></td>
                        <td><?php echo $orders->price; ?></td>
                        <td><form method="POST" action="<?php echo URLROOT; ?>/view_drug/show_orders"> <input type="hidden" name="orderId" value="<?php echo $orders->orderId; ?>"><button id="cancel" type="submit" name="cancel">Cancel</button><button id="done" type="submit" name="done">Done</button></form></td>

                        
                </tr>
                <?php endforeach;?>
        </table>
    </div>

</body>

</html>