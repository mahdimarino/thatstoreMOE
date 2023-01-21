<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">Reservation id</th>
            <th scope="col">Reserve by</th>
            <th scope="col">phone no</th>
            <th scope="col">client name</th>
            <th scope="col">reservation time</th>

            <th scope="col">orders</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = "SELECT * FROM `reservation_manager`";
        $user_result = mysqli_query($connect, $query);
        while ($user_fetch = mysqli_fetch_assoc($user_result)) {
            echo "
                           <tr>
                            
                           <td>$user_fetch[reservation_id]</td>
                           <td>$user_fetch[full_name]</td>
                           <td>$user_fetch[phone_no]</td>
                           <td>$user_fetch[clinte_name]</td>
                           <td>$user_fetch[date]</td>
                           
                           <td>
                           <a href='index.php?page=client_reservations&s= $user_fetch[reservation_id]' class='btn btn-primary'>View orders</a>
                           </td>
                           <td>
                           <a href='delete_reservation.php?d= $user_fetch[reservation_id] ' class='btn btn-danger'>Delete</a>
                       </td>
                       </tr>
                        ";
        }
        ?>

    </tbody>
</table>