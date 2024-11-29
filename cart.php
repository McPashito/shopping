<?php
session_start();
$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];

function formatPrice($price) {
    return '€' . number_format($price, 2, ',', '.');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <main>
        <h1>Your Cart</h1>
        <div class="cart-items">
            <?php if (empty($cart)): ?>
                <p>Your cart is empty.</p>
            <?php else: ?>
                <?php foreach ($cart as $productId => $quantity): ?>
                    <p>Product ID: <?php echo $productId; ?> | Quantity: <?php echo $quantity; ?></p>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <a href="checkout.php">Proceed to Checkout</a>
    </main>

    <script src="js/scripts.js"></script>
</body>
</html>
