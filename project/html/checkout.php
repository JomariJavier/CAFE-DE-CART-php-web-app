<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: /project/html/signup.php");
    exit();
}
$host = 'localhost';
$db = 'cafe_db';
$user = 'root';
$password = '';
$conn = new mysqli($host, $user, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$username = $_SESSION['username'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['update'])) {
        $order_id = $_POST['order_id'];  
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $credit_card = $_POST['credit_card'];

        $stmt = $conn->prepare("UPDATE orders SET address = ?, phone = ?, credit_card = ? WHERE order_id = ?");
        $stmt->bind_param("ssss", $address, $phone, $credit_card, $order_id);

        if ($stmt->execute()) {
            echo "<h3>Order updated successfully!</h3>";
        } else {
            echo "<h3>Error updating order: " . $stmt->error . "</h3>";
        }
        $stmt->close();
    } 
    elseif (isset($_POST['delete'])) {
        $order_id = $_POST['order_id']; 

        $stmt = $conn->prepare("DELETE FROM orders WHERE order_id = ?");
        $stmt->bind_param("s", $order_id);

        if ($stmt->execute()) {
            echo "<h3>Order deleted successfully!</h3>";
        } else {
            echo "<h3>Error deleting order: " . $stmt->error . "</h3>";
        }
        $stmt->close();
    }
}
$stmt = $conn->prepare("SELECT order_id, item, price, address, phone, credit_card FROM orders WHERE username = ? ORDER BY order_id DESC LIMIT 1");
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->bind_result($order_id, $item, $price, $current_address, $current_phone, $current_credit_card);
$stmt->fetch();
$stmt->close();
$conn->close();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="/project/css/category.css">
</head>
<Header class="coffee.header">
    <center><h1>Checkout Details</h1></center>
    <ul>
        <li class="nav"><a href="index.php" class="link">HOME</a></li>
        <li class="nav"><a href="category.php" class="link">CATEGORY</a></li>
    </ul>
</Header>
<body>
    <div class="checkout-details">
        <h3>Order Summary for <?php echo htmlspecialchars($username); ?></h3>
        <?php if ($item): ?>
            <p><strong>Item:</strong> <?php echo htmlspecialchars($item); ?></p>
            <p><strong>Price:</strong> <?php echo htmlspecialchars($price); ?> PHP</p>
        <?php else: ?>
            <p>No order found.</p>
        <?php endif; ?>
        <form action="checkout.php" method="POST">
            <input type="hidden" name="order_id" value="<?php echo htmlspecialchars($order_id); ?>" />

            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" value="<?php echo htmlspecialchars($current_address); ?>" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="text" id="phone" name="phone" value="<?php echo htmlspecialchars($current_phone); ?>" required>
            </div>
            <div class="form-group">
                <label for="credit_card">Credit Card Number:</label>
                <input type="text" id="credit_card" name="credit_card" value="<?php echo htmlspecialchars($current_credit_card); ?>" required>
        </div>
            <button type="submit" name="update">Update Order</button>
            <button type="submit" name="delete">Delete Order</button>
        </form>
    </div>
</body>
</html>
