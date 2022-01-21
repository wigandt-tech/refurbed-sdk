<?php
/**
 * OfferData
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
 * OpenAPI Generator version: 5.3.1
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
 * OfferData Class Doc Comment
 *
 * @category Class
 * @package  WigandtTech\Refurbed
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class OfferData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OfferData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'offerId' => 'string',
        'offerVersion' => 'string',
        'offerOrderExchangeRate' => 'string',
        'offerWarranty' => '\WigandtTech\Refurbed\Model\OfferWarranty',
        'offerGrading' => '\WigandtTech\Refurbed\Model\OfferGrading',
        'shippingProfileId' => 'string',
        'shippingProfileVersion' => 'string',
        'shippingCosts' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'offerId' => 'int64',
        'offerVersion' => 'int64',
        'offerOrderExchangeRate' => null,
        'offerWarranty' => null,
        'offerGrading' => null,
        'shippingProfileId' => 'int64',
        'shippingProfileVersion' => 'int64',
        'shippingCosts' => null
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
        'offerId' => 'offer_id',
        'offerVersion' => 'offer_version',
        'offerOrderExchangeRate' => 'offer_order_exchange_rate',
        'offerWarranty' => 'offer_warranty',
        'offerGrading' => 'offer_grading',
        'shippingProfileId' => 'shipping_profile_id',
        'shippingProfileVersion' => 'shipping_profile_version',
        'shippingCosts' => 'shipping_costs'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'offerId' => 'setOfferId',
        'offerVersion' => 'setOfferVersion',
        'offerOrderExchangeRate' => 'setOfferOrderExchangeRate',
        'offerWarranty' => 'setOfferWarranty',
        'offerGrading' => 'setOfferGrading',
        'shippingProfileId' => 'setShippingProfileId',
        'shippingProfileVersion' => 'setShippingProfileVersion',
        'shippingCosts' => 'setShippingCosts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'offerId' => 'getOfferId',
        'offerVersion' => 'getOfferVersion',
        'offerOrderExchangeRate' => 'getOfferOrderExchangeRate',
        'offerWarranty' => 'getOfferWarranty',
        'offerGrading' => 'getOfferGrading',
        'shippingProfileId' => 'getShippingProfileId',
        'shippingProfileVersion' => 'getShippingProfileVersion',
        'shippingCosts' => 'getShippingCosts'
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
        $this->container['offerId'] = $data['offerId'] ?? null;
        $this->container['offerVersion'] = $data['offerVersion'] ?? null;
        $this->container['offerOrderExchangeRate'] = $data['offerOrderExchangeRate'] ?? null;
        $this->container['offerWarranty'] = $data['offerWarranty'] ?? null;
        $this->container['offerGrading'] = $data['offerGrading'] ?? null;
        $this->container['shippingProfileId'] = $data['shippingProfileId'] ?? null;
        $this->container['shippingProfileVersion'] = $data['shippingProfileVersion'] ?? null;
        $this->container['shippingCosts'] = $data['shippingCosts'] ?? null;
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
     * Gets offerId
     *
     * @return string|null
     */
    public function getOfferId()
    {
        return $this->container['offerId'];
    }

    /**
     * Sets offerId
     *
     * @param string|null $offerId offerId
     *
     * @return self
     */
    public function setOfferId($offerId)
    {
        $this->container['offerId'] = $offerId;

        return $this;
    }

    /**
     * Gets offerVersion
     *
     * @return string|null
     */
    public function getOfferVersion()
    {
        return $this->container['offerVersion'];
    }

    /**
     * Sets offerVersion
     *
     * @param string|null $offerVersion offerVersion
     *
     * @return self
     */
    public function setOfferVersion($offerVersion)
    {
        $this->container['offerVersion'] = $offerVersion;

        return $this;
    }

    /**
     * Gets offerOrderExchangeRate
     *
     * @return string|null
     */
    public function getOfferOrderExchangeRate()
    {
        return $this->container['offerOrderExchangeRate'];
    }

    /**
     * Sets offerOrderExchangeRate
     *
     * @param string|null $offerOrderExchangeRate Exchange rate applied to convert amounts from offer currency to order currency.
     *
     * @return self
     */
    public function setOfferOrderExchangeRate($offerOrderExchangeRate)
    {
        $this->container['offerOrderExchangeRate'] = $offerOrderExchangeRate;

        return $this;
    }

    /**
     * Gets offerWarranty
     *
     * @return \WigandtTech\Refurbed\Model\OfferWarranty|null
     */
    public function getOfferWarranty()
    {
        return $this->container['offerWarranty'];
    }

    /**
     * Sets offerWarranty
     *
     * @param \WigandtTech\Refurbed\Model\OfferWarranty|null $offerWarranty offerWarranty
     *
     * @return self
     */
    public function setOfferWarranty($offerWarranty)
    {
        $this->container['offerWarranty'] = $offerWarranty;

        return $this;
    }

    /**
     * Gets offerGrading
     *
     * @return \WigandtTech\Refurbed\Model\OfferGrading|null
     */
    public function getOfferGrading()
    {
        return $this->container['offerGrading'];
    }

    /**
     * Sets offerGrading
     *
     * @param \WigandtTech\Refurbed\Model\OfferGrading|null $offerGrading offerGrading
     *
     * @return self
     */
    public function setOfferGrading($offerGrading)
    {
        $this->container['offerGrading'] = $offerGrading;

        return $this;
    }

    /**
     * Gets shippingProfileId
     *
     * @return string|null
     */
    public function getShippingProfileId()
    {
        return $this->container['shippingProfileId'];
    }

    /**
     * Sets shippingProfileId
     *
     * @param string|null $shippingProfileId shippingProfileId
     *
     * @return self
     */
    public function setShippingProfileId($shippingProfileId)
    {
        $this->container['shippingProfileId'] = $shippingProfileId;

        return $this;
    }

    /**
     * Gets shippingProfileVersion
     *
     * @return string|null
     */
    public function getShippingProfileVersion()
    {
        return $this->container['shippingProfileVersion'];
    }

    /**
     * Sets shippingProfileVersion
     *
     * @param string|null $shippingProfileVersion Shipping profiles on old orders do not have proper version information attached to them. This is only set for newer orders.
     *
     * @return self
     */
    public function setShippingProfileVersion($shippingProfileVersion)
    {
        $this->container['shippingProfileVersion'] = $shippingProfileVersion;

        return $this;
    }

    /**
     * Gets shippingCosts
     *
     * @return string|null
     */
    public function getShippingCosts()
    {
        return $this->container['shippingCosts'];
    }

    /**
     * Sets shippingCosts
     *
     * @param string|null $shippingCosts The shipping costs, in order currency.
     *
     * @return self
     */
    public function setShippingCosts($shippingCosts)
    {
        $this->container['shippingCosts'] = $shippingCosts;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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

