<?php
/**
 * Address
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
 * Address Class Doc Comment
 *
 * @category Class
 * @package  WigandtTech\Refurbed
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Address implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'firstName' => 'string',
        'familyName' => 'string',
        'entity' => '\WigandtTech\Refurbed\Model\AddressEntity',
        'companyName' => 'string',
        'companyVatin' => 'string',
        'countryCode' => '\WigandtTech\Refurbed\Model\CountryCode',
        'postCode' => 'string',
        'town' => 'string',
        'streetName' => 'string',
        'houseNo' => 'string',
        'supplement' => 'string',
        'phoneNumber' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'firstName' => null,
        'familyName' => null,
        'entity' => null,
        'companyName' => null,
        'companyVatin' => null,
        'countryCode' => null,
        'postCode' => null,
        'town' => null,
        'streetName' => null,
        'houseNo' => null,
        'supplement' => null,
        'phoneNumber' => null
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
        'firstName' => 'first_name',
        'familyName' => 'family_name',
        'entity' => 'entity',
        'companyName' => 'company_name',
        'companyVatin' => 'company_vatin',
        'countryCode' => 'country_code',
        'postCode' => 'post_code',
        'town' => 'town',
        'streetName' => 'street_name',
        'houseNo' => 'house_no',
        'supplement' => 'supplement',
        'phoneNumber' => 'phone_number'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'firstName' => 'setFirstName',
        'familyName' => 'setFamilyName',
        'entity' => 'setEntity',
        'companyName' => 'setCompanyName',
        'companyVatin' => 'setCompanyVatin',
        'countryCode' => 'setCountryCode',
        'postCode' => 'setPostCode',
        'town' => 'setTown',
        'streetName' => 'setStreetName',
        'houseNo' => 'setHouseNo',
        'supplement' => 'setSupplement',
        'phoneNumber' => 'setPhoneNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'firstName' => 'getFirstName',
        'familyName' => 'getFamilyName',
        'entity' => 'getEntity',
        'companyName' => 'getCompanyName',
        'companyVatin' => 'getCompanyVatin',
        'countryCode' => 'getCountryCode',
        'postCode' => 'getPostCode',
        'town' => 'getTown',
        'streetName' => 'getStreetName',
        'houseNo' => 'getHouseNo',
        'supplement' => 'getSupplement',
        'phoneNumber' => 'getPhoneNumber'
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
        $this->container['firstName'] = $data['firstName'] ?? null;
        $this->container['familyName'] = $data['familyName'] ?? null;
        $this->container['entity'] = $data['entity'] ?? null;
        $this->container['companyName'] = $data['companyName'] ?? null;
        $this->container['companyVatin'] = $data['companyVatin'] ?? null;
        $this->container['countryCode'] = $data['countryCode'] ?? null;
        $this->container['postCode'] = $data['postCode'] ?? null;
        $this->container['town'] = $data['town'] ?? null;
        $this->container['streetName'] = $data['streetName'] ?? null;
        $this->container['houseNo'] = $data['houseNo'] ?? null;
        $this->container['supplement'] = $data['supplement'] ?? null;
        $this->container['phoneNumber'] = $data['phoneNumber'] ?? null;
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
     * Gets firstName
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['firstName'];
    }

    /**
     * Sets firstName
     *
     * @param string|null $firstName firstName
     *
     * @return self
     */
    public function setFirstName($firstName)
    {
        $this->container['firstName'] = $firstName;

        return $this;
    }

    /**
     * Gets familyName
     *
     * @return string|null
     */
    public function getFamilyName()
    {
        return $this->container['familyName'];
    }

    /**
     * Sets familyName
     *
     * @param string|null $familyName familyName
     *
     * @return self
     */
    public function setFamilyName($familyName)
    {
        $this->container['familyName'] = $familyName;

        return $this;
    }

    /**
     * Gets entity
     *
     * @return \WigandtTech\Refurbed\Model\AddressEntity|null
     */
    public function getEntity()
    {
        return $this->container['entity'];
    }

    /**
     * Sets entity
     *
     * @param \WigandtTech\Refurbed\Model\AddressEntity|null $entity entity
     *
     * @return self
     */
    public function setEntity($entity)
    {
        $this->container['entity'] = $entity;

        return $this;
    }

    /**
     * Gets companyName
     *
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->container['companyName'];
    }

    /**
     * Sets companyName
     *
     * @param string|null $companyName The company name. Set for company addresses only.
     *
     * @return self
     */
    public function setCompanyName($companyName)
    {
        $this->container['companyName'] = $companyName;

        return $this;
    }

    /**
     * Gets companyVatin
     *
     * @return string|null
     */
    public function getCompanyVatin()
    {
        return $this->container['companyVatin'];
    }

    /**
     * Sets companyVatin
     *
     * @param string|null $companyVatin The VAT identification number. Set for company *invoice* addresses only.
     *
     * @return self
     */
    public function setCompanyVatin($companyVatin)
    {
        $this->container['companyVatin'] = $companyVatin;

        return $this;
    }

    /**
     * Gets countryCode
     *
     * @return \WigandtTech\Refurbed\Model\CountryCode|null
     */
    public function getCountryCode()
    {
        return $this->container['countryCode'];
    }

    /**
     * Sets countryCode
     *
     * @param \WigandtTech\Refurbed\Model\CountryCode|null $countryCode countryCode
     *
     * @return self
     */
    public function setCountryCode($countryCode)
    {
        $this->container['countryCode'] = $countryCode;

        return $this;
    }

    /**
     * Gets postCode
     *
     * @return string|null
     */
    public function getPostCode()
    {
        return $this->container['postCode'];
    }

    /**
     * Sets postCode
     *
     * @param string|null $postCode postCode
     *
     * @return self
     */
    public function setPostCode($postCode)
    {
        $this->container['postCode'] = $postCode;

        return $this;
    }

    /**
     * Gets town
     *
     * @return string|null
     */
    public function getTown()
    {
        return $this->container['town'];
    }

    /**
     * Sets town
     *
     * @param string|null $town town
     *
     * @return self
     */
    public function setTown($town)
    {
        $this->container['town'] = $town;

        return $this;
    }

    /**
     * Gets streetName
     *
     * @return string|null
     */
    public function getStreetName()
    {
        return $this->container['streetName'];
    }

    /**
     * Sets streetName
     *
     * @param string|null $streetName streetName
     *
     * @return self
     */
    public function setStreetName($streetName)
    {
        $this->container['streetName'] = $streetName;

        return $this;
    }

    /**
     * Gets houseNo
     *
     * @return string|null
     */
    public function getHouseNo()
    {
        return $this->container['houseNo'];
    }

    /**
     * Sets houseNo
     *
     * @param string|null $houseNo The house number. This is optional as some countries know addresses without numbers.
     *
     * @return self
     */
    public function setHouseNo($houseNo)
    {
        $this->container['houseNo'] = $houseNo;

        return $this;
    }

    /**
     * Gets supplement
     *
     * @return string|null
     */
    public function getSupplement()
    {
        return $this->container['supplement'];
    }

    /**
     * Sets supplement
     *
     * @param string|null $supplement An optional address supplement.
     *
     * @return self
     */
    public function setSupplement($supplement)
    {
        $this->container['supplement'] = $supplement;

        return $this;
    }

    /**
     * Gets phoneNumber
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->container['phoneNumber'];
    }

    /**
     * Sets phoneNumber
     *
     * @param string|null $phoneNumber phoneNumber
     *
     * @return self
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->container['phoneNumber'] = $phoneNumber;

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


