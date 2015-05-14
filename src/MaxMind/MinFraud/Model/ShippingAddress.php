<?php

namespace MaxMind\MinFraud\Model;

/**
 * Class ShippingAddress
 * @package MaxMind\MinFraud\Model
 *
 * This model contains properties of the shipping address.
 *
 * @property integer $distanceToBillingAddress The distance in kilometers from
 * the shipping address to billing address.
 * @property boolean $isHighRisk This field is true if the shipping address is
 * in the IP country. The field is false when the address is not in the IP
 * country. If the shipping address could not be parsed or was not provided or
 * the IP address could not be geo-located, then the field will not be included
 * in the response.
 * {@inheritdoc }
 */
class ShippingAddress extends Address
{
    protected $isHighRisk;
    protected $distanceToBillingAddress;

    /**
     * {@inheritdoc }
     */
    public function __construct($response, $locales = array('en'))
    {
        parent::__construct($response, $locales);
        $this->isHighRisk = $this->get($response['is_high_risk']);
        $this->distanceToBillingAddress
            = $this->get($response['distance_to_billing_address']);
    }
}
