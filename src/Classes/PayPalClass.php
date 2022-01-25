<?php


namespace Quantox\Classes;

use Quantox\Interfaces\PaymentInterface;
use Quantox\Interfaces\PaypalInterface;

class PayPalClass implements PaymentInterface, PaypalInterface {

    protected string $email;

    public function __construct(string $email)
    {
        $this->email = $email;
    }

    public function authorizeUser(string $email)
    {
        echo 'Autorizovan user za placanje: '.$email.PHP_EOL;
    }

    public function doPayment()
    {
        echo 'Uspesno paypal placanje nalogom :' . $this->email.PHP_EOL;
    }

    public function checkPayment()
    {
        $this->authorizeUser($this->email);
    }
}
