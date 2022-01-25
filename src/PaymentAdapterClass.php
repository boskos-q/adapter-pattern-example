<?php


namespace Quantox;

use Quantox\Interfaces\CreditCardInterface;
use Quantox\Interfaces\PaymentInterface;

class PaymentAdapterClass implements PaymentInterface {

    private CreditCardInterface $creditCard;

    public function __construct(CreditCardInterface $creditCard)
    {
        $this->creditCard = $creditCard;
    }

    public function checkPayment()
    {
        $this->creditCard->validateCard();
    }

    public function doPayment()
    {
        $this->creditCard->doPayment();
    }
}
