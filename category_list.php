<?php
$data = allCat();
?>
<div class="table-responsive">
    <table id="myTable" class="table table-darktable-borderless table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($data as  $value) :
            ?>
                <tr>
                    <td><?= $value['stockroomname'] ?></td>
                    <td>
                        <a href="index.php?page=edit_category&q=<?= $value['id'] ?>" class="btn btn-primary">Edit</a>
                        <a href="delete_cat.php?d=<?= $value['id'] ?>" class="btn btn-danger">Delete</a>
                        <a href="index.php?page=list_product_by_cat&s=<?= $value['stockroomname'] ?>" class="btn btn-primary">View Products</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>