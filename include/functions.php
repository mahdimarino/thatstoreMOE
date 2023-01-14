<?php
//add Product

function addProduct($data)
{
    global $connect;
    $sql = "INSERT INTO `products`(`id`,`itemnumber`,`color`,`tal`,`stockroomname`) 
      VALUES (NULL,'{$data['itemnumber']}','{$data['color']}',{$data['tal']},{$data['stockroomname']})";
    $q = mysqli_query($connect, $sql);
}


//delet reservasion

function deletereservation($cid)
{
    global $connect;
    $sql = "DELETE FROM reservation_manager WHERE reservation_id = $cid";
    $q = mysqli_query($connect, $sql) or die("error");
    if ($q)   return 1;

    return 0;
}





//add Cat

function addCat($data)
{
    global $connect;
    $sql = "INSERT INTO `stockroom`(`id`,`stockroomname`) 
      VALUES (NULL,'{$data['catname']}')";
    $q = mysqli_query($connect, $sql);
    if ($q)   return 1;
    else return 0;
}





// edit product

// delete category
function deletecategory($cid)
{
    global $connect;
    $sql = "DELETE FROM stockroom WHERE id = $cid";
    $q = mysqli_query($connect, $sql) or die("error");
    if ($q)   return 1;

    return 0;
}








// delete product
function deleteProduct($cid)
{
    global $connect;
    $sql = "DELETE FROM products WHERE id = $cid";
    $q = mysqli_query($connect, $sql) or die("error");
    if ($q)   return 1;

    return 0;
}


//list product

function all()
{
    global $connect;
    $sql = "SELECT * FROM products";
    $q = mysqli_query($connect, $sql);
    $data = mysqli_fetch_all($q, MYSQLI_ASSOC);
    return $data;
}



//list Category

function allCat()
{
    global $connect;
    $sql = "SELECT * FROM stockroom";
    $q = mysqli_query($connect, $sql);
    $data = mysqli_fetch_all($q, MYSQLI_ASSOC);
    return $data;
}

//list Category






function productByCat($cid)
{
    global $connect;
    $sql = "SELECT * FROM products WHERE category=$cid";
    $q = mysqli_query($connect, $sql);
    $data = mysqli_fetch_all($q, MYSQLI_ASSOC);
    return $data;
}
