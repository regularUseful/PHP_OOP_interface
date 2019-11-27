<?php

interface PaymentInterface{
    public function payProcess();
}

class Cash implements PaymentInterface {
    public $moneyType = "CASH"; 

    public function payProcess(){
        echo $this->moneyType;
    }

}

class Credit implements PaymentInterface {

    public $moneyType = "CREDIT"; 

    public function payProcess(){
        echo $this->moneyType;
    }
}

class Paypal implements PaymentInterface{

    public $moneyType = "PAYPAL";

    public function loginFirst(){
        echo "you logged in <br />";
    }

    public function payProcess(){
        $this->loginFirst();
        echo $this->moneyType;
    }
}

class PayNow {
    public function payForStuff(PaymentInterface $paymentMethod){
        echo  $paymentMethod->payProcess();
    }
}

$paid = new PayNow();
$paymentType = new PayPal();

?>

<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <?php
            
            $paid->payForStuff($paymentType);
        ?>
        
    </body>
</html>