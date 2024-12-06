<?php
session_start(); 

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: /project/html/signup.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CafeDeCart</title>
    <link rel="stylesheet" href="/project/css/index.css">
</head>
<body>
    <header>
        <nav class="navbar section-content">
            <a href="#" class="nav-logo">
                <h2 class="logo-text">CafeDeCart</h2>
            </a>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="#" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="about.php" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="login.php" class="nav-link">Log-in</a>
                </li>
                <li class="nav-item">
                    <a href="signup.php" class="nav-link">Sign up</a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero-section">
            <div class="section-content">
                <div class="hero-details">
                    <h2 class="title">CAFE DE CART</h2>
                    <h3 class="subtitle">
                    Crafting Moments, One Sip at a Time
                    </h3>
                    <p class="description">Welcome to CAFE DE CART, your cozy destination for great coffee,<br> delicious treats, and a warm atmosphere. </p>
                    <div class="buttons">
                        <a href="category.php" class="button shop">SHOP</a>
                        <a href="logout.php" class="button logout">LOG OUT</a>
                    </div>
                </div>
            </div>
        </section>
    </main>


  <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
    <form action="/project/html/logout.php" method="post">
        <input type="submit" name="logout" value="Log out">
    </form>
  <?php endif; ?>
  </body>
  </html>