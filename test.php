<?php
session_start();

// Check if the cart is empty
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

// Add item to cart
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add-to-cart'])) {
    $item = array(
        'id' => $_POST['id'],
        'name' => $_POST['name'],
        'price' => $_POST['price'],
        'quantity' => $_POST['quantity']
    );

    // Check if the item is already in the cart
    $existingItem = array_search($item['id'], array_column($_SESSION['cart'], 'id'));

    if ($existingItem !== false) {
        // Item already exists, update the quantity
        $_SESSION['cart'][$existingItem]['quantity'] += $item['quantity'];
    } else {
        // Item doesn't exist, add it to the cart
        $_SESSION['cart'][] = $item;
    }

    // Send JSON response
    header('Content-Type: application/json');
    echo json_encode(['status' => 'success']);
    exit;
}

// Modify item quantity
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['modifyquantity'])) {
    $itemId = $_POST['itemid'];
    $newQuantity = $_POST['newqty'];

    // Validate the new quantity
    if ($newQuantity > 0) {
        foreach ($_SESSION['cart'] as &$item) {
            if ($item['id'] === $itemId) {
                $item['quantity'] = $newQuantity;
                break;
            }
        }

        // Send JSON response
        header('Content-Type: application/json');
        echo json_encode(['status' => 'success']);
        exit;
    } else {
        header('Content-Type: application/json');
        echo json_encode(['status' => 'error', 'message' => 'Invalid quantity']);
        exit;
    }
}

// Remove item from cart
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['remove-from-cart'])) {
    $itemId = $_POST['item-id'];

    foreach ($_SESSION['cart'] as $key => $item) {
        if ($item['id'] === $itemId) {
            unset($_SESSION['cart'][$key]);
            break;
        }
    }

    // Send JSON response
    header('Content-Type: application/json');
    echo json_encode(['status' => 'success']);
    exit;
}
