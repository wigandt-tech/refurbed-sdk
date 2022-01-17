<?php
/**
 * UpdateDestination
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
 * UpdateDestination Class Doc Comment
 *
 * @category Class
 * @package  WigandtTech\Refurbed
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class UpdateDestination implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UpdateDestination';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'marketCode' => 'string',
        'currencyCode' => '\WigandtTech\Refurbed\Model\CurrencyCode',
        'shippingCosts' => 'string',
        'minDeliveryDays' => 'int',
        'maxDeliveryDays' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'marketCode' => null,
        'currencyCode' => null,
        'shippingCosts' => null,
        'minDeliveryDays' => 'int64',
        'maxDeliveryDays' => 'int64'
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
        'marketCode' => 'market_code',
        'currencyCode' => 'currency_code',
        'shippingCosts' => 'shipping_costs',
        'minDeliveryDays' => 'min_delivery_days',
        'maxDeliveryDays' => 'max_delivery_days'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'marketCode' => 'setMarketCode',
        'currencyCode' => 'setCurrencyCode',
        'shippingCosts' => 'setShippingCosts',
        'minDeliveryDays' => 'setMinDeliveryDays',
        'maxDeliveryDays' => 'setMaxDeliveryDays'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'marketCode' => 'getMarketCode',
        'currencyCode' => 'getCurrencyCode',
        'shippingCosts' => 'getShippingCosts',
        'minDeliveryDays' => 'getMinDeliveryDays',
        'maxDeliveryDays' => 'getMaxDeliveryDays'
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
        $this->container['marketCode'] = $data['marketCode'] ?? null;
        $this->container['currencyCode'] = $data['currencyCode'] ?? null;
        $this->container['shippingCosts'] = $data['shippingCosts'] ?? null;
        $this->container['minDeliveryDays'] = $data['minDeliveryDays'] ?? null;
        $this->container['maxDeliveryDays'] = $data['maxDeliveryDays'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['marketCode'] === null) {
            $invalidProperties[] = "'marketCode' can't be null";
        }
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
     * Gets marketCode
     *
     * @return string
     */
    public function getMarketCode()
    {
        return $this->container['marketCode'];
    }

    /**
     * Sets marketCode
     *
     * @param string $marketCode marketCode
     *
     * @return self
     */
    public function setMarketCode($marketCode)
    {
        $this->container['marketCode'] = $marketCode;

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
     * @param string|null $shippingCosts shippingCosts
     *
     * @return self
     */
    public function setShippingCosts($shippingCosts)
    {
        $this->container['shippingCosts'] = $shippingCosts;

        return $this;
    }

    /**
     * Gets minDeliveryDays
     *
     * @return int|null
     */
    public function getMinDeliveryDays()
    {
        return $this->container['minDeliveryDays'];
    }

    /**
     * Sets minDeliveryDays
     *
     * @param int|null $minDeliveryDays minDeliveryDays
     *
     * @return self
     */
    public function setMinDeliveryDays($minDeliveryDays)
    {
        $this->container['minDeliveryDays'] = $minDeliveryDays;

        return $this;
    }

    /**
     * Gets maxDeliveryDays
     *
     * @return int|null
     */
    public function getMaxDeliveryDays()
    {
        return $this->container['maxDeliveryDays'];
    }

    /**
     * Sets maxDeliveryDays
     *
     * @param int|null $maxDeliveryDays maxDeliveryDays
     *
     * @return self
     */
    public function setMaxDeliveryDays($maxDeliveryDays)
    {
        $this->container['maxDeliveryDays'] = $maxDeliveryDays;

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


