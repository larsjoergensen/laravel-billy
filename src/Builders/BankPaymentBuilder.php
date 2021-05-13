<?php
/**
 * Created by PhpStorm.
 * User: nts
 * Date: 19.4.18.
 * Time: 01.32
 */

namespace KgBot\Billy\Builders;


use KgBot\Billy\Models\BankPayment;

class BankPaymentBuilder extends Builder
{
    protected $entity = 'bankPayments';
    protected $model  = bankpayment::class;
}