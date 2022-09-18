<?php
$stockroomname = isset($_GET['s']) ? $_GET['s'] : NULL;
$sql = "SELECT * FROM products WHERE stockroomname = '$stockroomname'";
$q = mysqli_query($connect, $sql);
$data = mysqli_fetch_all($q, MYSQLI_ASSOC);
?>

<div class="table-responsive">
    <table id="myTable" class="table table-darktable-borderless table-hover">

        <thead class="thead-dark">
            <tr>
                <th scope="col">itemnumber</th>
                <th scope="col">barcode</th>
                <th scope="col">color</th>
                <th scope="col">stockroom</th>
                <th scope="col">shelve</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($data as  $value) :
            ?>
                <tr>
                    <td><?= $value['itemnumber'] ?></td>
                    <td><?= $value['barcode'] ?></td>
                    <td><?= $value['color'] ?></td>
                    <td><?= $value['stockroomname'] ?></td>
                    <td><?= $value['tal'] ?></td>
                    <td>
                        <a href="index.php?page=edit_product&q=<?= $value['id'] ?>" class="btn btn-primary">Edit</a>
                        <a alt="delet" style="color: red; margin-left: 2rem;" href="delete_product.php?d=<?= $value['id'] ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>


</div>