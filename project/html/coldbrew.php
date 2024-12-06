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
    <title>Cold Brew</title>
    <link rel="stylesheet" href="/project/css/category.css">
</head>
<header>
    <h1><center>Cold Brew</center></h1>
    <ul>
        <li class="nav"><a href="index.php" class="link">HOME</a></li>
        <li class="nav"><a href="category.php" class="link">CATEGORY</a></li>
    </ul>
</header>

<body>
    <div class="caramel">
        <h3>Caramel Macchiato</h3>
        <h4>39 - 150 PHP</h4>
        <div class="order">
            <a href="order.php?item=Caramel%20Macchiato&price=150" class="order">
                <h5>Order</h5>
            </a>
        </div>
    </div>
    <div class="milk">
        <h3>Milky Choco</h3>
        <h4>39 - 150 PHP</h4>
        <div class="order">
            <a href="order.php?item=Milky%20Choco&price=150" class="order">
                <h5>Order</h5>
            </a>
        </div>
    </div>
    <div class="spanish">
        <h3>Spanish Latte</h3>
        <h4>39 - 150 PHP</h4>
        <div class="order">
            <a href="order.php?item=Spanish%20Latte&price=150" class="order">
                <h5>Order</h5>
            </a>
        </div>
    </div>
    <div class="classic">
        <h3>Classic Cold Brew</h3>
        <h4>39 - 150 PHP</h4>
        <div class="order">
            <a href="order.php?item=Classic%20Cold%20Brew&price=150" class="order">
                <h5>Order</h5>
            </a>
        </div>
    </div>
</body>
</html>
