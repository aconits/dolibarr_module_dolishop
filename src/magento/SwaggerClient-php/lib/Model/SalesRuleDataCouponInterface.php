<?php
/**
 * SalesRuleDataCouponInterface
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Magento Enterprise Edition 2.0
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * SalesRuleDataCouponInterface Class Doc Comment
 *
 * @category Class
 * @description Interface CouponInterface
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SalesRuleDataCouponInterface implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'sales-rule-data-coupon-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'coupon_id' => 'int',
        'rule_id' => 'int',
        'code' => 'string',
        'usage_limit' => 'int',
        'usage_per_customer' => 'int',
        'times_used' => 'int',
        'expiration_date' => 'string',
        'is_primary' => 'bool',
        'created_at' => 'string',
        'type' => 'int',
        'extension_attributes' => '\Swagger\Client\Model\SalesRuleDataCouponExtensionInterface'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'coupon_id' => null,
        'rule_id' => null,
        'code' => null,
        'usage_limit' => null,
        'usage_per_customer' => null,
        'times_used' => null,
        'expiration_date' => null,
        'is_primary' => null,
        'created_at' => null,
        'type' => null,
        'extension_attributes' => null
    ];

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
        'coupon_id' => 'couponId',
        'rule_id' => 'ruleId',
        'code' => 'code',
        'usage_limit' => 'usageLimit',
        'usage_per_customer' => 'usagePerCustomer',
        'times_used' => 'timesUsed',
        'expiration_date' => 'expirationDate',
        'is_primary' => 'isPrimary',
        'created_at' => 'createdAt',
        'type' => 'type',
        'extension_attributes' => 'extensionAttributes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'coupon_id' => 'setCouponId',
        'rule_id' => 'setRuleId',
        'code' => 'setCode',
        'usage_limit' => 'setUsageLimit',
        'usage_per_customer' => 'setUsagePerCustomer',
        'times_used' => 'setTimesUsed',
        'expiration_date' => 'setExpirationDate',
        'is_primary' => 'setIsPrimary',
        'created_at' => 'setCreatedAt',
        'type' => 'setType',
        'extension_attributes' => 'setExtensionAttributes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'coupon_id' => 'getCouponId',
        'rule_id' => 'getRuleId',
        'code' => 'getCode',
        'usage_limit' => 'getUsageLimit',
        'usage_per_customer' => 'getUsagePerCustomer',
        'times_used' => 'getTimesUsed',
        'expiration_date' => 'getExpirationDate',
        'is_primary' => 'getIsPrimary',
        'created_at' => 'getCreatedAt',
        'type' => 'getType',
        'extension_attributes' => 'getExtensionAttributes'
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
        return self::$swaggerModelName;
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
        $this->container['coupon_id'] = isset($data['coupon_id']) ? $data['coupon_id'] : null;
        $this->container['rule_id'] = isset($data['rule_id']) ? $data['rule_id'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['usage_limit'] = isset($data['usage_limit']) ? $data['usage_limit'] : null;
        $this->container['usage_per_customer'] = isset($data['usage_per_customer']) ? $data['usage_per_customer'] : null;
        $this->container['times_used'] = isset($data['times_used']) ? $data['times_used'] : null;
        $this->container['expiration_date'] = isset($data['expiration_date']) ? $data['expiration_date'] : null;
        $this->container['is_primary'] = isset($data['is_primary']) ? $data['is_primary'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['extension_attributes'] = isset($data['extension_attributes']) ? $data['extension_attributes'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['rule_id'] === null) {
            $invalidProperties[] = "'rule_id' can't be null";
        }
        if ($this->container['times_used'] === null) {
            $invalidProperties[] = "'times_used' can't be null";
        }
        if ($this->container['is_primary'] === null) {
            $invalidProperties[] = "'is_primary' can't be null";
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

        if ($this->container['rule_id'] === null) {
            return false;
        }
        if ($this->container['times_used'] === null) {
            return false;
        }
        if ($this->container['is_primary'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets coupon_id
     *
     * @return int
     */
    public function getCouponId()
    {
        return $this->container['coupon_id'];
    }

    /**
     * Sets coupon_id
     *
     * @param int $coupon_id Coupon id
     *
     * @return $this
     */
    public function setCouponId($coupon_id)
    {
        $this->container['coupon_id'] = $coupon_id;

        return $this;
    }

    /**
     * Gets rule_id
     *
     * @return int
     */
    public function getRuleId()
    {
        return $this->container['rule_id'];
    }

    /**
     * Sets rule_id
     *
     * @param int $rule_id The id of the rule associated with the coupon
     *
     * @return $this
     */
    public function setRuleId($rule_id)
    {
        $this->container['rule_id'] = $rule_id;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code Coupon code
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets usage_limit
     *
     * @return int
     */
    public function getUsageLimit()
    {
        return $this->container['usage_limit'];
    }

    /**
     * Sets usage_limit
     *
     * @param int $usage_limit Usage limit
     *
     * @return $this
     */
    public function setUsageLimit($usage_limit)
    {
        $this->container['usage_limit'] = $usage_limit;

        return $this;
    }

    /**
     * Gets usage_per_customer
     *
     * @return int
     */
    public function getUsagePerCustomer()
    {
        return $this->container['usage_per_customer'];
    }

    /**
     * Sets usage_per_customer
     *
     * @param int $usage_per_customer Usage limit per customer
     *
     * @return $this
     */
    public function setUsagePerCustomer($usage_per_customer)
    {
        $this->container['usage_per_customer'] = $usage_per_customer;

        return $this;
    }

    /**
     * Gets times_used
     *
     * @return int
     */
    public function getTimesUsed()
    {
        return $this->container['times_used'];
    }

    /**
     * Sets times_used
     *
     * @param int $times_used The number of times the coupon has been used
     *
     * @return $this
     */
    public function setTimesUsed($times_used)
    {
        $this->container['times_used'] = $times_used;

        return $this;
    }

    /**
     * Gets expiration_date
     *
     * @return string
     */
    public function getExpirationDate()
    {
        return $this->container['expiration_date'];
    }

    /**
     * Sets expiration_date
     *
     * @param string $expiration_date Expiration date
     *
     * @return $this
     */
    public function setExpirationDate($expiration_date)
    {
        $this->container['expiration_date'] = $expiration_date;

        return $this;
    }

    /**
     * Gets is_primary
     *
     * @return bool
     */
    public function getIsPrimary()
    {
        return $this->container['is_primary'];
    }

    /**
     * Sets is_primary
     *
     * @param bool $is_primary The coupon is primary coupon for the rule that it's associated with
     *
     * @return $this
     */
    public function setIsPrimary($is_primary)
    {
        $this->container['is_primary'] = $is_primary;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string $created_at When the coupon is created
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets type
     *
     * @return int
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param int $type Of coupon
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets extension_attributes
     *
     * @return \Swagger\Client\Model\SalesRuleDataCouponExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extension_attributes'];
    }

    /**
     * Sets extension_attributes
     *
     * @param \Swagger\Client\Model\SalesRuleDataCouponExtensionInterface $extension_attributes extension_attributes
     *
     * @return $this
     */
    public function setExtensionAttributes($extension_attributes)
    {
        $this->container['extension_attributes'] = $extension_attributes;

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


