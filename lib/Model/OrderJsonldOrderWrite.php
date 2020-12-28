<?php
/**
 * OrderJsonldOrderWrite
 *
 * PHP version 5
 *
 * @category Class
 * @package  VentureLeap\OrderService
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Order API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.20
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace VentureLeap\OrderService\Model;

use \ArrayAccess;
use \VentureLeap\OrderService\ObjectSerializer;

/**
 * OrderJsonldOrderWrite Class Doc Comment
 *
 * @category Class
 * @package  VentureLeap\OrderService
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderJsonldOrderWrite implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Order:jsonld-order:write';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'context' => 'string',
'id' => 'string',
'type' => 'string',
'status' => 'string',
'payment_status' => 'string',
'payment_date' => '\DateTime',
'customer_uuid' => 'string',
'internal_comment' => 'string',
'customer_comment' => 'string',
'active' => 'bool',
'deleted' => 'bool',
'order_products' => '\VentureLeap\OrderService\Model\OrderProductJsonldOrderWrite[]',
'date_of_validity' => '\DateTime',
'additional_properties' => 'object'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'context' => null,
'id' => null,
'type' => null,
'status' => null,
'payment_status' => null,
'payment_date' => 'date-time',
'customer_uuid' => 'uuid',
'internal_comment' => null,
'customer_comment' => null,
'active' => null,
'deleted' => null,
'order_products' => null,
'date_of_validity' => 'date-time',
'additional_properties' => null    ];

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
        'context' => '@context',
'id' => '@id',
'type' => '@type',
'status' => 'status',
'payment_status' => 'paymentStatus',
'payment_date' => 'paymentDate',
'customer_uuid' => 'customerUuid',
'internal_comment' => 'internalComment',
'customer_comment' => 'customerComment',
'active' => 'active',
'deleted' => 'deleted',
'order_products' => 'orderProducts',
'date_of_validity' => 'dateOfValidity',
'additional_properties' => 'additionalProperties'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'context' => 'setContext',
'id' => 'setId',
'type' => 'setType',
'status' => 'setStatus',
'payment_status' => 'setPaymentStatus',
'payment_date' => 'setPaymentDate',
'customer_uuid' => 'setCustomerUuid',
'internal_comment' => 'setInternalComment',
'customer_comment' => 'setCustomerComment',
'active' => 'setActive',
'deleted' => 'setDeleted',
'order_products' => 'setOrderProducts',
'date_of_validity' => 'setDateOfValidity',
'additional_properties' => 'setAdditionalProperties'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'context' => 'getContext',
'id' => 'getId',
'type' => 'getType',
'status' => 'getStatus',
'payment_status' => 'getPaymentStatus',
'payment_date' => 'getPaymentDate',
'customer_uuid' => 'getCustomerUuid',
'internal_comment' => 'getInternalComment',
'customer_comment' => 'getCustomerComment',
'active' => 'getActive',
'deleted' => 'getDeleted',
'order_products' => 'getOrderProducts',
'date_of_validity' => 'getDateOfValidity',
'additional_properties' => 'getAdditionalProperties'    ];

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
        $this->container['context'] = isset($data['context']) ? $data['context'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['payment_status'] = isset($data['payment_status']) ? $data['payment_status'] : null;
        $this->container['payment_date'] = isset($data['payment_date']) ? $data['payment_date'] : null;
        $this->container['customer_uuid'] = isset($data['customer_uuid']) ? $data['customer_uuid'] : null;
        $this->container['internal_comment'] = isset($data['internal_comment']) ? $data['internal_comment'] : null;
        $this->container['customer_comment'] = isset($data['customer_comment']) ? $data['customer_comment'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
        $this->container['order_products'] = isset($data['order_products']) ? $data['order_products'] : null;
        $this->container['date_of_validity'] = isset($data['date_of_validity']) ? $data['date_of_validity'] : null;
        $this->container['additional_properties'] = isset($data['additional_properties']) ? $data['additional_properties'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['payment_status'] === null) {
            $invalidProperties[] = "'payment_status' can't be null";
        }
        if ($this->container['customer_uuid'] === null) {
            $invalidProperties[] = "'customer_uuid' can't be null";
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
     * Gets context
     *
     * @return string
     */
    public function getContext()
    {
        return $this->container['context'];
    }

    /**
     * Sets context
     *
     * @param string $context context
     *
     * @return $this
     */
    public function setContext($context)
    {
        $this->container['context'] = $context;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets payment_status
     *
     * @return string
     */
    public function getPaymentStatus()
    {
        return $this->container['payment_status'];
    }

    /**
     * Sets payment_status
     *
     * @param string $payment_status payment_status
     *
     * @return $this
     */
    public function setPaymentStatus($payment_status)
    {
        $this->container['payment_status'] = $payment_status;

        return $this;
    }

    /**
     * Gets payment_date
     *
     * @return \DateTime
     */
    public function getPaymentDate()
    {
        return $this->container['payment_date'];
    }

    /**
     * Sets payment_date
     *
     * @param \DateTime $payment_date payment_date
     *
     * @return $this
     */
    public function setPaymentDate($payment_date)
    {
        $this->container['payment_date'] = $payment_date;

        return $this;
    }

    /**
     * Gets customer_uuid
     *
     * @return string
     */
    public function getCustomerUuid()
    {
        return $this->container['customer_uuid'];
    }

    /**
     * Sets customer_uuid
     *
     * @param string $customer_uuid customer_uuid
     *
     * @return $this
     */
    public function setCustomerUuid($customer_uuid)
    {
        $this->container['customer_uuid'] = $customer_uuid;

        return $this;
    }

    /**
     * Gets internal_comment
     *
     * @return string
     */
    public function getInternalComment()
    {
        return $this->container['internal_comment'];
    }

    /**
     * Sets internal_comment
     *
     * @param string $internal_comment internal_comment
     *
     * @return $this
     */
    public function setInternalComment($internal_comment)
    {
        $this->container['internal_comment'] = $internal_comment;

        return $this;
    }

    /**
     * Gets customer_comment
     *
     * @return string
     */
    public function getCustomerComment()
    {
        return $this->container['customer_comment'];
    }

    /**
     * Sets customer_comment
     *
     * @param string $customer_comment customer_comment
     *
     * @return $this
     */
    public function setCustomerComment($customer_comment)
    {
        $this->container['customer_comment'] = $customer_comment;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool $active active
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets deleted
     *
     * @return bool
     */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
     * Sets deleted
     *
     * @param bool $deleted deleted
     *
     * @return $this
     */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;

        return $this;
    }

    /**
     * Gets order_products
     *
     * @return \VentureLeap\OrderService\Model\OrderProductJsonldOrderWrite[]
     */
    public function getOrderProducts()
    {
        return $this->container['order_products'];
    }

    /**
     * Sets order_products
     *
     * @param \VentureLeap\OrderService\Model\OrderProductJsonldOrderWrite[] $order_products order_products
     *
     * @return $this
     */
    public function setOrderProducts($order_products)
    {
        $this->container['order_products'] = $order_products;

        return $this;
    }

    /**
     * Gets date_of_validity
     *
     * @return \DateTime
     */
    public function getDateOfValidity()
    {
        return $this->container['date_of_validity'];
    }

    /**
     * Sets date_of_validity
     *
     * @param \DateTime $date_of_validity date_of_validity
     *
     * @return $this
     */
    public function setDateOfValidity($date_of_validity)
    {
        $this->container['date_of_validity'] = $date_of_validity;

        return $this;
    }

    /**
     * Gets additional_properties
     *
     * @return object
     */
    public function getAdditionalProperties()
    {
        return $this->container['additional_properties'];
    }

    /**
     * Sets additional_properties
     *
     * @param object $additional_properties additional_properties
     *
     * @return $this
     */
    public function setAdditionalProperties($additional_properties)
    {
        $this->container['additional_properties'] = $additional_properties;

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
