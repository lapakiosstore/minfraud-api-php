<?php

namespace MaxMind\MinFraud\Model;

use GeoIp2\Record\Location;

/**
 * Class GeoIp2Location
 * @package MaxMind\MinFraud\Model
 *
 * {@inheritdoc }
 * @property string $localTime The date and time of the transaction in the time
 * zone associated with the IP address. The value is formated according to RFC
 * 3339. For instance, the local time in Boston might be returned as
 * 2015-04-27T19:17:24-04:00.
 */
class GeoIp2Location extends Location
{
    protected $validAttributes = array(
        'accuracyRadius',
        'latitude',
        'localTime',
        'longitude',
        'metroCode',
        'postalCode',
        'postalConfidence',
        'timeZone'
    );
}
