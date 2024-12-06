<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: /project/html/signup.php");
    exit();
}

// Database connection
$host = 'localhost';
$db = 'cafe_db';
$user = 'root';
$password = '';
$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$item = isset($_GET['item']) ? $_GET['item'] : '';
$price = isset($_GET['price']) ? $_GET['price'] : '';
$username = isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $credit_card = $_POST['credit_card'];
    $stmt = $conn->prepare("INSERT INTO orders (username, item, price, address, phone, credit_card) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $username, $item, $price, $address, $phone, $credit_card);

    if ($stmt->execute()) {
        $order_id = $stmt->insert_id;
        header("Location: checkout.php?order_id=" . $order_id);
        exit();
    } else {
        echo "<h3>Error placing order: " . $stmt->error . "</h3>";
    }
    $stmt->close();
}
$conn->close();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link rel="stylesheet" href="/project/css/category.css">
</head>
<Header class="coffee.header">
    <center><h1>Order Details</h1></center>
    <ul>
        <li class="nav"><a href="index.php" class="link">HOME</a></li>
        <li class="nav"><a href="category.php" class="link">CATEGORY</a></li>
    </ul>
</Header>
<body>
    <div class="order-details">
        <h3>Item: <?php echo htmlspecialchars($item); ?></h3>
        <h4>Price: <?php echo htmlspecialchars($price); ?> PHP</h4>

        <!-- Order Form -->
        <form action="order.php?item=<?php echo htmlspecialchars($item); ?>&price=<?php echo htmlspecialchars($price); ?>" method="POST">
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="text" id="phone" name="phone" required>
            </div>

            <div class="form-group">
                <label for="credit_card">Credit Card Number:</label>
                <input type="text" id="credit_card" name="credit_card" required>
            </div>

            <button type="submit" name="checkout_button">Go To Checkout</button>
        </form>
    </div>
</body>
</html>
