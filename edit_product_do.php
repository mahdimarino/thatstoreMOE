<?php
include "./include/config.php";
include "./include/functions.php";


$itemnumber = (isset($_POST['itemnumber'])) ? $_POST['itemnumber'] : NULL;
$stockroomname = (isset($_POST['stockroomname'])) ? $_POST['stockroomname'] : NULL;
$tal = (isset($_POST['tal'])) ? $_POST['tal'] : NULL;

$id = (isset($_POST['id'])) ? $_POST['id'] : NULL;



$errors = array();


$stmt = $connect->prepare(
    "UPDATE products SET   stockroomname=?, tal =? WHERE itemnumber=?"
);
$stmt->bind_param("sss", $stockroomname, $tal, $itemnumber);

$stmt->execute();

header("Location:index.php?page=product_list");
