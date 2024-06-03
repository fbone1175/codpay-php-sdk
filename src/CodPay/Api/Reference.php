<?php
namespace CodPay\Api;

use CodPay\Common\CodPayModel;

/**
 * Class Reference
 * @property double reference
 *
 */
class Reference extends CodPayModel
{

    /**
     * @param  double  $reference
     * @return $this
     */
    public function setRef($ref)
    {
        $this->valor_ref = $ref;
        return $this;
    }

    public function getRef()
    {
        return $this->valor_ref;
    }


}
