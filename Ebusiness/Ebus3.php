<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
        <style>
            body {
                text-align:center;
                font-size:30px;
            }
        </style>
    </head>
    <body>
        <h4>YOUR PAYMENT RECEIPT</h4>
        
        <?php
        //Echo session variables that were set on previous page
        echo "Name: " . $_SESSION["name"] . ".<br>";
        
       
        
        //Echo session variables that were set on previous page
        echo "Email Address: " . $_SESSION["email"] . ".<br>";
     
       
        
        
        //Echo session variables that were set on previous page
        echo "Subtotal: " . $_SESSION["Subtotal"] . ".<br>";
        
       
        
        //Echo session variables that were set on previous page
        echo "Discount: " . $_SESSION["Discount"] . ".<br>";
        
       
        
        //Echo session variables that were set on previous page
        echo "VAT: " . $_SESSION["VAT"] . ".<br>";
    
      
        
        //Echo session variables that were set on previous page
        echo "Total: " . $_SESSION["total"] . ".<br>";
        ?>
    </body>
</html>