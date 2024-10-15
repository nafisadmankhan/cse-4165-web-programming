function reset() {
    document.getElementById('quantity').value = "";
    document.getElementById('tips').value = "";
}

function generateBill() {
    var price = 12.5;
    var discount = 0;
    var bill = 0;

    var quantity = parseInt(document.getElementById('quantity').value);
    bill = price * quantity;

    if (quantity>=1 & quantity<=9) {
        discount = 0.05;
    } else if (quantity>=10 & quantity<=19) {
        discount = 0.10;
    } else if (quantity>20) {
        discount = 0.15; 
    } else {
        // Quantity should not be less than 0
    }

    bill = bill - bill*discount;

    var tips = parseFloat(document.getElementById('tips').value);

    bill = bill + tips;

    var home_delivary = document.querySelector('input[name="home_delivery"]:checked').value;

    if (home_delivary=="Y") {
        bill = bill + 40;
    }

    var location = document.getElementById('location').value;

    if (location == "dhk") {
        bill = bill + bill*20/100;
    } else if (location == "ctg") {
        bill = bill + bill*15/100;
    }

    document.getElementById("bill").innerText = bill;
}