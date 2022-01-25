<?php


namespace Quantox\Classes;

use Quantox\Interfaces\CreditCardInterface;

class AmericanExpressCardClass implements CreditCardInterface {

    public function validateCard()
    {
        echo 'Validna kartica'.PHP_EOL;
    }

    public function doPayment()
    {
        echo 'Placanje karticom uspesno'.PHP_EOL;
    }
}
