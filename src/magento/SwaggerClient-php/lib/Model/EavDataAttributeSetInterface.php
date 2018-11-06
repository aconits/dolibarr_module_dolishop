<?php
/**
 * EavDataAttributeSetInterface
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
 * EavDataAttributeSetInterface Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EavDataAttributeSetInterface implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'eav-data-attribute-set-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'attribute_set_id' => 'int',
        'attribute_set_name' => 'string',
        'sort_order' => 'int',
        'entity_type_id' => 'int',
        'extension_attributes' => '\Swagger\Client\Model\EavDataAttributeSetExtensionInterface'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'attribute_set_id' => null,
        'attribute_set_name' => null,
        'sort_order' => null,
        'entity_type_id' => null,
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
        'attribute_set_id' => 'attributeSetId',
        'attribute_set_name' => 'attributeSetName',
        'sort_order' => 'sortOrder',
        'entity_type_id' => 'entityTypeId',
        'extension_attributes' => 'extensionAttributes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attribute_set_id' => 'setAttributeSetId',
        'attribute_set_name' => 'setAttributeSetName',
        'sort_order' => 'setSortOrder',
        'entity_type_id' => 'setEntityTypeId',
        'extension_attributes' => 'setExtensionAttributes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attribute_set_id' => 'getAttributeSetId',
        'attribute_set_name' => 'getAttributeSetName',
        'sort_order' => 'getSortOrder',
        'entity_type_id' => 'getEntityTypeId',
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
        $this->container['attribute_set_id'] = isset($data['attribute_set_id']) ? $data['attribute_set_id'] : null;
        $this->container['attribute_set_name'] = isset($data['attribute_set_name']) ? $data['attribute_set_name'] : null;
        $this->container['sort_order'] = isset($data['sort_order']) ? $data['sort_order'] : null;
        $this->container['entity_type_id'] = isset($data['entity_type_id']) ? $data['entity_type_id'] : null;
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

        if ($this->container['attribute_set_name'] === null) {
            $invalidProperties[] = "'attribute_set_name' can't be null";
        }
        if ($this->container['sort_order'] === null) {
            $invalidProperties[] = "'sort_order' can't be null";
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

        if ($this->container['attribute_set_name'] === null) {
            return false;
        }
        if ($this->container['sort_order'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets attribute_set_id
     *
     * @return int
     */
    public function getAttributeSetId()
    {
        return $this->container['attribute_set_id'];
    }

    /**
     * Sets attribute_set_id
     *
     * @param int $attribute_set_id Attribute set ID
     *
     * @return $this
     */
    public function setAttributeSetId($attribute_set_id)
    {
        $this->container['attribute_set_id'] = $attribute_set_id;

        return $this;
    }

    /**
     * Gets attribute_set_name
     *
     * @return string
     */
    public function getAttributeSetName()
    {
        return $this->container['attribute_set_name'];
    }

    /**
     * Sets attribute_set_name
     *
     * @param string $attribute_set_name Attribute set name
     *
     * @return $this
     */
    public function setAttributeSetName($attribute_set_name)
    {
        $this->container['attribute_set_name'] = $attribute_set_name;

        return $this;
    }

    /**
     * Gets sort_order
     *
     * @return int
     */
    public function getSortOrder()
    {
        return $this->container['sort_order'];
    }

    /**
     * Sets sort_order
     *
     * @param int $sort_order Attribute set sort order index
     *
     * @return $this
     */
    public function setSortOrder($sort_order)
    {
        $this->container['sort_order'] = $sort_order;

        return $this;
    }

    /**
     * Gets entity_type_id
     *
     * @return int
     */
    public function getEntityTypeId()
    {
        return $this->container['entity_type_id'];
    }

    /**
     * Sets entity_type_id
     *
     * @param int $entity_type_id Attribute set entity type id
     *
     * @return $this
     */
    public function setEntityTypeId($entity_type_id)
    {
        $this->container['entity_type_id'] = $entity_type_id;

        return $this;
    }

    /**
     * Gets extension_attributes
     *
     * @return \Swagger\Client\Model\EavDataAttributeSetExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extension_attributes'];
    }

    /**
     * Sets extension_attributes
     *
     * @param \Swagger\Client\Model\EavDataAttributeSetExtensionInterface $extension_attributes extension_attributes
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


