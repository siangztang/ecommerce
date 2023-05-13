<?php

session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add-to-cart'])) {
    // echo 'aa';
    $item = array(
        'id' => $_POST['id'],
        'name' => $_POST['name'],
        'price' => $_POST['price'],
        'quantity' => $_POST['quantity'],
    );

    $exisingItem = array_search($item['id'], array_column($_SESSION['cart'], 'id'));

    if ($exisingItem !== false) {
        $_SESSION['cart'][$exisingItem]['quantity'] += $item['quantity'];
    } else {
        $_SESSION['cart'][] = $item;
    }
    header('Location: shopping_cart.php');
}
// $string = json_encode($_SESSION);
// echo $string;
// echo implode(" ", $_SESSION['cart']);
