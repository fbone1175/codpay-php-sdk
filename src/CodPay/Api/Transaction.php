<?php namespace CodPay\Api;

use CodPay\Common\CodPayModel;

/**
 * Class Transaction
 * @property \CodPay\Api\Amount amount
 *
 */

class Transaction extends CodPayModel
{

    /**
     * @param \CodPay\Api\Amount $amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    public function getAmount()
    {
        return $this->amount;
    }
}