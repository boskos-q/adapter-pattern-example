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
namespace Quantox\Interfaces;

interface CreditCardInterface {
    public function validateCard();

    public function doPayment();
}
