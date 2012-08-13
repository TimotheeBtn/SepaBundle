<?php

namespace Rezzza\SepaBundle\Model\PaymentInformation\CreditTransferTransactionInformation;

use JMS\SerializerBundle\Annotation\XmlList;
use JMS\SerializerBundle\Annotation\Type;

/**
 * RemittanceInformation
 *
 * @author Stephane PY <py.stephane1@gmail.com>
 */
class RemittanceInformation
{
    /**
     * REQUIRED
     *
     * @Type("string")
     * @XmlList(inline=true, entry= "Ustrd")
     */
    public $unstructured;

    /**
     * @param array $datas datas
     *
     * @return RemittanceInformation
     */
    public static function create(array $datas = array())
    {
        $instance = new self();
        $instance->unstructured = $datas;

        return $instance;
    }
}
