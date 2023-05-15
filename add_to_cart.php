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


if(isset($_GET['delete-item'])){
    $product = $_GET['delete-item'];
    foreach($_SESSION['cart'] as $key => $item ){
        if($item['id'] == $product){
            unset($_SESSION['cart'][$key]);
            break;
        }
    }

   header('Location: shopping_cart.php');
}


if(isset($_GET['delete-all-item'])){
    unset($_SESSION['cart']);
    header('Location: shopping_cart.php');
}


if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['newQty'])){
    $productID = $_POST['id'];
    $quantity = $_POST['newQty'];
    if(is_numeric($quantity) && $quantity >=1){
        foreach($_SESSION['cart'] as $key => $value){
            if($value['id'] == $productID){
                $_SESSION['cart'][$key]['quantity'] = $quantity;
            }
        }
    }
    $string = json_encode($_SESSION);
    echo $string;
}
?>