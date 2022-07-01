<?php
/**
 * OfferVisibility
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
 * OfferVisibility Class Doc Comment
 *
 * @category Class
 * @description Indicates if and how an offer is shown on the refurbed platform.   - FULL: Offer is normally shown to customers.  - NONE: Offer is not shown to customers (e.g. does not ship into this market, is out of stock, is not verified,...).  - LIMITED: Offer was hidden from some pages by refurbed (e.g. because price is higher than refurbed&#39;s instance SRP).  - HIDDEN: Offer was hidden by refurbed (e.g. because of an unreasonably low or high price).
 * @package  WigandtTech\Refurbed
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OfferVisibility
{
    /**
     * Possible values of this enum
     */
    public const UNSPECIFIED = 'UNSPECIFIED';

    public const FULL = 'FULL';

    public const NONE = 'NONE';

    public const LIMITED = 'LIMITED';

    public const HIDDEN = 'HIDDEN';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNSPECIFIED,
            self::FULL,
            self::NONE,
            self::LIMITED,
            self::HIDDEN
        ];
    }
}


