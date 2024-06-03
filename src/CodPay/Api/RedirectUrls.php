<?php

namespace CodPay\Api;

use CodPay\Common\CodPayModel;

/**
 * Class RedirectUrls
 * @property string successUrl
 * @property string cancelUrl
 *
 */

class RedirectUrls extends CodPayModel
{
    public function setSuccessUrl($url)
    {
        $this->successUrl = $url;
        return $this;
    }

    public function getSuccessUrl()
    {
        return $this->successUrl;
    }

    public function setCancelUrl($url)
    {
        $this->cancelUrl = $url;
        return $this;
    }

    public function getCancelUrl()
    {
        return $this->cancelUrl;
    }
}