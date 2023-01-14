<?php
session_start();
if (!isset($_SESSION['reserved'])) {
    $_SESSION['reserved'] = array();
}
var_dump($_SESSION['reserved']);


$product_id = isset($_POST['id']) ? $_POST['id'] : NULL;
$itemnumber = isset($_POST['itemnumber']) ? $_POST['itemnumber'] : NULL;
$barcode = isset($_POST['barcode']) ? $_POST['barcode'] : NULL;
$color = isset($_POST['color']) ? $_POST['color'] : NULL;
$stockroomname = isset($_POST['stockroomname']) ? $_POST['stockroomname'] : NULL;
$tal = isset($_POST['tal']) ? $_POST['tal'] : NULL;


if ($product_id && $tal) {
    $add_new = true;

    foreach ($_SESSION['reserved'] as $cart_item) {
        if ($cart_item[0] == $product_id) {
            $add_new = false;
            $index = array_search(array($cart_item[0], $cart_item[1], $cart_item[2], $cart_item[3], $cart_item[4], $cart_item[5]), $_SESSION['reserved']);
            $_SESSION['reserved'][$index] = array($product_id, $cart_item[1] + $itemnumber, $barcode, $color, $stockroomname, $tal);
            break;
        }
    }

    if ($add_new) {
        $cart_item = array($product_id,  $itemnumber, $barcode, $color, $stockroomname, $tal);
        array_push($_SESSION['reserved'], $cart_item);
    }
}

header('Location: ../admin/index.php?page=product_list');
