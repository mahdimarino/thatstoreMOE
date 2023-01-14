<?php





$total_price = 0;
$final_price = 0;




?>





<div>


    <!-- Cart -->
    <section class="section-wrap ">
        <div class="container relative">
            <div class="row">

                <div class="col-md-12">
                    <div class="table-wrap mb-30">




                        <!-- <table class="table table-striped">
                            <thead>
                                <tr style="height: 50px !important;">
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="height: 50px !important; background-color:blue !important;">
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table> -->










                        <table class="table table-striped">
                            <thead>
                                <tr style="height: 50px !important;">
                                    <th scope="col">barcode</th>
                                    <th scope="col">item-number</th>
                                    <th scope="col">item color</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                //session_start();

                                if (isset($_SESSION['reserved'])) {
                                    $cart = $_SESSION['reserved']; // array()
                                    $total_price = 0;
                                    $final_price = 0;

                                    foreach ($cart as $cart_item) {
                                        // $cart_item = array(product_id, quantity) Example: array(1, 5)
                                        $product_id = $cart_item[0];
                                        $itemnumber = $cart_item[1];
                                        $barcode = $cart_item[2];
                                        $color = $cart_item[3];
                                        $stockroomname = $cart_item[4];
                                        $tal = $cart_item[5];



                                ?>

                                        <tr style="height: 50px !important;">
                                            <input type="hidden" name="id" value="<?php echo $product_id; ?>">


                                            <td name="product_title" style="height: 50px !important;">
                                                <?php echo $itemnumber; ?>

                                            </td>
                                            <td name="product_price" style="height: 50px !important;">
                                                <?php echo $barcode; ?>
                                            </td>
                                            <td name="product_price" style="height: 50px !important;">
                                                <?php echo $color; ?>
                                            </td>



                                            <form action="cart/remove_from_cart.php" method="POST">

                                                <td style="height: 50px !important;">

                                                    <input type="hidden" name="id" value="<?php echo $product_id; ?>">
                                                    <button type="submit" class="btn btn-sm btn-outline-danger">REMOVE</button>
                                                </td>
                                            </form>
                                        </tr>
                                <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>



                </div> <!-- end col -->
            </div> <!-- end row -->
            <form method="post" action="confirmed-reservation.php" enctype="multipart/form-data">
                <div class="row">
                    <!-- end col shipping calculator -->


                    <div class="col-md-6 shipping-calculator-form">
                        <h2 class="heading relative uppercase bottom-line full-grey mb-30">Add Full Info</h2>

                        <div class="input-group mt-1 flex-nowrap">

                            <input type="text" class="form-control" value placeholder="by who ..." name="full_name" aria-describedby="addon-wrapping">
                        </div>
                        <div class="input-group mt-1 flex-nowrap">

                            <input type="text" class="form-control" value placeholder="contact number" name="phone_no" aria-describedby="addon-wrapping">
                        </div>
                        <div class="input-group mt-1 flex-nowrap">

                            <input type="text" class="form-control" value placeholder="Clinte name" name="clinte_name" aria-describedby="addon-wrapping">
                        </div>


                        <input type="hidden" name="id" value="<?php echo $product_id; ?> ">

                        <input type="hidden" name="itemnumber" value="<?php echo $itemnumber; ?> ">
                        <input type="hidden" name="barcode" value="<?php echo $barcode; ?> ">
                        <input type="hidden" name="itemnumber" value="<?php echo $itemnumber; ?> ">
                        <input type="hidden" name="color" value="<?php echo $color; ?> ">



                        <p>
                            <input type="submit" value="Reserv" name="purchase" class="btn mt-1 btn-dark btn-lg btn-stroke mt-10 mb-mdm-40">

                        </p>
                    </div>

                </div> <!-- end row -->
            </form>

        </div> <!-- end container -->
    </section> <!-- end cart -->