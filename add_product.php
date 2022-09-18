<?php
if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $itemnumber = (isset($_POST['itemnumber'])) ? $_POST['itemnumber'] : NULL;
    $tal = (isset($_POST['tal'])) ? $_POST['tal'] : NULL;
    $stockroomname = (isset($_POST['stockroomname'])) ? $_POST['stockroomname'] : NULL;

    $errors = array();
    $sql = "INSERT INTO products(itemnumber, tal, stockroomname)
VALUES('$itemnumber', '$tal', '$stockroomname')";
    $q = mysqli_query($connect, $sql);
}


$categories = allCat();

//  $alltaise = alltaise();

?>

<form method="post" action="" enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleFormControlInput1">itemnumber</label>
        <input type="text" name="itemnumber" class="form-control" placeholder="itemnumber" required>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">stockroomname</label>
        <select class="form-control" id="exampleFormControlSelect1" name="stockroomname" required>

            <option value="" selected> Select Your stockroom</option>
            <?php
            foreach ($categories as $c) {  ?>
                <option value="<?php echo $c["stockroomname"]; ?>"><?php echo $c["stockroomname"]; ?></option>
            <?php
            }
            ?>
        </select>
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">shelve</label>
        <input type="text" name="tal" class="form-control" placeholder="tal" required>
    </div>

    <button type="submit" class="btn btn-primary">Add Product</button>
</form>