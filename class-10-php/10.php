<?php
    $quantity = $_POST['quantity'];
    $tips = $_POST['tips'];
    $hd = $_POST['hd'];
    $loc = $_POST['loc'];
    
    $bill = $quantity * 12.5;

    if($quantity>=1 && $quantity<=9){
        $bill = $bill * 0.95; // 5% discount
    }
    elseif($quantity>=10 && $quantity<=19){
        $bill = $bill * 0.90; // 10% discount
    }
    else{
        $bill = $bill * 0.85; // 15% discount
    }

    $bill = $bill + $tips; 

    if($hd == "1"){
        $bill = $bill + 40;
    }

    if($loc == 'd'){
        $bill = $bill * 1.20; // 20% tax add
    }
    else{
        $bill = $bill * 1.15; // 15% tax add
    }
    

    echo "Your final bill is: $bill";

?>