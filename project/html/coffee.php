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
    <title>Coffee Menu</title>
    <link rel="stylesheet" href="/project/css/category.css">
</head>
<Header class="coffee.header">
    <center><h1>Coffee</h1></center>
    <ul>
        <li class="nav"><a href="index.php" class="link">HOME</a></li>
        <li class="nav"><a href="category.php" class="link">CATEGORY</a></li>
    </ul>
</Header>
<body>
    <div class="blackcoffee">
        <h3>Black Coffee</h3>
        <h4>39 - 150 PHP</h4>
        <div class="order">
            <a href="order.php?item=Black%20Coffee&price=150" class="order">
                <h5 style="font-size: 15px;"> <center>Order</center></h5>
            </a>
        </div>
    </div>
    <div class="latte">
        <h3>Latte</h3>
        <h4>39 - 150 PHP</h4>
        <div class="order">
            <a href="order.php?item=Latte&price=150" class="order">
                <h5>Order</h5>
            </a>
        </div>
    </div>
    <div class="Cappuccino">
        <h3>Cappuccino</h3>
        <h4>39 - 150 PHP</h4>
        <div class="order">
            <a href="order.php?item=Cappuccino&price=150" class="order">
                <h5>Order</h5>
            </a>
        </div>
    </div>
    <div class="Americano">
        <h3>Americano</h3>
        <h4>39 - 150 PHP</h4>
        <div class="order">
            <a href="order.php?item=Americano&price=150" class="order">
                <h5>Order</h5>
            </a>
        </div>
    </div>
</body>
</html>
