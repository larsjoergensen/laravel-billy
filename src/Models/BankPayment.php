<?php
/**
 * Created by PhpStorm.
 * User: nts
 * Date: 19.4.18.
 * Time: 01.30
 */

namespace KgBot\Billy\Models;


use KgBot\Billy\Utils\Model;

class BankPayment extends Model
{
    protected $entity     = 'bankPayments';
    protected $primaryKey = 'id';
}
