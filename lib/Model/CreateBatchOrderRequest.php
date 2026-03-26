<?php
/**
 * CreateBatchOrderRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Brevo\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

namespace Brevo\Client\Model;

use \ArrayAccess;
use \Brevo\Client\ObjectSerializer;

/**
 * CreateBatchOrderRequest Class Doc Comment
 *
 * @category Class
 * @package  Brevo\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateBatchOrderRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'createBatchOrderRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'orders'     => '\Brevo\Client\Model\Order[]',
        'historical' => 'bool',
        'notifyUrl'  => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'orders'     => null,
        'historical' => null,
        'notifyUrl'  => null
    ];

    /**
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
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
        'orders'     => 'orders',
        'historical' => 'historical',
        'notifyUrl'  => 'notifyUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'orders'     => 'setOrders',
        'historical' => 'setHistorical',
        'notifyUrl'  => 'setNotifyUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'orders'     => 'getOrders',
        'historical' => 'getHistorical',
        'notifyUrl'  => 'getNotifyUrl'
    ];

    /**
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
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
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['orders']     = isset($data['orders'])     ? $data['orders']     : null;
        $this->container['historical'] = isset($data['historical']) ? $data['historical'] : null;
        $this->container['notifyUrl']  = isset($data['notifyUrl'])  ? $data['notifyUrl']  : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['orders'] === null) {
            $invalidProperties[] = "'orders' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * @return bool
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
     * Gets orders
     *
     * @return \Brevo\Client\Model\Order[]
     */
    public function getOrders()
    {
        return $this->container['orders'];
    }

    /**
     * Sets orders
     *
     * @param \Brevo\Client\Model\Order[] $orders
     *
     * @return $this
     */
    public function setOrders($orders)
    {
        $this->container['orders'] = $orders;
        return $this;
    }

    /**
     * Gets historical
     *
     * @return bool|null
     */
    public function getHistorical()
    {
        return $this->container['historical'];
    }

    /**
     * Sets historical
     *
     * @param bool|null $historical
     *
     * @return $this
     */
    public function setHistorical($historical)
    {
        $this->container['historical'] = $historical;
        return $this;
    }

    /**
     * Gets notifyUrl
     *
     * @return string|null
     */
    public function getNotifyUrl()
    {
        return $this->container['notifyUrl'];
    }

    /**
     * Sets notifyUrl
     *
     * @param string|null $notifyUrl
     *
     * @return $this
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->container['notifyUrl'] = $notifyUrl;
        return $this;
    }

    /**
     * @param integer $offset
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * @param integer $offset
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * @param integer $offset
     * @param mixed   $value
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * @param integer $offset
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
