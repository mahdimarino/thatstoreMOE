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
<form method="post" action="edit_product_do.php" enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleFormControlInput1">itemnumber</label>
        <input type="text" name="itemnumber" class="form-control" value="<?= $data['itemnumber'] ?>">
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">stockroom</label>
        <select class="form-control" id="exampleFormControlSelect1" name="stockroomname">

            <option value="<?= $data['stockroomname'] ?>" selected> <?= $data['stockroomname'] ?></option>
            <?php
            foreach ($categories as $c) {  ?>
                <option value="<?php echo $c["stockroomname"]; ?>"><?php echo $c["stockroomname"]; ?></option>
            <?php
            }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">shelev</label>
        <input type="text" name="tal" class="form-control" placeholder="shelve">
    </div>
    <input type="hidden" name="id" value="<?= $data['id'] ?>">
    <button type="submit" class="btn btn-primary">Update</button>
</form>