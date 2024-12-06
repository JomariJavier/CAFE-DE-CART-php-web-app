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
    <link rel="stylesheet" href="/project/css/category.css">
</head>

<header>
    <h1>
        <center>
            Category
        </center>
    </h1>
<ul>
    <li class="nav"><a href="index.php" class="link">HOME</a></li>
 </ul>
</header>
<body>
   <<a href="coffee.php" class="order">
    <div class="coffee">
        <h1 class="prod">Coffee</h1>
    </div>
</a>

    <a href="coldbrew.php" class="order">
    <div class="coldbrew" > 
        <h1 class="prod">Cold Brew</h1>
    </div>
</a>

    <a href="milktea.php" class="order">
    <div class="milktea">
        
        <h1 class="prod">Milk Tea</h1>
    </div>
</a> 

</body>
</html>