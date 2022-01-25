<?php


namespace Quantox\Interfaces;

interface PaypalInterface {
    public function authorizeUser(string $email);

    public function doPayment();
}
