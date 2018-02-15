<html>
    <head>
        <title> Select Product</title>
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
    </head>
    
    <body>
        
        <h4> Select Product </h4>
        
        <br/>
        
        <form method="POST" action="Ebus2.php">
            
            <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                salesforce @ $100
            </label>
            
            <br/>
            
            <label for "aws">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                aws @ $300
            </label>
            
            <br/>
            <br/>
            
            <label for="Subtotal">
                Sub Total
                <input type="text" id="Subtotal" value="0.00" readonly/>
            </label>
            
            <br/>
            
            <label for="Total">
            Total
            <input type="hidden" id="Total" name="total" value="0.00" readonly/>
            </label>
            
            <br/>
            <button type="submit" id="btnProceed" disabled>Add to shopping cart</button>
            
        </form>
        
        <br/>
        
        <button onClick="calcSub()">Calculate Cost</button>
        <a role="button" href="Ebus.php">Clear Choice</a>
    </body>
</html>