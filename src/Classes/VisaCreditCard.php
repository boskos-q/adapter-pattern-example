<?php

/*
 * Copyright 2017 SCTR Services
 *
 * Distribution and reproduction are prohibited.
 *
 * @package     www.bang.com
 * @copyright   SCTR Services LLC 2017
 * @license     No License (Proprietary)
 */
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
