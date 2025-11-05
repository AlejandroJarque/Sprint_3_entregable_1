<?php

require 'Interface.php';

class PaypalPaymentGateway implements PaymentGateway {

    public function sendPayment(float $amount): string {
        
        return "{$amount} payment processed by PayPal";
    }
}
?>