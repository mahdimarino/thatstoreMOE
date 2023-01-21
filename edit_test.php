<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_POST['update'])) {
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';

        $conn = mysqli_connect($dbhost, $dbuser, $dbpass);

        if (!$conn) {
            die('Could not connect: ' . mysqli_error());
        }


        $itemnumber = $_POST['itemnumber'];
        $stockroomname = $_POST['stockroomname'];

        $sql = "UPDATE products " . "SET stockroomname = $stockroomname " .
            "WHERE itemumber = $itemnumber";
        mysqli_select_db('products');
        $retval = mysqli_query($sql, $conn);

        if (!$retval) {
            die('Could not update data: ');
        }
        echo "Updated data successfully\n";

        mysqli_close($conn);
    } else {
    ?>
        <form method="post" action="<?php $_PHP_SELF ?>">
            <table width="400" cellspacing="1" cellpadding="2">

                <tr>
                    <td width="100">item number</td>
                    <td><input name="itemnumber" type="text" id="itemnumber"></td>
                </tr>

                <tr>
                    <td width="100">stock room</td>
                    <td><input name="stockroomname" type="text" id="stockroomname"></td>
                </tr>

                <tr>
                    <td width="100"> </td>
                    <td> </td>
                </tr>

                <tr>
                    <td width="100"> </td>
                    <td>
                        <input name="update" type="submit" id="update" value="Update">
                    </td>
                </tr>

            </table>
        </form>
    <?php
    }
    ?>
</body>

</html>