<?php

$cid = isset($_GET['q']) ? $_GET['q'] : NULL;
$sql = "SELECT * FROM products WHERE id= $cid limit 1";
$q = mysqli_query($connect, $sql) or die("error");

$num = mysqli_num_rows($q);

if ($num == 1) {
    $data = mysqli_fetch_array($q, MYSQLI_ASSOC);
}

$categories = allCat();
?>

<form method="post" action="add_to_display_do.php" enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleFormControlInput1">itemnumber</label>
        <input type="text" name="itemnumber" class="form-control" value="<?= $data['itemnumber'] ?>" readonly>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Display it</label>
        <input type="text" name="stockroomname" class="form-control" value="display" readonly>
    </div>

    <input type="hidden" name="id" value="<?= $data['id'] ?>">
    <button type="submit" class="btn btn-primary">Add to Display</button>
</form>