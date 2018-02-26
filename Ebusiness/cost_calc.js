/*global $ */

function calcSub(){
    
    var argSubTotal;
    
    if(document.getElementById("salesforce").checked) {
        argSubTotal = 100;
    }
    if(document.getElementById("aws").checked) {
        argSubTotal = 300;
    }
    if(document.getElementById("cloud9").checked) {
        argSubTotal = 200;
    }
    if (document.getElementById("gmail").checked) {
        argSubTotal = 400;
    }
    calcDisVatTotal(argSubTotal);
}
function calcDisVatTotal(parmSubtotal) {
    var Subtotal = parmSubtotal;
    var discount;   
    var vat;
    var Total;
    
    discount =(parmSubtotal * .05);
    vat =(parmSubtotal - discount) * (.1);
    Total =(parmSubtotal + vat - discount);
    
    display(Subtotal, discount, vat, Total);
}

function display(parm1, parm2, parm3, parm4) {
    
    document.getElementById("Subtotal").value = parm1;
    document.getElementById("Discount").value = parm2;
    document.getElementById("VAT").value = parm3;
    document.getElementById("Total").value = parm4;
    
    enablebtnProceed();
}

function enablebtnProceed() {
    $('#btnProceed').prop('disabled', false);
}

function disablebtnProceed(){
    $('#btnProceed').prop('disabled', true);
}