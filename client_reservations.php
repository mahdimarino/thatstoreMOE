<div>
    <table class="table table-striped">

        <thead>
            <tr style="height: 50px !important;">
                <th scope="col">Barcode</th>
                <th scope="col">Item nomber</th>
                <th scope="col">color</th>


            </tr>
        </thead>
        <?php
        $reservation_id = isset($_GET['s']) ? $_GET['s'] : NULL;
        $query = "SELECT * FROM client_reservastion WHERE reservation_id = '$reservation_id'";
        $q = mysqli_query($connect, $query);
        $data = mysqli_fetch_all($q, MYSQLI_ASSOC);



        foreach ($data as  $value) {
        ?>
            <tbody>
                <tr>

                    <td><?= $value['barcode'] ?></td>

                    <td><?= $value['itemnumber'] ?></td>
                    <td><?= $value['color'] ?></td>
                </tr>

            </tbody>
        <?php
        }
        ?>
    </table>
</div>