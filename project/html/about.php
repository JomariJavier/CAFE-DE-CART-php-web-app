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
    <title>Document</title>
    <link rel="stylesheet" href="/project/css/index.css">
</head>
<header>
    <center>
        <h1>ABOUT</h1>
    </center>
<ul>
    <li class="nav"><a href="index.php" class="link">HOME</a></li>
 </ul>
<body>
</header>
<center>
    <div class="about">
        <h1>TAGLINE:</h1>
        <h3>Crafting Moments, One Sip at a Time</h3>
        <p>Crafting Moments, One Sip at a Time" is designed to convey the idea that Cafe De Cart is not just a place to grab a quick cup of coffee;<br> it's a destination where customers can take a moment to savor their beverages and create meaningful memories.</p>
    </div>
    <div class="devs">
        <h1>Website Devs</h1>
        <ul class="devs">
            <li class="devs">Amir Ckendrick Pascual</li>
            <li class="devs">Jomari Javier</li>
            <li class="devs">John Paul Gutierrez</li>
        </ul>
    </div>
</center>
</body>
</html>