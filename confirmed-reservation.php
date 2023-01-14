<?php

session_start();
$con = mysqli_connect("localhost", "root", "", "products");

if (mysqli_connect_error()) {
    echo " <script>
    alert('cannot connect to database');
    window.location.href='mycart.php';
    </script> ";
}



if (isset($_SESSION['reserved'])) {
    $cart = $_SESSION['reserved'];

    foreach ($cart as $cart_item) {
        $product_id = $cart_item[0];
        $itemnumber = $cart_item[1];
        $barcode = $cart_item[2];
        $color = $cart_item[3];
        $stockroomname = $cart_item[4];
        $tal = $cart_item[5];
    }
}





if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['purchase'])) {

        $ypy = "INSERT INTO `reservation_manager`( `full_name`, `phone_no`, `clinte_name`) VALUES ('$_POST[full_name]','$_POST[phone_no]','$_POST[clinte_name]')";
        //var_dump(mysqli_query($con, $ypy));

        if (mysqli_query($con, $ypy)) {
            $reservation_id = mysqli_insert_id($con);
            $ypy2 = "INSERT INTO `client_reservastion`(`reservation_id`, `barcode`, `itemnumber`, `color`) VALUES (?,?,?,?)";
            $stmt = mysqli_prepare($con, $ypy2);

            if ($stmt) {
                mysqli_stmt_bind_param($stmt, "isss", $reservation_id, $barcode, $itemnumber, $color);
                foreach ($_SESSION['reserved'] as $cart_item) {
                    $barcode = $cart_item[2];
                    $itemnumber = $cart_item[1];
                    $color = $cart_item[3];

                    mysqli_stmt_execute($stmt);
                }
                unset($_SESSION['reserved']);
                echo " <script>
                
                window.location.href='index.php?page=reservation-cart';
                
                </script> ";
            } else {
                echo " <script>
                alert('sql query prepare error');
                window.location.href='index.php?page=reservation-cart';
                </script> ";
            }
        }
        /*  {
            echo "done";
        }
        else{
            echo " <script>
            alert('sql rerror');
            window.location.href='mycart.php';
            </script> ";
      
        } */
    }
}
