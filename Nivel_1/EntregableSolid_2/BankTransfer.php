<?php

require 'Interface.php';

class BankTransfer implements PaymentGateway {

    public function sendPayment(float $amount): string {
        
        return "{$amount} payment processed by Bank Transfer";
    }

}
?>