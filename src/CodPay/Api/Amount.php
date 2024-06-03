<?php
namespace CodPay\Api;

use CodPay\Common\CodPayModel;

/**
 * Class Amount
 * @property double totalAmount
 * @property string currency
 *
 */
class Amount extends CodPayModel
{

    /**
     * @param  double  $amount
     * @return $this
     */
    public function setTotal($amount)
    {
        $this->totalAmount = $amount;
        return $this;
    }

    public function getTotal()
    {
        return $this->totalAmount;
    }

    /**
     * @param  string  $currency
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    public function getCurrency()
    {
        return $this->currency;
    }
	
	/**
     * @param  string  $id
     * @return $this
     */
	public function setReferencia($referencia)
    {
        $this->referencia = $referencia;
        return $this;
    }

    public function getReferencia()
    {
        return $this->referencia;
    }

}
