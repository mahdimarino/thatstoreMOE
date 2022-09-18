<?php
include "./include/config.php";
include "./include/functions.php";

$stockroomname = (isset($_POST['stockroomname'])) ? $_POST['stockroomname'] : NULL;
$cid = (isset($_POST['id'])) ? $_POST['id'] : NULL;



$errors = array();


$sql = "UPDATE stockroom SET stockroomname='$stockroomname'    WHERE id = $cid";


$q = mysqli_query($connect, $sql);
header("Location:index.php?page=category_list");
