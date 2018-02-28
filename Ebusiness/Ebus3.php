<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>RECEIPT</title>
        <style>
            body {
                text-align:center;
                font-size:30px;
            }
            
            .button {
                 background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
            }
        </style>
    </head>
    <body>
        <h4>YOUR PAYMENT RECEIPT</h4>
        
        <!--Posting values from previous pages for customer receipt-->
        
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
        
        <a href="../Interests/CloudServicesVendor/cloudhomepage.html" class="button">Home</a>
    </body>
</html>