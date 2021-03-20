<?php
    // echo "hello world"."<br>";
    // $false = false;
    // $true = true;
    // //$arrayIndex = array();
    // $amount = 25.30;
    // $price = 30;
    // $sum = (int)$amount - (int)$price;
    // echo $sum."<br>";
    // // echo true;
    // // echo $amount;
    // // echo false;
    // $firstNum = (int)30;
    // if($firstNum  > 30){
    //     echo "go and marry";
    // }else{echo "go and build house ";}
    // $firstNum2 = (int)50; 
    // if($firstNum == 20){echo"i am aboy";}
    // elseif($firstNum2 ==40 ){echo"i am an adult";}
    // else{echo "please go home"."<br>";}

    $arrayIndex = [1, 2, 3, 4, 5];
    $sum = 0;
    // echo count($arrayIndex);
    // die();
    for($i = 0; $i < count($arrayIndex); $i++){
        $sum = $sum + $arrayIndex[$i]."<br>";
        echo $sum;
    }
    echo $_GET[firstname];

     



?>