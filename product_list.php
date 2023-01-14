<?php

$data = all();
?>

<div>
    <table id="tabla" class="table table-striped table-sm">

        <thead>
            <tr>
                <th><input onkeyup="filterTable()" placeholder="Item number"></th>
                <th><input onkeyup="filterTable()" placeholder="barcode"></th>
                <th><input onkeyup="filterTable()" placeholder="Color"></th>
                <th><input onkeyup="filterTable()" placeholder="Stockroom"></th>
                <th><input onkeyup="filterTable()" placeholder="Shelve"></th>

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
                <form action="add-to-reserv.php" method="post">
                    <tr style="height: 30px !important;">
                        <td><?= $value['itemnumber'] ?></td>
                        <td><?= $value['barcode'] ?></td>
                        <td><?= $value['color'] ?></td>
                        <td><?= $value['stockroomname'] ?></td>
                        <td><?= $value['tal'] ?></td>
                        <td class="btn-group">
                            <input type="hidden" name="id" value="<?= $value['id']; ?> ">
                            <input type="hidden" name="itemnumber" value="<?= $value['itemnumber']; ?> ">
                            <input type="hidden" name="barcode" value="<?= $value['barcode']; ?> ">
                            <input type="hidden" name="color" value="<?= $value['color']; ?> ">
                            <input type="hidden" name="stockroomname" value="<?= $value['stockroomname']; ?> ">
                            <input type="hidden" name="tal" value="<?= $value['tal']; ?> ">
                            <button type="submit" class="btn btn-dark btn-sm add-to-cart"><span>reserv</span></button>
                            <a href="index.php?page=edit_product&q=<?= $value['id'] ?>" class="btn ml-2 btn-primary btn-sm">Edit</a>
                            <a alt="delet" class="btn btn-danger btn-sm ml-2" href="delete_product.php?d=<?= $value['id'] ?>"> Delete</a>
                        </td>
                    </tr>
                </form>

            <?php endforeach; ?>


        </tbody>
    </table>


</div>