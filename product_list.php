<?php

$data = all();
?>

<div>
    <table class="table table-striped table-sm">

        <thead>
            <tr>
                <th><input onkeyup="filterTable()" placeholder="Sport..."></th>
                <th><input onkeyup="filterTable()" placeholder="Team..."></th>
                <th><input onkeyup="filterTable()" placeholder="Sport..."></th>
                <th><input onkeyup="filterTable()" placeholder="Team..."></th>
                <th><input onkeyup="filterTable()" placeholder="Sport..."></th>

            </tr>
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
                    <td class="btn-group">
                        <a href="index.php?page=edit_product&q=<?= $value['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                        <a alt="delet" class="btn btn-danger btn-sm ml-2" href="delete_product.php?d=<?= $value['id'] ?>"> Delete</a>
                    </td>
                </tr>

            <?php endforeach; ?>


        </tbody>
    </table>


</div>