<?php
include "./include/config.php";
include "./include/functions.php";



$stockroomname = (isset($_POST['stockroomname'])) ? $_POST['stockroomname'] : NULL;
$tal = (isset($_POST['tal'])) ? $_POST['tal'] : NULL;
$itemnumber = (isset($_POST['itemnumber'])) ? $_POST['itemnumber'] : NULL;
$id = (isset($_POST['id'])) ? $_POST['id'] : NULL;



$errors = array();


$sql = "UPDATE products SET itemnumber='$itemnumber'  , stockroomname='$stockroomname' , tal= '$tal ' * WHERE itemnumber = $itemnumber";


$q = mysqli_query($connect, $sql);
header("Location:index.php?page=product_list");
