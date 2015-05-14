<?php

namespace MaxMind\MinFraud\Model;

use GeoIp2\Record\Country;

/**
 * Class GeoIp2Country
 * @package MaxMind\MinFraud\Model
 *
 * {@inheritdoc }
 *
 * @property boolean $isHighRisk This value is true if the IP country is high
 * risk.
 **/
class GeoIp2Country extends Country
{
    protected $validAttributes = array(
        'confidence',
        'geonameId',
        'isoCode',
        'isHighRisk',
        'names'
    );
}
