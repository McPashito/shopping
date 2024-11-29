<?php

include 'config.php';


$stmt = $pdo->query("SELECT * FROM products");
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
        <h1>Our Products</h1>
        <div class="product-list">
            <?php foreach ($products as $product): ?>
                <div class="product">
                    
                    <img src="images/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                    
                    
                    <h2><?php echo $product['name']; ?></h2>
                    
                    
                    <p><?php echo $product['description']; ?></p>
                    
                    
                    <p>€<?php echo number_format($product['price'], 2, ',', '.'); ?></p>
                    
                    
                    <button onclick="addToCart(<?php echo $product['id']; ?>)">Add to Cart</button>
                </div>
            <?php endforeach; ?>
        </div>
    </main>

    <script src="js/scripts.js"></script> 
</body>
</html>
