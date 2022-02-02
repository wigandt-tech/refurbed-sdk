<?php
/**
 * ListOffersRequestSortBy
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
 * ListOffersRequestSortBy Class Doc Comment
 *
 * @category Class
 * @package  WigandtTech\Refurbed
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ListOffersRequestSortBy
{
    /**
     * Possible values of this enum
     */
    const ID = 'ID';

    const CREATED_AT = 'CREATED_AT';

    const NAME = 'NAME';

    const SKU = 'SKU';

    const GRADING = 'GRADING';

    const WARRANTY = 'WARRANTY';

    const STOCK = 'STOCK';

    const TAXATION = 'TAXATION';

    const REFERENCE_CURRENCY_CODE = 'REFERENCE_CURRENCY_CODE';

    const REFERENCE_PRICE = 'REFERENCE_PRICE';

    const REFERENCE_MIN_PRICE = 'REFERENCE_MIN_PRICE';

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
            self::SKU,
            self::GRADING,
            self::WARRANTY,
            self::STOCK,
            self::TAXATION,
            self::REFERENCE_CURRENCY_CODE,
            self::REFERENCE_PRICE,
            self::REFERENCE_MIN_PRICE
        ];
    }
}


