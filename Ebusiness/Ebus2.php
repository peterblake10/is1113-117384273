<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title> Enter Details</title>
        
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <style>
           
            
            h2 {
                text-align:center;
            }
            
            body {
                text-align:center;
            }
           
        </style>
    </head>
    
    <body>
        
        <h2>Please enter your payment details.</h2>
         
            <br />
            
            <form method = "POST" action = "Ebus3.php">
             
            <!--Adding textboxes for user name, email and pin-->
            
            <label for="name">
                   
                    Name
                </label>
                
                <input type="text" id="name" name="name" maxlength="20">
           
           <br/>
           <br/>
           
             <label for="email">
                    
                    Email Address
                </label>
                
                <input type="text" id="email" name="email" maxlength="30">
                
                <br/>
                <br/>
                
                <label for="user_pin">
                     
                     PIN 
                </label>
                
                <input type="password" id="user_pin" placeholder="Card Pin" maxlength="4">
                
                <br/>
                <br/>
                
                
                    
                <button type="Submit" id="btnPurchase" disabled> 
                    Proceed with Purchase 
                </button>
                
                
                
        
                
            </form>
            
            <br />
        
            <button onClick="validateDetails()"> Validate </button>
            
            
            
            <script type="text/javascript" src="Ebus2_Validator.js"></script>
            
            <?php
            // set session variables
           
            $_SESSION["Subtotal"] = $_POST["Subtotal"];
            $_SESSION["Discount"] = $_POST["Discount"];
            $_SESSION["VAT"] = $_POST["VAT"];
            $_SESSION["total"] = $_POST["total"];
            $_SESSION["name"] = $_POST["name"];
            $_SESSION["email"] = $_POST["email"];
            ?>
        
        
        
        
    </body>
    
    
    
</html>
