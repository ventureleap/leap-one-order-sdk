<?php
/**
 * OrderProductJsonldOrderProductRead
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
 * OpenAPI spec version: 2.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.23
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
 * OrderProductJsonldOrderProductRead Class Doc Comment
 *
 * @category Class
 * @package  VentureLeap\OrderService
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderProductJsonldOrderProductRead implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderProduct:jsonld-OrderProductRead';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'context' => 'string',
'id' => 'string',
'type' => 'string',
'uuid' => 'string',
'order' => 'string',
'product_id' => 'string',
'name' => 'string',
'uom' => 'string',
'quantity' => 'float',
'gross_price_per_unit' => 'int',
'vat_per_unit' => 'int',
'application_id' => 'string',
'created_at' => '\DateTime',
'updated_at' => '\DateTime',
'active' => 'bool',
'deleted' => 'bool',
'custom_data' => 'object',
'total_gross_amount' => 'int',
'total_net_amount' => 'int',
'total_vat_amount' => 'int',
'net_price_per_unit' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'context' => null,
'id' => null,
'type' => null,
'uuid' => 'uuid',
'order' => 'iri-reference',
'product_id' => 'uuid',
'name' => null,
'uom' => null,
'quantity' => null,
'gross_price_per_unit' => null,
'vat_per_unit' => null,
'application_id' => null,
'created_at' => 'date-time',
'updated_at' => 'date-time',
'active' => null,
'deleted' => null,
'custom_data' => null,
'total_gross_amount' => null,
'total_net_amount' => null,
'total_vat_amount' => null,
'net_price_per_unit' => null    ];

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
'uuid' => 'uuid',
'order' => 'order',
'product_id' => 'productId',
'name' => 'name',
'uom' => 'uom',
'quantity' => 'quantity',
'gross_price_per_unit' => 'grossPricePerUnit',
'vat_per_unit' => 'vatPerUnit',
'application_id' => 'applicationId',
'created_at' => 'createdAt',
'updated_at' => 'updatedAt',
'active' => 'active',
'deleted' => 'deleted',
'custom_data' => 'customData',
'total_gross_amount' => 'totalGrossAmount',
'total_net_amount' => 'totalNetAmount',
'total_vat_amount' => 'totalVatAmount',
'net_price_per_unit' => 'netPricePerUnit'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'context' => 'setContext',
'id' => 'setId',
'type' => 'setType',
'uuid' => 'setUuid',
'order' => 'setOrder',
'product_id' => 'setProductId',
'name' => 'setName',
'uom' => 'setUom',
'quantity' => 'setQuantity',
'gross_price_per_unit' => 'setGrossPricePerUnit',
'vat_per_unit' => 'setVatPerUnit',
'application_id' => 'setApplicationId',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt',
'active' => 'setActive',
'deleted' => 'setDeleted',
'custom_data' => 'setCustomData',
'total_gross_amount' => 'setTotalGrossAmount',
'total_net_amount' => 'setTotalNetAmount',
'total_vat_amount' => 'setTotalVatAmount',
'net_price_per_unit' => 'setNetPricePerUnit'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'context' => 'getContext',
'id' => 'getId',
'type' => 'getType',
'uuid' => 'getUuid',
'order' => 'getOrder',
'product_id' => 'getProductId',
'name' => 'getName',
'uom' => 'getUom',
'quantity' => 'getQuantity',
'gross_price_per_unit' => 'getGrossPricePerUnit',
'vat_per_unit' => 'getVatPerUnit',
'application_id' => 'getApplicationId',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt',
'active' => 'getActive',
'deleted' => 'getDeleted',
'custom_data' => 'getCustomData',
'total_gross_amount' => 'getTotalGrossAmount',
'total_net_amount' => 'getTotalNetAmount',
'total_vat_amount' => 'getTotalVatAmount',
'net_price_per_unit' => 'getNetPricePerUnit'    ];

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
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['uom'] = isset($data['uom']) ? $data['uom'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['gross_price_per_unit'] = isset($data['gross_price_per_unit']) ? $data['gross_price_per_unit'] : null;
        $this->container['vat_per_unit'] = isset($data['vat_per_unit']) ? $data['vat_per_unit'] : null;
        $this->container['application_id'] = isset($data['application_id']) ? $data['application_id'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
        $this->container['custom_data'] = isset($data['custom_data']) ? $data['custom_data'] : null;
        $this->container['total_gross_amount'] = isset($data['total_gross_amount']) ? $data['total_gross_amount'] : null;
        $this->container['total_net_amount'] = isset($data['total_net_amount']) ? $data['total_net_amount'] : null;
        $this->container['total_vat_amount'] = isset($data['total_vat_amount']) ? $data['total_vat_amount'] : null;
        $this->container['net_price_per_unit'] = isset($data['net_price_per_unit']) ? $data['net_price_per_unit'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['order'] === null) {
            $invalidProperties[] = "'order' can't be null";
        }
        if ($this->container['product_id'] === null) {
            $invalidProperties[] = "'product_id' can't be null";
        }
        if ($this->container['gross_price_per_unit'] === null) {
            $invalidProperties[] = "'gross_price_per_unit' can't be null";
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
     * Gets uuid
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string $uuid uuid
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets order
     *
     * @return string
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param string $order The corresponding order for this product as Iri
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets product_id
     *
     * @return string
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param string $product_id UUID from the product service
     *
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
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
     * @param string $name Name of the product
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets uom
     *
     * @return string
     */
    public function getUom()
    {
        return $this->container['uom'];
    }

    /**
     * Sets uom
     *
     * @param string $uom Unit of Measurement (UOM) Codes
     *
     * @return $this
     */
    public function setUom($uom)
    {
        $this->container['uom'] = $uom;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param float $quantity example 10 (pieces) or 1,5 (liters)
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets gross_price_per_unit
     *
     * @return int
     */
    public function getGrossPricePerUnit()
    {
        return $this->container['gross_price_per_unit'];
    }

    /**
     * Sets gross_price_per_unit
     *
     * @param int $gross_price_per_unit gross_price_per_unit
     *
     * @return $this
     */
    public function setGrossPricePerUnit($gross_price_per_unit)
    {
        $this->container['gross_price_per_unit'] = $gross_price_per_unit;

        return $this;
    }

    /**
     * Gets vat_per_unit
     *
     * @return int
     */
    public function getVatPerUnit()
    {
        return $this->container['vat_per_unit'];
    }

    /**
     * Sets vat_per_unit
     *
     * @param int $vat_per_unit vat_per_unit
     *
     * @return $this
     */
    public function setVatPerUnit($vat_per_unit)
    {
        $this->container['vat_per_unit'] = $vat_per_unit;

        return $this;
    }

    /**
     * Gets application_id
     *
     * @return string
     */
    public function getApplicationId()
    {
        return $this->container['application_id'];
    }

    /**
     * Sets application_id
     *
     * @param string $application_id application_id
     *
     * @return $this
     */
    public function setApplicationId($application_id)
    {
        $this->container['application_id'] = $application_id;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at created_at
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at updated_at
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

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
     * Gets custom_data
     *
     * @return object
     */
    public function getCustomData()
    {
        return $this->container['custom_data'];
    }

    /**
     * Sets custom_data
     *
     * @param object $custom_data custom_data
     *
     * @return $this
     */
    public function setCustomData($custom_data)
    {
        $this->container['custom_data'] = $custom_data;

        return $this;
    }

    /**
     * Gets total_gross_amount
     *
     * @return int
     */
    public function getTotalGrossAmount()
    {
        return $this->container['total_gross_amount'];
    }

    /**
     * Sets total_gross_amount
     *
     * @param int $total_gross_amount total_gross_amount
     *
     * @return $this
     */
    public function setTotalGrossAmount($total_gross_amount)
    {
        $this->container['total_gross_amount'] = $total_gross_amount;

        return $this;
    }

    /**
     * Gets total_net_amount
     *
     * @return int
     */
    public function getTotalNetAmount()
    {
        return $this->container['total_net_amount'];
    }

    /**
     * Sets total_net_amount
     *
     * @param int $total_net_amount total_net_amount
     *
     * @return $this
     */
    public function setTotalNetAmount($total_net_amount)
    {
        $this->container['total_net_amount'] = $total_net_amount;

        return $this;
    }

    /**
     * Gets total_vat_amount
     *
     * @return int
     */
    public function getTotalVatAmount()
    {
        return $this->container['total_vat_amount'];
    }

    /**
     * Sets total_vat_amount
     *
     * @param int $total_vat_amount total_vat_amount
     *
     * @return $this
     */
    public function setTotalVatAmount($total_vat_amount)
    {
        $this->container['total_vat_amount'] = $total_vat_amount;

        return $this;
    }

    /**
     * Gets net_price_per_unit
     *
     * @return int
     */
    public function getNetPricePerUnit()
    {
        return $this->container['net_price_per_unit'];
    }

    /**
     * Sets net_price_per_unit
     *
     * @param int $net_price_per_unit net_price_per_unit
     *
     * @return $this
     */
    public function setNetPricePerUnit($net_price_per_unit)
    {
        $this->container['net_price_per_unit'] = $net_price_per_unit;

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
