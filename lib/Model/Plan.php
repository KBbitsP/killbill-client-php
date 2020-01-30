<?php
/**
 * Plan
 *
 * PHP version 5
 *
 * @category Class
 * @package  Killbill\Client\Swagger
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Kill Bill
 *
 * Kill Bill is an open-source billing and payments platform
 *
 * OpenAPI spec version: 0.22.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.16
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Killbill\Client\Swagger\Model;

use \ArrayAccess;
use \Killbill\Client\Swagger\ObjectSerializer;

/**
 * Plan Class Doc Comment
 *
 * @category Class
 * @package  Killbill\Client\Swagger
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Plan implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Plan';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
'prettyName' => 'string',
'billingPeriod' => 'string',
'phases' => '\Killbill\Client\Swagger\Model\Phase[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
'prettyName' => null,
'billingPeriod' => null,
'phases' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'name' => 'name',
'prettyName' => 'prettyName',
'billingPeriod' => 'billingPeriod',
'phases' => 'phases'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
'prettyName' => 'setPrettyName',
'billingPeriod' => 'setBillingPeriod',
'phases' => 'setPhases'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
'prettyName' => 'getPrettyName',
'billingPeriod' => 'getBillingPeriod',
'phases' => 'getPhases'    ];

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
        return self::$swaggerModelName;
    }

    const BILLING_PERIOD_DAILY = 'DAILY';
const BILLING_PERIOD_WEEKLY = 'WEEKLY';
const BILLING_PERIOD_BIWEEKLY = 'BIWEEKLY';
const BILLING_PERIOD_THIRTY_DAYS = 'THIRTY_DAYS';
const BILLING_PERIOD_SIXTY_DAYS = 'SIXTY_DAYS';
const BILLING_PERIOD_NINETY_DAYS = 'NINETY_DAYS';
const BILLING_PERIOD_MONTHLY = 'MONTHLY';
const BILLING_PERIOD_BIMESTRIAL = 'BIMESTRIAL';
const BILLING_PERIOD_QUARTERLY = 'QUARTERLY';
const BILLING_PERIOD_TRIANNUAL = 'TRIANNUAL';
const BILLING_PERIOD_BIANNUAL = 'BIANNUAL';
const BILLING_PERIOD_ANNUAL = 'ANNUAL';
const BILLING_PERIOD_BIENNIAL = 'BIENNIAL';
const BILLING_PERIOD_NO_BILLING_PERIOD = 'NO_BILLING_PERIOD';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBillingPeriodAllowableValues()
    {
        return [
            self::BILLING_PERIOD_DAILY,
self::BILLING_PERIOD_WEEKLY,
self::BILLING_PERIOD_BIWEEKLY,
self::BILLING_PERIOD_THIRTY_DAYS,
self::BILLING_PERIOD_SIXTY_DAYS,
self::BILLING_PERIOD_NINETY_DAYS,
self::BILLING_PERIOD_MONTHLY,
self::BILLING_PERIOD_BIMESTRIAL,
self::BILLING_PERIOD_QUARTERLY,
self::BILLING_PERIOD_TRIANNUAL,
self::BILLING_PERIOD_BIANNUAL,
self::BILLING_PERIOD_ANNUAL,
self::BILLING_PERIOD_BIENNIAL,
self::BILLING_PERIOD_NO_BILLING_PERIOD,        ];
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['prettyName'] = isset($data['prettyName']) ? $data['prettyName'] : null;
        $this->container['billingPeriod'] = isset($data['billingPeriod']) ? $data['billingPeriod'] : null;
        $this->container['phases'] = isset($data['phases']) ? $data['phases'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getBillingPeriodAllowableValues();
        if (!is_null($this->container['billingPeriod']) && !in_array($this->container['billingPeriod'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'billingPeriod', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets prettyName
     *
     * @return string
     */
    public function getPrettyName()
    {
        return $this->container['prettyName'];
    }

    /**
     * Sets prettyName
     *
     * @param string $prettyName prettyName
     *
     * @return $this
     */
    public function setPrettyName($prettyName)
    {
        $this->container['prettyName'] = $prettyName;

        return $this;
    }

    /**
     * Gets billingPeriod
     *
     * @return string
     */
    public function getBillingPeriod()
    {
        return $this->container['billingPeriod'];
    }

    /**
     * Sets billingPeriod
     *
     * @param string $billingPeriod billingPeriod
     *
     * @return $this
     */
    public function setBillingPeriod($billingPeriod)
    {
        $allowedValues = $this->getBillingPeriodAllowableValues();
        if (!is_null($billingPeriod) && !in_array($billingPeriod, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'billingPeriod', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['billingPeriod'] = $billingPeriod;

        return $this;
    }

    /**
     * Gets phases
     *
     * @return \Killbill\Client\Swagger\Model\Phase[]
     */
    public function getPhases()
    {
        return $this->container['phases'];
    }

    /**
     * Sets phases
     *
     * @param \Killbill\Client\Swagger\Model\Phase[] $phases phases
     *
     * @return $this
     */
    public function setPhases($phases)
    {
        $this->container['phases'] = $phases;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
