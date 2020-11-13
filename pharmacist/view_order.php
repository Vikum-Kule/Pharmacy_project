<!DOCTYPE html>
<html>

<head>
    <title>Pharmacist</title>
    <link rel="stylesheet" type="text/css" href="header.css">
    <link rel="stylesheet" type="text/css" href="select_order.css">
</head>

<body>
    <div class="header">
        <img src="images\logo.JPG" width="100" height="50">
        <a href="#default" class="logo">Online Pharmacy <br> Management System</a>
        <div class="header-right">
            <a href="make_order.php">Make order</a>
            <a href="#">View order</a>
            <a href="my_account.php">My Account</a>
            <button>Log out</button>
        </div>

    </div>

    <div class="requested">
        <h2>Requested Orders</h2>
        <table id="request">
            <tr>
                <th>Order number</th>
                <th>name</th>
                <th>date & time</th>
            </tr>
        </table>
    </div>

    <div class="accepted">
        <h2>Accepted Orders</h2>
        <table id="accept">
            <tr>
                <th>Order number</th>
                <th>name</th>
                <th>date & time</th>
            </tr>
        </table>
    </div>

</body>

</html>