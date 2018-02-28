<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title> Select Product</title>
        <!--jQuery-->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
    <style>
        body {
            text-align:center;
        }
    </style>
    
    </head>
    
    
    <body>
        
        <h1> Select Product </h1>
        
        <br/>
        
        <!--Setting prices for each product-->
        
        <form method="POST" action="Ebus2.php">
            
            <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                Salesforce @ $100
            </label>
            
            <br/>
            
            <label for ="aws">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                Amazon Web Services @ $300
            </label>
            
            <br/>
            
            <label for="cloud9">
                <input type="radio" id="cloud9" name="product" checked onClick="disablebtnProceed()"/>
                Cloud9 @ $200
            </label>
            
            <br/>
            
            <label for="gmail">
                <input type="radio" id="gmail" name="product" checked onClick="disablebtnProceed()"/>
                Gmail @ $400
            </label>
            
            <br/>
            <br/>
            
        
            
            <label for="Subtotal">
                Sub Total
                <input type="text" id="Subtotal" name="Subtotal" value="0.00" readonly/>
            </label>
            
            <br/>
            <br/>
            
            <label for="Discount">
                Discount @ 5%
                <input type="text" id="Discount" name="Discount" value="0.00" readonly/>
            </label>
            
            <br/>
            <br/>
            
            <label for="VAT">
                VAT @ 10%
                <input type="text" id="VAT" name="VAT" value="0.00" readonly/>
            </label>
            
            <br/>
            <br/>
            
            <label for="Total">
            Total
            <input type="text" id="Total" name="total" value="0.00" readonly/>
            </label>
            
            <br/>
            <br/>
            
            <button type="submit" id="btnProceed" disabled>Add to shopping cart</button>
        </form>
        
        <br/>
        
        <button onClick="calcSub()">Calculate Cost</button>
        <a role="button" href="Ebus1.php">Clear Choice</a>
        
        <br/>
        <br/>
        
        
    </body>
</html>