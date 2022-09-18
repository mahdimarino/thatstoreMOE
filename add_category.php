<?php
if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $stockroomname = (isset($_POST['stockroomname'])) ? $_POST['stockroomname'] : NULL;
    $errors = array();
    $sql = "INSERT INTO stockroom(stockroomname) VALUES('$stockroomname')";
    $q = mysqli_query($connect, $sql);
}



?>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="stockroomname">Nom</label>
        <input type="text" id="stockroomname" name="stockroomname" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Add Category</button>
</form>