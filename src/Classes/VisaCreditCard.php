<?php


namespace Quantox\Classes;

use Quantox\Interfaces\CreditCardInterface;

class VisaCreditCard implements CreditCardInterface {

    public function validateCard()
    {
        echo 'Validna Visa kartica'.PHP_EOL;
    }

    public function doPayment()
    {
        echo 'NEuspelo placanje, nemasp para xD'.PHP_EOL;
    }
}
