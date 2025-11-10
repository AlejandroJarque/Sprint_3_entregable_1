<?php

require_once 'PaymentGateway.php';
require_once 'BankTransfer.php';
require_once 'PaypalPaymentGateway.php';
require_once 'PaymentProcessor.php';
require_once 'StripePaymentGateway.php';

$my_BankTranfer = new BankTransfer();
$my_PayPal = new PaypalPaymentGateway();
$my_Stripe = new StripePaymentGateway();

$my_Payment1 = new PaymentProcessor($my_BankTranfer);
echo $my_Payment1 -> toPay(1500.00);

$my_Payment2 = new PaymentProcessor($my_PayPal);
echo $my_Payment2 -> toPay(1500.00);

$my_Payment3 = new PaymentProcessor($my_Stripe);
echo $my_Payment3 -> toPay(1500.00);
?>