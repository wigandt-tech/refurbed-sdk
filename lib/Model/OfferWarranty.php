<?php
/**
 * OfferWarranty
 *
 * PHP version 7.4
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
 * OpenAPI Generator version: 6.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace WigandtTech\Refurbed\Model;
use \WigandtTech\Refurbed\ObjectSerializer;

/**
 * OfferWarranty Class Doc Comment
 *
 * @category Class
 * @description The warranty the merchant provides to the customer.
 * @package  WigandtTech\Refurbed
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OfferWarranty
{
    /**
     * Possible values of this enum
     */
    public const UNSPECIFIED = 'UNSPECIFIED';

    public const M12 = 'M12';

    public const M18 = 'M18';

    public const M24 = 'M24';

    public const M30 = 'M30';

    public const M36 = 'M36';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNSPECIFIED,
            self::M12,
            self::M18,
            self::M24,
            self::M30,
            self::M36
        ];
    }
}


