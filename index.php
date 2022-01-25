<?php

use Quantox\Classes\AmericanExpressCardClass;
use Quantox\Classes\PayPalClass;
use Quantox\Classes\VisaCreditCard;
use Quantox\Interfaces\PaymentInterface;
use Quantox\PaymentAdapterClass;

require_once ('vendor/autoload.php');


function paySubscription(PaymentInterface $payment)
{
    $payment->checkPayment();
    $payment->doPayment();
    echo '----------------'.PHP_EOL;
}

$creditCardAdapter     = new PaymentAdapterClass(new AmericanExpressCardClass());
$visaCreditCardAdapter = new PaymentAdapterClass(new VisaCreditCard());
$paypal                = new PayPalClass('bosko@quantox.com');


paySubscription($creditCardAdapter);
paySubscription($visaCreditCardAdapter);
paySubscription($paypal);
