<?php

class PaymentProcessor {

    protected PaymentGateway $gateway;

    public function __construct(PaymentGateway $gateway)
    {
        $this -> gateway = $gateway;
    }

    public function toPay(float $amount) {

        return $this -> gateway -> sendPayment($amount);
    }
}
?>