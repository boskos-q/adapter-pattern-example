<?php


namespace Quantox\Interfaces;

interface CreditCardInterface {
    public function validateCard();

    public function doPayment();
}
