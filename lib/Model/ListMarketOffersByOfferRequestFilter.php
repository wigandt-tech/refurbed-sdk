<?php
/**
 * ListMarketOffersByOfferRequestFilter
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

use \ArrayAccess;
use \WigandtTech\Refurbed\ObjectSerializer;

/**
 * ListMarketOffersByOfferRequestFilter Class Doc Comment
 *
 * @category Class
 * @package  WigandtTech\Refurbed
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ListMarketOffersByOfferRequestFilter implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ListMarketOffersByOfferRequest.Filter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => '\WigandtTech\Refurbed\Model\MarketOfferIdentifierFilter',
        'marketPriceMarketCode' => '\WigandtTech\Refurbed\Model\StringFilter',
        'marketPriceIsSiteMarket' => '\WigandtTech\Refurbed\Model\BoolFilter',
        'marketPriceIsCalculated' => '\WigandtTech\Refurbed\Model\BoolFilter',
        'marketPriceCurrencyCode' => '\WigandtTech\Refurbed\Model\CurrencyCodeFilter',
        'marketPricePrice' => '\WigandtTech\Refurbed\Model\NumericRangeFilter',
        'marketPriceMinPrice' => '\WigandtTech\Refurbed\Model\OptionalNumericRangeFilter',
        'marketPriceSiteMarketCurrencyCode' => '\WigandtTech\Refurbed\Model\CurrencyCodeFilter',
        'marketPriceSiteMarketPrice' => '\WigandtTech\Refurbed\Model\NumericRangeFilter',
        'marketPriceSiteMarketMinPrice' => '\WigandtTech\Refurbed\Model\OptionalNumericRangeFilter',
        'marketPriceVisibility' => '\WigandtTech\Refurbed\Model\OfferVisibilityFilter',
        'marketPriceInstanceBuyboxState' => '\WigandtTech\Refurbed\Model\OfferBuyboxStateFilter'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'marketPriceMarketCode' => null,
        'marketPriceIsSiteMarket' => null,
        'marketPriceIsCalculated' => null,
        'marketPriceCurrencyCode' => null,
        'marketPricePrice' => null,
        'marketPriceMinPrice' => null,
        'marketPriceSiteMarketCurrencyCode' => null,
        'marketPriceSiteMarketPrice' => null,
        'marketPriceSiteMarketMinPrice' => null,
        'marketPriceVisibility' => null,
        'marketPriceInstanceBuyboxState' => null
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
        'marketPriceMarketCode' => 'market_price_market_code',
        'marketPriceIsSiteMarket' => 'market_price_is_site_market',
        'marketPriceIsCalculated' => 'market_price_is_calculated',
        'marketPriceCurrencyCode' => 'market_price_currency_code',
        'marketPricePrice' => 'market_price_price',
        'marketPriceMinPrice' => 'market_price_min_price',
        'marketPriceSiteMarketCurrencyCode' => 'market_price_site_market_currency_code',
        'marketPriceSiteMarketPrice' => 'market_price_site_market_price',
        'marketPriceSiteMarketMinPrice' => 'market_price_site_market_min_price',
        'marketPriceVisibility' => 'market_price_visibility',
        'marketPriceInstanceBuyboxState' => 'market_price_instance_buybox_state'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'marketPriceMarketCode' => 'setMarketPriceMarketCode',
        'marketPriceIsSiteMarket' => 'setMarketPriceIsSiteMarket',
        'marketPriceIsCalculated' => 'setMarketPriceIsCalculated',
        'marketPriceCurrencyCode' => 'setMarketPriceCurrencyCode',
        'marketPricePrice' => 'setMarketPricePrice',
        'marketPriceMinPrice' => 'setMarketPriceMinPrice',
        'marketPriceSiteMarketCurrencyCode' => 'setMarketPriceSiteMarketCurrencyCode',
        'marketPriceSiteMarketPrice' => 'setMarketPriceSiteMarketPrice',
        'marketPriceSiteMarketMinPrice' => 'setMarketPriceSiteMarketMinPrice',
        'marketPriceVisibility' => 'setMarketPriceVisibility',
        'marketPriceInstanceBuyboxState' => 'setMarketPriceInstanceBuyboxState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'marketPriceMarketCode' => 'getMarketPriceMarketCode',
        'marketPriceIsSiteMarket' => 'getMarketPriceIsSiteMarket',
        'marketPriceIsCalculated' => 'getMarketPriceIsCalculated',
        'marketPriceCurrencyCode' => 'getMarketPriceCurrencyCode',
        'marketPricePrice' => 'getMarketPricePrice',
        'marketPriceMinPrice' => 'getMarketPriceMinPrice',
        'marketPriceSiteMarketCurrencyCode' => 'getMarketPriceSiteMarketCurrencyCode',
        'marketPriceSiteMarketPrice' => 'getMarketPriceSiteMarketPrice',
        'marketPriceSiteMarketMinPrice' => 'getMarketPriceSiteMarketMinPrice',
        'marketPriceVisibility' => 'getMarketPriceVisibility',
        'marketPriceInstanceBuyboxState' => 'getMarketPriceInstanceBuyboxState'
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
        $this->container['marketPriceMarketCode'] = $data['marketPriceMarketCode'] ?? null;
        $this->container['marketPriceIsSiteMarket'] = $data['marketPriceIsSiteMarket'] ?? null;
        $this->container['marketPriceIsCalculated'] = $data['marketPriceIsCalculated'] ?? null;
        $this->container['marketPriceCurrencyCode'] = $data['marketPriceCurrencyCode'] ?? null;
        $this->container['marketPricePrice'] = $data['marketPricePrice'] ?? null;
        $this->container['marketPriceMinPrice'] = $data['marketPriceMinPrice'] ?? null;
        $this->container['marketPriceSiteMarketCurrencyCode'] = $data['marketPriceSiteMarketCurrencyCode'] ?? null;
        $this->container['marketPriceSiteMarketPrice'] = $data['marketPriceSiteMarketPrice'] ?? null;
        $this->container['marketPriceSiteMarketMinPrice'] = $data['marketPriceSiteMarketMinPrice'] ?? null;
        $this->container['marketPriceVisibility'] = $data['marketPriceVisibility'] ?? null;
        $this->container['marketPriceInstanceBuyboxState'] = $data['marketPriceInstanceBuyboxState'] ?? null;
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
     * @return \WigandtTech\Refurbed\Model\MarketOfferIdentifierFilter|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param \WigandtTech\Refurbed\Model\MarketOfferIdentifierFilter|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets marketPriceMarketCode
     *
     * @return \WigandtTech\Refurbed\Model\StringFilter|null
     */
    public function getMarketPriceMarketCode()
    {
        return $this->container['marketPriceMarketCode'];
    }

    /**
     * Sets marketPriceMarketCode
     *
     * @param \WigandtTech\Refurbed\Model\StringFilter|null $marketPriceMarketCode marketPriceMarketCode
     *
     * @return self
     */
    public function setMarketPriceMarketCode($marketPriceMarketCode)
    {
        $this->container['marketPriceMarketCode'] = $marketPriceMarketCode;

        return $this;
    }

    /**
     * Gets marketPriceIsSiteMarket
     *
     * @return \WigandtTech\Refurbed\Model\BoolFilter|null
     */
    public function getMarketPriceIsSiteMarket()
    {
        return $this->container['marketPriceIsSiteMarket'];
    }

    /**
     * Sets marketPriceIsSiteMarket
     *
     * @param \WigandtTech\Refurbed\Model\BoolFilter|null $marketPriceIsSiteMarket marketPriceIsSiteMarket
     *
     * @return self
     */
    public function setMarketPriceIsSiteMarket($marketPriceIsSiteMarket)
    {
        $this->container['marketPriceIsSiteMarket'] = $marketPriceIsSiteMarket;

        return $this;
    }

    /**
     * Gets marketPriceIsCalculated
     *
     * @return \WigandtTech\Refurbed\Model\BoolFilter|null
     */
    public function getMarketPriceIsCalculated()
    {
        return $this->container['marketPriceIsCalculated'];
    }

    /**
     * Sets marketPriceIsCalculated
     *
     * @param \WigandtTech\Refurbed\Model\BoolFilter|null $marketPriceIsCalculated marketPriceIsCalculated
     *
     * @return self
     */
    public function setMarketPriceIsCalculated($marketPriceIsCalculated)
    {
        $this->container['marketPriceIsCalculated'] = $marketPriceIsCalculated;

        return $this;
    }

    /**
     * Gets marketPriceCurrencyCode
     *
     * @return \WigandtTech\Refurbed\Model\CurrencyCodeFilter|null
     */
    public function getMarketPriceCurrencyCode()
    {
        return $this->container['marketPriceCurrencyCode'];
    }

    /**
     * Sets marketPriceCurrencyCode
     *
     * @param \WigandtTech\Refurbed\Model\CurrencyCodeFilter|null $marketPriceCurrencyCode marketPriceCurrencyCode
     *
     * @return self
     */
    public function setMarketPriceCurrencyCode($marketPriceCurrencyCode)
    {
        $this->container['marketPriceCurrencyCode'] = $marketPriceCurrencyCode;

        return $this;
    }

    /**
     * Gets marketPricePrice
     *
     * @return \WigandtTech\Refurbed\Model\NumericRangeFilter|null
     */
    public function getMarketPricePrice()
    {
        return $this->container['marketPricePrice'];
    }

    /**
     * Sets marketPricePrice
     *
     * @param \WigandtTech\Refurbed\Model\NumericRangeFilter|null $marketPricePrice marketPricePrice
     *
     * @return self
     */
    public function setMarketPricePrice($marketPricePrice)
    {
        $this->container['marketPricePrice'] = $marketPricePrice;

        return $this;
    }

    /**
     * Gets marketPriceMinPrice
     *
     * @return \WigandtTech\Refurbed\Model\OptionalNumericRangeFilter|null
     */
    public function getMarketPriceMinPrice()
    {
        return $this->container['marketPriceMinPrice'];
    }

    /**
     * Sets marketPriceMinPrice
     *
     * @param \WigandtTech\Refurbed\Model\OptionalNumericRangeFilter|null $marketPriceMinPrice marketPriceMinPrice
     *
     * @return self
     */
    public function setMarketPriceMinPrice($marketPriceMinPrice)
    {
        $this->container['marketPriceMinPrice'] = $marketPriceMinPrice;

        return $this;
    }

    /**
     * Gets marketPriceSiteMarketCurrencyCode
     *
     * @return \WigandtTech\Refurbed\Model\CurrencyCodeFilter|null
     */
    public function getMarketPriceSiteMarketCurrencyCode()
    {
        return $this->container['marketPriceSiteMarketCurrencyCode'];
    }

    /**
     * Sets marketPriceSiteMarketCurrencyCode
     *
     * @param \WigandtTech\Refurbed\Model\CurrencyCodeFilter|null $marketPriceSiteMarketCurrencyCode marketPriceSiteMarketCurrencyCode
     *
     * @return self
     */
    public function setMarketPriceSiteMarketCurrencyCode($marketPriceSiteMarketCurrencyCode)
    {
        $this->container['marketPriceSiteMarketCurrencyCode'] = $marketPriceSiteMarketCurrencyCode;

        return $this;
    }

    /**
     * Gets marketPriceSiteMarketPrice
     *
     * @return \WigandtTech\Refurbed\Model\NumericRangeFilter|null
     */
    public function getMarketPriceSiteMarketPrice()
    {
        return $this->container['marketPriceSiteMarketPrice'];
    }

    /**
     * Sets marketPriceSiteMarketPrice
     *
     * @param \WigandtTech\Refurbed\Model\NumericRangeFilter|null $marketPriceSiteMarketPrice marketPriceSiteMarketPrice
     *
     * @return self
     */
    public function setMarketPriceSiteMarketPrice($marketPriceSiteMarketPrice)
    {
        $this->container['marketPriceSiteMarketPrice'] = $marketPriceSiteMarketPrice;

        return $this;
    }

    /**
     * Gets marketPriceSiteMarketMinPrice
     *
     * @return \WigandtTech\Refurbed\Model\OptionalNumericRangeFilter|null
     */
    public function getMarketPriceSiteMarketMinPrice()
    {
        return $this->container['marketPriceSiteMarketMinPrice'];
    }

    /**
     * Sets marketPriceSiteMarketMinPrice
     *
     * @param \WigandtTech\Refurbed\Model\OptionalNumericRangeFilter|null $marketPriceSiteMarketMinPrice marketPriceSiteMarketMinPrice
     *
     * @return self
     */
    public function setMarketPriceSiteMarketMinPrice($marketPriceSiteMarketMinPrice)
    {
        $this->container['marketPriceSiteMarketMinPrice'] = $marketPriceSiteMarketMinPrice;

        return $this;
    }

    /**
     * Gets marketPriceVisibility
     *
     * @return \WigandtTech\Refurbed\Model\OfferVisibilityFilter|null
     */
    public function getMarketPriceVisibility()
    {
        return $this->container['marketPriceVisibility'];
    }

    /**
     * Sets marketPriceVisibility
     *
     * @param \WigandtTech\Refurbed\Model\OfferVisibilityFilter|null $marketPriceVisibility marketPriceVisibility
     *
     * @return self
     */
    public function setMarketPriceVisibility($marketPriceVisibility)
    {
        $this->container['marketPriceVisibility'] = $marketPriceVisibility;

        return $this;
    }

    /**
     * Gets marketPriceInstanceBuyboxState
     *
     * @return \WigandtTech\Refurbed\Model\OfferBuyboxStateFilter|null
     */
    public function getMarketPriceInstanceBuyboxState()
    {
        return $this->container['marketPriceInstanceBuyboxState'];
    }

    /**
     * Sets marketPriceInstanceBuyboxState
     *
     * @param \WigandtTech\Refurbed\Model\OfferBuyboxStateFilter|null $marketPriceInstanceBuyboxState marketPriceInstanceBuyboxState
     *
     * @return self
     */
    public function setMarketPriceInstanceBuyboxState($marketPriceInstanceBuyboxState)
    {
        $this->container['marketPriceInstanceBuyboxState'] = $marketPriceInstanceBuyboxState;

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


