<?php
/**
 * ListMarketOffersRequestFilter
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
 * ListMarketOffersRequestFilter Class Doc Comment
 *
 * @category Class
 * @package  WigandtTech\Refurbed
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ListMarketOffersRequestFilter implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ListMarketOffersRequest.Filter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => '\WigandtTech\Refurbed\Model\MarketOfferIdentifierFilter',
        'offerId' => '\WigandtTech\Refurbed\Model\Int64Filter',
        'createdAt' => '\WigandtTech\Refurbed\Model\TimestampRangeFilter',
        'instanceId' => '\WigandtTech\Refurbed\Model\Int64Filter',
        'state' => '\WigandtTech\Refurbed\Model\OfferStateFilter',
        'name' => '\WigandtTech\Refurbed\Model\ListMarketOffersRequestFilterOfferNameFilter',
        'sku' => '\WigandtTech\Refurbed\Model\OfferSKUFilter',
        'grading' => '\WigandtTech\Refurbed\Model\OfferGradingFilter',
        'warranty' => '\WigandtTech\Refurbed\Model\OfferWarrantyFilter',
        'stock' => '\WigandtTech\Refurbed\Model\UInt32RangeFilter',
        'shippingProfileId' => '\WigandtTech\Refurbed\Model\Int64Filter',
        'secondaryShippingProfileId' => '\WigandtTech\Refurbed\Model\OptionalInt64Filter',
        'taxation' => '\WigandtTech\Refurbed\Model\OfferTaxationFilter',
        'referenceCurrencyCode' => '\WigandtTech\Refurbed\Model\CurrencyCodeFilter',
        'referencePrice' => '\WigandtTech\Refurbed\Model\NumericRangeFilter',
        'referenceMinPrice' => '\WigandtTech\Refurbed\Model\OptionalNumericRangeFilter',
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
        'offerId' => null,
        'createdAt' => null,
        'instanceId' => null,
        'state' => null,
        'name' => null,
        'sku' => null,
        'grading' => null,
        'warranty' => null,
        'stock' => null,
        'shippingProfileId' => null,
        'secondaryShippingProfileId' => null,
        'taxation' => null,
        'referenceCurrencyCode' => null,
        'referencePrice' => null,
        'referenceMinPrice' => null,
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
        'offerId' => 'offer_id',
        'createdAt' => 'created_at',
        'instanceId' => 'instance_id',
        'state' => 'state',
        'name' => 'name',
        'sku' => 'sku',
        'grading' => 'grading',
        'warranty' => 'warranty',
        'stock' => 'stock',
        'shippingProfileId' => 'shipping_profile_id',
        'secondaryShippingProfileId' => 'secondary_shipping_profile_id',
        'taxation' => 'taxation',
        'referenceCurrencyCode' => 'reference_currency_code',
        'referencePrice' => 'reference_price',
        'referenceMinPrice' => 'reference_min_price',
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
        'offerId' => 'setOfferId',
        'createdAt' => 'setCreatedAt',
        'instanceId' => 'setInstanceId',
        'state' => 'setState',
        'name' => 'setName',
        'sku' => 'setSku',
        'grading' => 'setGrading',
        'warranty' => 'setWarranty',
        'stock' => 'setStock',
        'shippingProfileId' => 'setShippingProfileId',
        'secondaryShippingProfileId' => 'setSecondaryShippingProfileId',
        'taxation' => 'setTaxation',
        'referenceCurrencyCode' => 'setReferenceCurrencyCode',
        'referencePrice' => 'setReferencePrice',
        'referenceMinPrice' => 'setReferenceMinPrice',
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
        'offerId' => 'getOfferId',
        'createdAt' => 'getCreatedAt',
        'instanceId' => 'getInstanceId',
        'state' => 'getState',
        'name' => 'getName',
        'sku' => 'getSku',
        'grading' => 'getGrading',
        'warranty' => 'getWarranty',
        'stock' => 'getStock',
        'shippingProfileId' => 'getShippingProfileId',
        'secondaryShippingProfileId' => 'getSecondaryShippingProfileId',
        'taxation' => 'getTaxation',
        'referenceCurrencyCode' => 'getReferenceCurrencyCode',
        'referencePrice' => 'getReferencePrice',
        'referenceMinPrice' => 'getReferenceMinPrice',
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
        $this->container['offerId'] = $data['offerId'] ?? null;
        $this->container['createdAt'] = $data['createdAt'] ?? null;
        $this->container['instanceId'] = $data['instanceId'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['sku'] = $data['sku'] ?? null;
        $this->container['grading'] = $data['grading'] ?? null;
        $this->container['warranty'] = $data['warranty'] ?? null;
        $this->container['stock'] = $data['stock'] ?? null;
        $this->container['shippingProfileId'] = $data['shippingProfileId'] ?? null;
        $this->container['secondaryShippingProfileId'] = $data['secondaryShippingProfileId'] ?? null;
        $this->container['taxation'] = $data['taxation'] ?? null;
        $this->container['referenceCurrencyCode'] = $data['referenceCurrencyCode'] ?? null;
        $this->container['referencePrice'] = $data['referencePrice'] ?? null;
        $this->container['referenceMinPrice'] = $data['referenceMinPrice'] ?? null;
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
     * Gets offerId
     *
     * @return \WigandtTech\Refurbed\Model\Int64Filter|null
     */
    public function getOfferId()
    {
        return $this->container['offerId'];
    }

    /**
     * Sets offerId
     *
     * @param \WigandtTech\Refurbed\Model\Int64Filter|null $offerId offerId
     *
     * @return self
     */
    public function setOfferId($offerId)
    {
        $this->container['offerId'] = $offerId;

        return $this;
    }

    /**
     * Gets createdAt
     *
     * @return \WigandtTech\Refurbed\Model\TimestampRangeFilter|null
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param \WigandtTech\Refurbed\Model\TimestampRangeFilter|null $createdAt createdAt
     *
     * @return self
     */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets instanceId
     *
     * @return \WigandtTech\Refurbed\Model\Int64Filter|null
     */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
     * Sets instanceId
     *
     * @param \WigandtTech\Refurbed\Model\Int64Filter|null $instanceId instanceId
     *
     * @return self
     */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;

        return $this;
    }

    /**
     * Gets state
     *
     * @return \WigandtTech\Refurbed\Model\OfferStateFilter|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \WigandtTech\Refurbed\Model\OfferStateFilter|null $state state
     *
     * @return self
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets name
     *
     * @return \WigandtTech\Refurbed\Model\ListMarketOffersRequestFilterOfferNameFilter|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param \WigandtTech\Refurbed\Model\ListMarketOffersRequestFilterOfferNameFilter|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return \WigandtTech\Refurbed\Model\OfferSKUFilter|null
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param \WigandtTech\Refurbed\Model\OfferSKUFilter|null $sku sku
     *
     * @return self
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets grading
     *
     * @return \WigandtTech\Refurbed\Model\OfferGradingFilter|null
     */
    public function getGrading()
    {
        return $this->container['grading'];
    }

    /**
     * Sets grading
     *
     * @param \WigandtTech\Refurbed\Model\OfferGradingFilter|null $grading grading
     *
     * @return self
     */
    public function setGrading($grading)
    {
        $this->container['grading'] = $grading;

        return $this;
    }

    /**
     * Gets warranty
     *
     * @return \WigandtTech\Refurbed\Model\OfferWarrantyFilter|null
     */
    public function getWarranty()
    {
        return $this->container['warranty'];
    }

    /**
     * Sets warranty
     *
     * @param \WigandtTech\Refurbed\Model\OfferWarrantyFilter|null $warranty warranty
     *
     * @return self
     */
    public function setWarranty($warranty)
    {
        $this->container['warranty'] = $warranty;

        return $this;
    }

    /**
     * Gets stock
     *
     * @return \WigandtTech\Refurbed\Model\UInt32RangeFilter|null
     */
    public function getStock()
    {
        return $this->container['stock'];
    }

    /**
     * Sets stock
     *
     * @param \WigandtTech\Refurbed\Model\UInt32RangeFilter|null $stock stock
     *
     * @return self
     */
    public function setStock($stock)
    {
        $this->container['stock'] = $stock;

        return $this;
    }

    /**
     * Gets shippingProfileId
     *
     * @return \WigandtTech\Refurbed\Model\Int64Filter|null
     */
    public function getShippingProfileId()
    {
        return $this->container['shippingProfileId'];
    }

    /**
     * Sets shippingProfileId
     *
     * @param \WigandtTech\Refurbed\Model\Int64Filter|null $shippingProfileId shippingProfileId
     *
     * @return self
     */
    public function setShippingProfileId($shippingProfileId)
    {
        $this->container['shippingProfileId'] = $shippingProfileId;

        return $this;
    }

    /**
     * Gets secondaryShippingProfileId
     *
     * @return \WigandtTech\Refurbed\Model\OptionalInt64Filter|null
     */
    public function getSecondaryShippingProfileId()
    {
        return $this->container['secondaryShippingProfileId'];
    }

    /**
     * Sets secondaryShippingProfileId
     *
     * @param \WigandtTech\Refurbed\Model\OptionalInt64Filter|null $secondaryShippingProfileId secondaryShippingProfileId
     *
     * @return self
     */
    public function setSecondaryShippingProfileId($secondaryShippingProfileId)
    {
        $this->container['secondaryShippingProfileId'] = $secondaryShippingProfileId;

        return $this;
    }

    /**
     * Gets taxation
     *
     * @return \WigandtTech\Refurbed\Model\OfferTaxationFilter|null
     */
    public function getTaxation()
    {
        return $this->container['taxation'];
    }

    /**
     * Sets taxation
     *
     * @param \WigandtTech\Refurbed\Model\OfferTaxationFilter|null $taxation taxation
     *
     * @return self
     */
    public function setTaxation($taxation)
    {
        $this->container['taxation'] = $taxation;

        return $this;
    }

    /**
     * Gets referenceCurrencyCode
     *
     * @return \WigandtTech\Refurbed\Model\CurrencyCodeFilter|null
     */
    public function getReferenceCurrencyCode()
    {
        return $this->container['referenceCurrencyCode'];
    }

    /**
     * Sets referenceCurrencyCode
     *
     * @param \WigandtTech\Refurbed\Model\CurrencyCodeFilter|null $referenceCurrencyCode referenceCurrencyCode
     *
     * @return self
     */
    public function setReferenceCurrencyCode($referenceCurrencyCode)
    {
        $this->container['referenceCurrencyCode'] = $referenceCurrencyCode;

        return $this;
    }

    /**
     * Gets referencePrice
     *
     * @return \WigandtTech\Refurbed\Model\NumericRangeFilter|null
     */
    public function getReferencePrice()
    {
        return $this->container['referencePrice'];
    }

    /**
     * Sets referencePrice
     *
     * @param \WigandtTech\Refurbed\Model\NumericRangeFilter|null $referencePrice referencePrice
     *
     * @return self
     */
    public function setReferencePrice($referencePrice)
    {
        $this->container['referencePrice'] = $referencePrice;

        return $this;
    }

    /**
     * Gets referenceMinPrice
     *
     * @return \WigandtTech\Refurbed\Model\OptionalNumericRangeFilter|null
     */
    public function getReferenceMinPrice()
    {
        return $this->container['referenceMinPrice'];
    }

    /**
     * Sets referenceMinPrice
     *
     * @param \WigandtTech\Refurbed\Model\OptionalNumericRangeFilter|null $referenceMinPrice referenceMinPrice
     *
     * @return self
     */
    public function setReferenceMinPrice($referenceMinPrice)
    {
        $this->container['referenceMinPrice'] = $referenceMinPrice;

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


