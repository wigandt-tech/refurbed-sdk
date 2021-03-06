<?php
/**
 * OrderItem
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

use \ArrayAccess;
use \WigandtTech\Refurbed\ObjectSerializer;

/**
 * OrderItem Class Doc Comment
 *
 * @category Class
 * @description An order item.
 * @package  WigandtTech\Refurbed
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class OrderItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'state' => '\WigandtTech\Refurbed\Model\OrderItemState',
        'sku' => 'string',
        'currencyCode' => '\WigandtTech\Refurbed\Model\CurrencyCode',
        'settlementCurrencyCode' => '\WigandtTech\Refurbed\Model\CurrencyCode',
        'totalCharged' => 'string',
        'settlementTotalCharged' => 'string',
        'totalChargedDynamic' => 'string',
        'settlementTotalChargedDynamic' => 'string',
        'totalPaid' => 'string',
        'settlementTotalPaid' => 'string',
        'totalRefunded' => 'string',
        'settlementTotalRefunded' => 'string',
        'settlementTotalCommission' => 'string',
        'settlementBaseCommission' => 'string',
        'settlementPayoutCommission' => 'string',
        'settlementDynamicCommission' => 'string',
        'taxation' => '\WigandtTech\Refurbed\Model\OrderItemTaxation',
        'isRefundable' => 'bool',
        'offerData' => '\WigandtTech\Refurbed\Model\OfferData',
        'parcelTrackingUrl' => 'string',
        'itemIdentifier' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'name' => null,
        'state' => null,
        'sku' => null,
        'currencyCode' => null,
        'settlementCurrencyCode' => null,
        'totalCharged' => null,
        'settlementTotalCharged' => null,
        'totalChargedDynamic' => null,
        'settlementTotalChargedDynamic' => null,
        'totalPaid' => null,
        'settlementTotalPaid' => null,
        'totalRefunded' => null,
        'settlementTotalRefunded' => null,
        'settlementTotalCommission' => null,
        'settlementBaseCommission' => null,
        'settlementPayoutCommission' => null,
        'settlementDynamicCommission' => null,
        'taxation' => null,
        'isRefundable' => null,
        'offerData' => null,
        'parcelTrackingUrl' => null,
        'itemIdentifier' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'name' => 'name',
        'state' => 'state',
        'sku' => 'sku',
        'currencyCode' => 'currency_code',
        'settlementCurrencyCode' => 'settlement_currency_code',
        'totalCharged' => 'total_charged',
        'settlementTotalCharged' => 'settlement_total_charged',
        'totalChargedDynamic' => 'total_charged_dynamic',
        'settlementTotalChargedDynamic' => 'settlement_total_charged_dynamic',
        'totalPaid' => 'total_paid',
        'settlementTotalPaid' => 'settlement_total_paid',
        'totalRefunded' => 'total_refunded',
        'settlementTotalRefunded' => 'settlement_total_refunded',
        'settlementTotalCommission' => 'settlement_total_commission',
        'settlementBaseCommission' => 'settlement_base_commission',
        'settlementPayoutCommission' => 'settlement_payout_commission',
        'settlementDynamicCommission' => 'settlement_dynamic_commission',
        'taxation' => 'taxation',
        'isRefundable' => 'is_refundable',
        'offerData' => 'offer_data',
        'parcelTrackingUrl' => 'parcel_tracking_url',
        'itemIdentifier' => 'item_identifier'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'state' => 'setState',
        'sku' => 'setSku',
        'currencyCode' => 'setCurrencyCode',
        'settlementCurrencyCode' => 'setSettlementCurrencyCode',
        'totalCharged' => 'setTotalCharged',
        'settlementTotalCharged' => 'setSettlementTotalCharged',
        'totalChargedDynamic' => 'setTotalChargedDynamic',
        'settlementTotalChargedDynamic' => 'setSettlementTotalChargedDynamic',
        'totalPaid' => 'setTotalPaid',
        'settlementTotalPaid' => 'setSettlementTotalPaid',
        'totalRefunded' => 'setTotalRefunded',
        'settlementTotalRefunded' => 'setSettlementTotalRefunded',
        'settlementTotalCommission' => 'setSettlementTotalCommission',
        'settlementBaseCommission' => 'setSettlementBaseCommission',
        'settlementPayoutCommission' => 'setSettlementPayoutCommission',
        'settlementDynamicCommission' => 'setSettlementDynamicCommission',
        'taxation' => 'setTaxation',
        'isRefundable' => 'setIsRefundable',
        'offerData' => 'setOfferData',
        'parcelTrackingUrl' => 'setParcelTrackingUrl',
        'itemIdentifier' => 'setItemIdentifier'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'state' => 'getState',
        'sku' => 'getSku',
        'currencyCode' => 'getCurrencyCode',
        'settlementCurrencyCode' => 'getSettlementCurrencyCode',
        'totalCharged' => 'getTotalCharged',
        'settlementTotalCharged' => 'getSettlementTotalCharged',
        'totalChargedDynamic' => 'getTotalChargedDynamic',
        'settlementTotalChargedDynamic' => 'getSettlementTotalChargedDynamic',
        'totalPaid' => 'getTotalPaid',
        'settlementTotalPaid' => 'getSettlementTotalPaid',
        'totalRefunded' => 'getTotalRefunded',
        'settlementTotalRefunded' => 'getSettlementTotalRefunded',
        'settlementTotalCommission' => 'getSettlementTotalCommission',
        'settlementBaseCommission' => 'getSettlementBaseCommission',
        'settlementPayoutCommission' => 'getSettlementPayoutCommission',
        'settlementDynamicCommission' => 'getSettlementDynamicCommission',
        'taxation' => 'getTaxation',
        'isRefundable' => 'getIsRefundable',
        'offerData' => 'getOfferData',
        'parcelTrackingUrl' => 'getParcelTrackingUrl',
        'itemIdentifier' => 'getItemIdentifier'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = $data['id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['sku'] = $data['sku'] ?? null;
        $this->container['currencyCode'] = $data['currencyCode'] ?? null;
        $this->container['settlementCurrencyCode'] = $data['settlementCurrencyCode'] ?? null;
        $this->container['totalCharged'] = $data['totalCharged'] ?? null;
        $this->container['settlementTotalCharged'] = $data['settlementTotalCharged'] ?? null;
        $this->container['totalChargedDynamic'] = $data['totalChargedDynamic'] ?? null;
        $this->container['settlementTotalChargedDynamic'] = $data['settlementTotalChargedDynamic'] ?? null;
        $this->container['totalPaid'] = $data['totalPaid'] ?? null;
        $this->container['settlementTotalPaid'] = $data['settlementTotalPaid'] ?? null;
        $this->container['totalRefunded'] = $data['totalRefunded'] ?? null;
        $this->container['settlementTotalRefunded'] = $data['settlementTotalRefunded'] ?? null;
        $this->container['settlementTotalCommission'] = $data['settlementTotalCommission'] ?? null;
        $this->container['settlementBaseCommission'] = $data['settlementBaseCommission'] ?? null;
        $this->container['settlementPayoutCommission'] = $data['settlementPayoutCommission'] ?? null;
        $this->container['settlementDynamicCommission'] = $data['settlementDynamicCommission'] ?? null;
        $this->container['taxation'] = $data['taxation'] ?? null;
        $this->container['isRefundable'] = $data['isRefundable'] ?? null;
        $this->container['offerData'] = $data['offerData'] ?? null;
        $this->container['parcelTrackingUrl'] = $data['parcelTrackingUrl'] ?? null;
        $this->container['itemIdentifier'] = $data['itemIdentifier'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Primary key.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Human-readable name of the item sold.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets state
     *
     * @return \WigandtTech\Refurbed\Model\OrderItemState|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \WigandtTech\Refurbed\Model\OrderItemState|null $state state
     *
     * @return self
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string|null $sku Merchant SKU of the item. This can be empty string as it is/was possible for the merchant to create offers without SKU in the refurbed merchant management interface.
     *
     * @return self
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets currencyCode
     *
     * @return \WigandtTech\Refurbed\Model\CurrencyCode|null
     */
    public function getCurrencyCode()
    {
        return $this->container['currencyCode'];
    }

    /**
     * Sets currencyCode
     *
     * @param \WigandtTech\Refurbed\Model\CurrencyCode|null $currencyCode currencyCode
     *
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->container['currencyCode'] = $currencyCode;

        return $this;
    }

    /**
     * Gets settlementCurrencyCode
     *
     * @return \WigandtTech\Refurbed\Model\CurrencyCode|null
     */
    public function getSettlementCurrencyCode()
    {
        return $this->container['settlementCurrencyCode'];
    }

    /**
     * Sets settlementCurrencyCode
     *
     * @param \WigandtTech\Refurbed\Model\CurrencyCode|null $settlementCurrencyCode settlementCurrencyCode
     *
     * @return self
     */
    public function setSettlementCurrencyCode($settlementCurrencyCode)
    {
        $this->container['settlementCurrencyCode'] = $settlementCurrencyCode;

        return $this;
    }

    /**
     * Gets totalCharged
     *
     * @return string|null
     */
    public function getTotalCharged()
    {
        return $this->container['totalCharged'];
    }

    /**
     * Sets totalCharged
     *
     * @param string|null $totalCharged The total amount the customer was charged for this item, in order currency. This is the sum of total paid and total refunded.
     *
     * @return self
     */
    public function setTotalCharged($totalCharged)
    {
        $this->container['totalCharged'] = $totalCharged;

        return $this;
    }

    /**
     * Gets settlementTotalCharged
     *
     * @return string|null
     */
    public function getSettlementTotalCharged()
    {
        return $this->container['settlementTotalCharged'];
    }

    /**
     * Sets settlementTotalCharged
     *
     * @param string|null $settlementTotalCharged The total amount the customer was charged for this item, in order settlement currency.
     *
     * @return self
     */
    public function setSettlementTotalCharged($settlementTotalCharged)
    {
        $this->container['settlementTotalCharged'] = $settlementTotalCharged;

        return $this;
    }

    /**
     * Gets totalChargedDynamic
     *
     * @return string|null
     */
    public function getTotalChargedDynamic()
    {
        return $this->container['totalChargedDynamic'];
    }

    /**
     * Sets totalChargedDynamic
     *
     * @param string|null $totalChargedDynamic The dynamic price part of the amount the customer was charged (\"dynamic pricing\").
     *
     * @return self
     */
    public function setTotalChargedDynamic($totalChargedDynamic)
    {
        $this->container['totalChargedDynamic'] = $totalChargedDynamic;

        return $this;
    }

    /**
     * Gets settlementTotalChargedDynamic
     *
     * @return string|null
     */
    public function getSettlementTotalChargedDynamic()
    {
        return $this->container['settlementTotalChargedDynamic'];
    }

    /**
     * Sets settlementTotalChargedDynamic
     *
     * @param string|null $settlementTotalChargedDynamic The dynamic price part of the amount the customer was charged, in order settlement currency.
     *
     * @return self
     */
    public function setSettlementTotalChargedDynamic($settlementTotalChargedDynamic)
    {
        $this->container['settlementTotalChargedDynamic'] = $settlementTotalChargedDynamic;

        return $this;
    }

    /**
     * Gets totalPaid
     *
     * @return string|null
     */
    public function getTotalPaid()
    {
        return $this->container['totalPaid'];
    }

    /**
     * Sets totalPaid
     *
     * @param string|null $totalPaid The total amount the customer paid for this item, in order currency. This value decreases on refund.
     *
     * @return self
     */
    public function setTotalPaid($totalPaid)
    {
        $this->container['totalPaid'] = $totalPaid;

        return $this;
    }

    /**
     * Gets settlementTotalPaid
     *
     * @return string|null
     */
    public function getSettlementTotalPaid()
    {
        return $this->container['settlementTotalPaid'];
    }

    /**
     * Sets settlementTotalPaid
     *
     * @param string|null $settlementTotalPaid The total amount the customer paid for this item, in order settlement currency.
     *
     * @return self
     */
    public function setSettlementTotalPaid($settlementTotalPaid)
    {
        $this->container['settlementTotalPaid'] = $settlementTotalPaid;

        return $this;
    }

    /**
     * Gets totalRefunded
     *
     * @return string|null
     */
    public function getTotalRefunded()
    {
        return $this->container['totalRefunded'];
    }

    /**
     * Sets totalRefunded
     *
     * @param string|null $totalRefunded The total amount the customer was refunded, in order currency.
     *
     * @return self
     */
    public function setTotalRefunded($totalRefunded)
    {
        $this->container['totalRefunded'] = $totalRefunded;

        return $this;
    }

    /**
     * Gets settlementTotalRefunded
     *
     * @return string|null
     */
    public function getSettlementTotalRefunded()
    {
        return $this->container['settlementTotalRefunded'];
    }

    /**
     * Sets settlementTotalRefunded
     *
     * @param string|null $settlementTotalRefunded The total amount the customer was refunded, in order settlement currency.
     *
     * @return self
     */
    public function setSettlementTotalRefunded($settlementTotalRefunded)
    {
        $this->container['settlementTotalRefunded'] = $settlementTotalRefunded;

        return $this;
    }

    /**
     * Gets settlementTotalCommission
     *
     * @return string|null
     */
    public function getSettlementTotalCommission()
    {
        return $this->container['settlementTotalCommission'];
    }

    /**
     * Sets settlementTotalCommission
     *
     * @param string|null $settlementTotalCommission Total commission paid by the merchant, in order settlement currency.
     *
     * @return self
     */
    public function setSettlementTotalCommission($settlementTotalCommission)
    {
        $this->container['settlementTotalCommission'] = $settlementTotalCommission;

        return $this;
    }

    /**
     * Gets settlementBaseCommission
     *
     * @return string|null
     */
    public function getSettlementBaseCommission()
    {
        return $this->container['settlementBaseCommission'];
    }

    /**
     * Sets settlementBaseCommission
     *
     * @param string|null $settlementBaseCommission Base commission paid by the merchant, in order settlement currency.
     *
     * @return self
     */
    public function setSettlementBaseCommission($settlementBaseCommission)
    {
        $this->container['settlementBaseCommission'] = $settlementBaseCommission;

        return $this;
    }

    /**
     * Gets settlementPayoutCommission
     *
     * @return string|null
     */
    public function getSettlementPayoutCommission()
    {
        return $this->container['settlementPayoutCommission'];
    }

    /**
     * Sets settlementPayoutCommission
     *
     * @param string|null $settlementPayoutCommission Payout commission paid by the merchant, in order settlement currency.
     *
     * @return self
     */
    public function setSettlementPayoutCommission($settlementPayoutCommission)
    {
        $this->container['settlementPayoutCommission'] = $settlementPayoutCommission;

        return $this;
    }

    /**
     * Gets settlementDynamicCommission
     *
     * @return string|null
     */
    public function getSettlementDynamicCommission()
    {
        return $this->container['settlementDynamicCommission'];
    }

    /**
     * Sets settlementDynamicCommission
     *
     * @param string|null $settlementDynamicCommission Dynamic commission paid by the merchant (commission of the dynamic part), in order settlement currency.
     *
     * @return self
     */
    public function setSettlementDynamicCommission($settlementDynamicCommission)
    {
        $this->container['settlementDynamicCommission'] = $settlementDynamicCommission;

        return $this;
    }

    /**
     * Gets taxation
     *
     * @return \WigandtTech\Refurbed\Model\OrderItemTaxation|null
     */
    public function getTaxation()
    {
        return $this->container['taxation'];
    }

    /**
     * Sets taxation
     *
     * @param \WigandtTech\Refurbed\Model\OrderItemTaxation|null $taxation taxation
     *
     * @return self
     */
    public function setTaxation($taxation)
    {
        $this->container['taxation'] = $taxation;

        return $this;
    }

    /**
     * Gets isRefundable
     *
     * @return bool|null
     */
    public function getIsRefundable()
    {
        return $this->container['isRefundable'];
    }

    /**
     * Sets isRefundable
     *
     * @param bool|null $isRefundable Indicates whether this item is currently refundable.
     *
     * @return self
     */
    public function setIsRefundable($isRefundable)
    {
        $this->container['isRefundable'] = $isRefundable;

        return $this;
    }

    /**
     * Gets offerData
     *
     * @return \WigandtTech\Refurbed\Model\OfferData|null
     */
    public function getOfferData()
    {
        return $this->container['offerData'];
    }

    /**
     * Sets offerData
     *
     * @param \WigandtTech\Refurbed\Model\OfferData|null $offerData offerData
     *
     * @return self
     */
    public function setOfferData($offerData)
    {
        $this->container['offerData'] = $offerData;

        return $this;
    }

    /**
     * Gets parcelTrackingUrl
     *
     * @return string|null
     */
    public function getParcelTrackingUrl()
    {
        return $this->container['parcelTrackingUrl'];
    }

    /**
     * Sets parcelTrackingUrl
     *
     * @param string|null $parcelTrackingUrl Parcel tracking link. Needs to be a valid HTTP(S) URL.
     *
     * @return self
     */
    public function setParcelTrackingUrl($parcelTrackingUrl)
    {
        $this->container['parcelTrackingUrl'] = $parcelTrackingUrl;

        return $this;
    }

    /**
     * Gets itemIdentifier
     *
     * @return string|null
     */
    public function getItemIdentifier()
    {
        return $this->container['itemIdentifier'];
    }

    /**
     * Sets itemIdentifier
     *
     * @param string|null $itemIdentifier IMEI (if smartphone) or serial number (other product categories) of the item shipped.
     *
     * @return self
     */
    public function setItemIdentifier($itemIdentifier)
    {
        $this->container['itemIdentifier'] = $itemIdentifier;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


