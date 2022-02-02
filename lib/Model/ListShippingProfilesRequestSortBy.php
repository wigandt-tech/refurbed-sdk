<?php
/**
 * ListShippingProfilesRequestSortBy
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  WigandtTech\Refurbed
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Merchant API
 *
 * The refurbed merchant API allows to access and manage markets, currencies, instances, shipping profiles, offers, market offers, orders and order items.
 *
 * The version of the OpenAPI document: 1.0
 * Contact: integrations@refurbed.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace WigandtTech\Refurbed\Model;
use \WigandtTech\Refurbed\ObjectSerializer;

/**
 * ListShippingProfilesRequestSortBy Class Doc Comment
 *
 * @category Class
 * @package  WigandtTech\Refurbed
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ListShippingProfilesRequestSortBy
{
    /**
     * Possible values of this enum
     */
    const ID = 'ID';

    const CREATED_AT = 'CREATED_AT';

    const NAME = 'NAME';

    const SOURCE_COUNTRY_MARKET_CODE = 'SOURCE_COUNTRY_MARKET_CODE';

    const NUM_OFFERS_ASSIGNED = 'NUM_OFFERS_ASSIGNED';

    const SOURCE_COUNTRY_MARKET_NAME = 'SOURCE_COUNTRY_MARKET_NAME';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ID,
            self::CREATED_AT,
            self::NAME,
            self::SOURCE_COUNTRY_MARKET_CODE,
            self::NUM_OFFERS_ASSIGNED,
            self::SOURCE_COUNTRY_MARKET_NAME
        ];
    }
}


