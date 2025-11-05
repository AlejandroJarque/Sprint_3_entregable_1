<?php

require 'Interface.php';

class StripePaymentGateway implements PaymentGateway {

    public function sendPayment(float $amount): string {

        return "{$amount} payment processed by Stripe";
        
    }
}
?>