<?php
/**
 * BatchUpdateOffersRequestUpdate
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
 * BatchUpdateOffersRequestUpdate Class Doc Comment
 *
 * @category Class
 * @package  WigandtTech\Refurbed
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class BatchUpdateOffersRequestUpdate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BatchUpdateOffersRequest.Update';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'identifier' => '\WigandtTech\Refurbed\Model\OfferIdentifier',
        'grading' => '\WigandtTech\Refurbed\Model\OfferGrading',
        'warranty' => '\WigandtTech\Refurbed\Model\OfferWarranty',
        'stock' => 'int',
        'shippingProfileId' => 'string',
        'secondaryShippingProfileId' => 'string',
        'deleteSecondaryShippingProfileId' => 'bool',
        'taxation' => '\WigandtTech\Refurbed\Model\OfferTaxation',
        'referenceCurrencyCode' => '\WigandtTech\Refurbed\Model\CurrencyCode',
        'referencePrice' => 'string',
        'referenceMinPrice' => 'string',
        'deleteReferenceMinPrice' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'identifier' => null,
        'grading' => null,
        'warranty' => null,
        'stock' => 'int64',
        'shippingProfileId' => 'int64',
        'secondaryShippingProfileId' => 'int64',
        'deleteSecondaryShippingProfileId' => null,
        'taxation' => null,
        'referenceCurrencyCode' => null,
        'referencePrice' => null,
        'referenceMinPrice' => null,
        'deleteReferenceMinPrice' => null
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
        'identifier' => 'identifier',
        'grading' => 'grading',
        'warranty' => 'warranty',
        'stock' => 'stock',
        'shippingProfileId' => 'shipping_profile_id',
        'secondaryShippingProfileId' => 'secondary_shipping_profile_id',
        'deleteSecondaryShippingProfileId' => 'delete_secondary_shipping_profile_id',
        'taxation' => 'taxation',
        'referenceCurrencyCode' => 'reference_currency_code',
        'referencePrice' => 'reference_price',
        'referenceMinPrice' => 'reference_min_price',
        'deleteReferenceMinPrice' => 'delete_reference_min_price'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'identifier' => 'setIdentifier',
        'grading' => 'setGrading',
        'warranty' => 'setWarranty',
        'stock' => 'setStock',
        'shippingProfileId' => 'setShippingProfileId',
        'secondaryShippingProfileId' => 'setSecondaryShippingProfileId',
        'deleteSecondaryShippingProfileId' => 'setDeleteSecondaryShippingProfileId',
        'taxation' => 'setTaxation',
        'referenceCurrencyCode' => 'setReferenceCurrencyCode',
        'referencePrice' => 'setReferencePrice',
        'referenceMinPrice' => 'setReferenceMinPrice',
        'deleteReferenceMinPrice' => 'setDeleteReferenceMinPrice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'identifier' => 'getIdentifier',
        'grading' => 'getGrading',
        'warranty' => 'getWarranty',
        'stock' => 'getStock',
        'shippingProfileId' => 'getShippingProfileId',
        'secondaryShippingProfileId' => 'getSecondaryShippingProfileId',
        'deleteSecondaryShippingProfileId' => 'getDeleteSecondaryShippingProfileId',
        'taxation' => 'getTaxation',
        'referenceCurrencyCode' => 'getReferenceCurrencyCode',
        'referencePrice' => 'getReferencePrice',
        'referenceMinPrice' => 'getReferenceMinPrice',
        'deleteReferenceMinPrice' => 'getDeleteReferenceMinPrice'
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
        $this->container['identifier'] = $data['identifier'] ?? null;
        $this->container['grading'] = $data['grading'] ?? null;
        $this->container['warranty'] = $data['warranty'] ?? null;
        $this->container['stock'] = $data['stock'] ?? null;
        $this->container['shippingProfileId'] = $data['shippingProfileId'] ?? null;
        $this->container['secondaryShippingProfileId'] = $data['secondaryShippingProfileId'] ?? null;
        $this->container['deleteSecondaryShippingProfileId'] = $data['deleteSecondaryShippingProfileId'] ?? null;
        $this->container['taxation'] = $data['taxation'] ?? null;
        $this->container['referenceCurrencyCode'] = $data['referenceCurrencyCode'] ?? null;
        $this->container['referencePrice'] = $data['referencePrice'] ?? null;
        $this->container['referenceMinPrice'] = $data['referenceMinPrice'] ?? null;
        $this->container['deleteReferenceMinPrice'] = $data['deleteReferenceMinPrice'] ?? null;
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
     * Gets identifier
     *
     * @return \WigandtTech\Refurbed\Model\OfferIdentifier|null
     */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
     * Sets identifier
     *
     * @param \WigandtTech\Refurbed\Model\OfferIdentifier|null $identifier identifier
     *
     * @return self
     */
    public function setIdentifier($identifier)
    {
        $this->container['identifier'] = $identifier;

        return $this;
    }

    /**
     * Gets grading
     *
     * @return \WigandtTech\Refurbed\Model\OfferGrading|null
     */
    public function getGrading()
    {
        return $this->container['grading'];
    }

    /**
     * Sets grading
     *
     * @param \WigandtTech\Refurbed\Model\OfferGrading|null $grading grading
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
     * @return \WigandtTech\Refurbed\Model\OfferWarranty|null
     */
    public function getWarranty()
    {
        return $this->container['warranty'];
    }

    /**
     * Sets warranty
     *
     * @param \WigandtTech\Refurbed\Model\OfferWarranty|null $warranty warranty
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
     * @return int|null
     */
    public function getStock()
    {
        return $this->container['stock'];
    }

    /**
     * Sets stock
     *
     * @param int|null $stock stock
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
     * Gets secondaryShippingProfileId
     *
     * @return string|null
     */
    public function getSecondaryShippingProfileId()
    {
        return $this->container['secondaryShippingProfileId'];
    }

    /**
     * Sets secondaryShippingProfileId
     *
     * @param string|null $secondaryShippingProfileId secondaryShippingProfileId
     *
     * @return self
     */
    public function setSecondaryShippingProfileId($secondaryShippingProfileId)
    {
        $this->container['secondaryShippingProfileId'] = $secondaryShippingProfileId;

        return $this;
    }

    /**
     * Gets deleteSecondaryShippingProfileId
     *
     * @return bool|null
     */
    public function getDeleteSecondaryShippingProfileId()
    {
        return $this->container['deleteSecondaryShippingProfileId'];
    }

    /**
     * Sets deleteSecondaryShippingProfileId
     *
     * @param bool|null $deleteSecondaryShippingProfileId deleteSecondaryShippingProfileId
     *
     * @return self
     */
    public function setDeleteSecondaryShippingProfileId($deleteSecondaryShippingProfileId)
    {
        $this->container['deleteSecondaryShippingProfileId'] = $deleteSecondaryShippingProfileId;

        return $this;
    }

    /**
     * Gets taxation
     *
     * @return \WigandtTech\Refurbed\Model\OfferTaxation|null
     */
    public function getTaxation()
    {
        return $this->container['taxation'];
    }

    /**
     * Sets taxation
     *
     * @param \WigandtTech\Refurbed\Model\OfferTaxation|null $taxation taxation
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
     * @return \WigandtTech\Refurbed\Model\CurrencyCode|null
     */
    public function getReferenceCurrencyCode()
    {
        return $this->container['referenceCurrencyCode'];
    }

    /**
     * Sets referenceCurrencyCode
     *
     * @param \WigandtTech\Refurbed\Model\CurrencyCode|null $referenceCurrencyCode referenceCurrencyCode
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
     * @return string|null
     */
    public function getReferencePrice()
    {
        return $this->container['referencePrice'];
    }

    /**
     * Sets referencePrice
     *
     * @param string|null $referencePrice referencePrice
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
     * @return string|null
     */
    public function getReferenceMinPrice()
    {
        return $this->container['referenceMinPrice'];
    }

    /**
     * Sets referenceMinPrice
     *
     * @param string|null $referenceMinPrice referenceMinPrice
     *
     * @return self
     */
    public function setReferenceMinPrice($referenceMinPrice)
    {
        $this->container['referenceMinPrice'] = $referenceMinPrice;

        return $this;
    }

    /**
     * Gets deleteReferenceMinPrice
     *
     * @return bool|null
     */
    public function getDeleteReferenceMinPrice()
    {
        return $this->container['deleteReferenceMinPrice'];
    }

    /**
     * Sets deleteReferenceMinPrice
     *
     * @param bool|null $deleteReferenceMinPrice deleteReferenceMinPrice
     *
     * @return self
     */
    public function setDeleteReferenceMinPrice($deleteReferenceMinPrice)
    {
        $this->container['deleteReferenceMinPrice'] = $deleteReferenceMinPrice;

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

