<?php
session_start(); 
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: /project/html/signup.php");
    exit();
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Milk Tea</title>
    <link rel="stylesheet" href="/project/css/category.css">
</head>
<header class="coffee.header">
    <center><h1>Milk Tea</h1></center>
    <ul>
        <li class="nav"><a href="index.php" class="link">HOME</a></li>
        <li class="nav"><a href="category.html" class="link">CATEGORY</a></li>
    </ul>
</header>

<body>
    <div class="Okinawa">
        <h3>Okinawa</h3>
        <h4>39 - 150 PHP</h4>
        <div class="order">
            <a href="order.php?item=Okinawa&price=150" class="order">
                <h5>Order</h5>
            </a>
        </div>
    </div>
    <div class="winter">
        <h3>Winter Melon</h3>
        <h4>39 - 150 PHP</h4>
        <div class="order">
            <a href="order.php?item=Winter%20Melon&price=150" class="order">
                <h5>Order</h5>
            </a>
        </div>
    </div>
    <div class="choco">
        <h3>Chocolate Milktea</h3>
        <h4>39 - 150 PHP</h4>
        <div class="order">
            <a href="order.php?item=Chocolate%20Milktea&price=150" class="order">
                <h5>Order</h5>
            </a>
        </div>
    </div>
    <div class="jasmine">
        <h3>Jasmine Milktea</h3>
        <h4>39 - 150 PHP</h4>
        <div class="order">
            <a href="order.php?item=Jasmine%20Milktea&price=150" class="order">
                <h5>Order</h5>
            </a>
        </div>
    </div>
</body>
</html>
