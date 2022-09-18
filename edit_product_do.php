<?php
include "./include/config.php";
include "./include/functions.php";

$itemnumber = (isset($_POST['itemnumber'])) ? $_POST['itemnumber'] : NULL;

$stockroomname = (isset($_POST['stockroomname'])) ? $_POST['stockroomname'] : NULL;
$tal = (isset($_POST['tal'])) ? $_POST['tal'] : NULL;
$cid = (isset($_POST['id'])) ? $_POST['id'] : NULL;



$errors = array();


$sql = "UPDATE products SET itemnumber='$itemnumber'  , stockroomname='$stockroomname' , tal= '$tal '  WHERE id = $cid";


$q = mysqli_query($connect, $sql);
header("Location:index.php?page=product_list");
