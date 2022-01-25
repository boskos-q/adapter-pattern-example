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
