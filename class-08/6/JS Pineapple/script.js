function BillCalculate(){
    let quantity = Number(document.getElementById('quantity').value);
    let tips = Number(document.getElementById('tips').value);
    let hd = document.getElementById('hd_yes').checked 
    let loc = document.getElementById('loc').value;
    let bill;
    
    bill = quantity * 12.5;

    if(quantity>=1 && quantity<=9){
        bill = bill * 0.95 // 5% discount
    }
    else if(quantity>=10 && quantity<=19){
        bill = bill * 0.90 // 10% discount
    }
    else{
        bill = bill * 0.85 // 15% discount
    }

    bill = bill + tips; 

    if(hd == true){
        bill = bill + 40;
    }

    if(loc == 'd'){
        bill = bill * 1.20 // 20% tax add
    }
    else{
        bill = bill * 1.15 // 15% tax add
    }
    document.getElementById('lbl1').innerText = bill;
}