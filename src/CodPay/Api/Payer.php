<?php
namespace CodPay\Api;

use CodPay\Common\CodPayModel;

/**
 * Class Payer
 * @property string paymentMethod
 *
 */
class Payer extends CodPayModel
{
    /**
     * Valid Values: ["CodPay"]
     * method will be like CodPay, paypal, stripe, pix etc
     * @param  string  $method
     * @return $this
     */
    public function setPaymentMethod($method)
    {
        $this->paymentMethod = $method;
        return $this;
    }

    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }
}