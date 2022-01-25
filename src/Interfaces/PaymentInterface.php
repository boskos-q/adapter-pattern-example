<?php


namespace Quantox\Interfaces;

interface PaymentInterface {
    public function checkPayment();

    public function doPayment();
}
