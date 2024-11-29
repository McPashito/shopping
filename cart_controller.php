<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'];
    $productId = $_POST['product_id'];

    if ($action === 'add') {
        if (!isset($_SESSION['cart'][$productId])) {
            $_SESSION['cart'][$productId] = 0;
        }
        $_SESSION['cart'][$productId]++;
    }

    echo json_encode(['cart' => $_SESSION['cart']]);
}
?>
