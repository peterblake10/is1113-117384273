<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
    </head>
    <body>
        <h4>RECEIPT</h4>
        
        <?php
        //Echo session variables that were set on previous page
        echo "Subtotal: " . $_SESSION["Subtotal"] . ".";
        ?>
        <br>
        <?php
        //Echo session variables that were set on previous page
        echo "Discount: " . $_SESSION["Discount"] . ".";
        ?>
        <br>
        <?php
        //Echo session variables that were set on previous page
        echo "VAT: " . $_SESSION["VAT"] . ".";
        ?>
        <br>
        <?php
        //Echo session variables that were set on previous page
        echo "Total: " . $_SESSION["Total"] . ".";
        ?>
    </body>
</html>