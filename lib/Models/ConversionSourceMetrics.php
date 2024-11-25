<?php
/**
 * ConversionSourceMetrics
 *
 * PHP version 8.1
 *
 * @package  Brevo\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Brevo API
 *
 * Brevo provide a RESTFul API that can be used with any languages. With this API, you will be able to :   - Manage your campaigns and get the statistics   - Manage your contacts   - Send transactional Emails and SMS   - and much more...  You can download our wrappers at https://github.com/orgs/brevo  **Possible responses**   | Code | Message |   | :-------------: | ------------- |   | 200  | OK. Successful Request  |   | 201  | OK. Successful Creation |   | 202  | OK. Request accepted |   | 204  | OK. Successful Update/Deletion  |   | 400  | Error. Bad Request  |   | 401  | Error. Authentication Needed  |   | 402  | Error. Not enough credit, plan upgrade needed  |   | 403  | Error. Permission denied  |   | 404  | Error. Object does not exist |   | 405  | Error. Method not allowed  |   | 406  | Error. Not Acceptable  |   | 422  | Error. Unprocessable Entity |
 *
 * The version of the OpenAPI document: 3.0.0
 * Contact: contact@brevo.com
 * @generated Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Brevo\Client\Models;

use ArrayAccess;
use JsonSerializable;
use InvalidArgumentException;
use ReturnTypeWillChange;
use Brevo\Client\ObjectSerializer;

/**
 * ConversionSourceMetrics Class Doc Comment
 *
 * @package  Brevo\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class ConversionSourceMetrics extends AbstractModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ConversionSourceMetrics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'float',
        'conversionSource' => 'string',
        'ordersCount' => 'float',
        'revenue' => 'float',
        'averageBasket' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => 'integer',
        'conversionSource' => null,
        'ordersCount' => 'integer',
        'revenue' => 'float',
        'averageBasket' => 'float'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
        'conversionSource' => false,
        'ordersCount' => false,
        'revenue' => false,
        'averageBasket' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var array<string, bool>
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var array<string, string>
     */
    protected static array $attributeMap = [
        'id' => 'id',
        'conversionSource' => 'conversionSource',
        'ordersCount' => 'ordersCount',
        'revenue' => 'revenue',
        'averageBasket' => 'averageBasket'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'conversionSource' => 'setConversionSource',
        'ordersCount' => 'setOrdersCount',
        'revenue' => 'setRevenue',
        'averageBasket' => 'setAverageBasket'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'conversionSource' => 'getConversionSource',
        'ordersCount' => 'getOrdersCount',
        'revenue' => 'getRevenue',
        'averageBasket' => 'getAverageBasket'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array<string, string>
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array<string, string>
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array<string, string>
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    public const CONVERSION_SOURCE_EMAIL_CAMPAIGN = 'email_campaign';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getConversionSourceAllowableValues()
    {
        return [
            self::CONVERSION_SOURCE_EMAIL_CAMPAIGN,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var array
     */
    protected array $container = [];

    /**
     * Constructor
     *
     * @param array $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('conversionSource', $data ?? [], null);
        $this->setIfExists('ordersCount', $data ?? [], null);
        $this->setIfExists('revenue', $data ?? [], null);
        $this->setIfExists('averageBasket', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return string[] invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['conversionSource'] === null) {
            $invalidProperties[] = "'conversionSource' can't be null";
        }
        $allowedValues = $this->getConversionSourceAllowableValues();
        if (!is_null($this->container['conversionSource']) && !in_array($this->container['conversionSource'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'conversionSource', must be one of '%s'",
                $this->container['conversionSource'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['ordersCount'] === null) {
            $invalidProperties[] = "'ordersCount' can't be null";
        }
        if ($this->container['revenue'] === null) {
            $invalidProperties[] = "'revenue' can't be null";
        }
        if ($this->container['averageBasket'] === null) {
            $invalidProperties[] = "'averageBasket' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Gets id
     *
     * @return float
     */
    public function getId(): float
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param float $id id
     *
     * @return $this
     */
    public function setId(float $id): static
    {
        if (is_null($id)) {
            throw new InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets conversionSource
     *
     * @return string
     */
    public function getConversionSource(): string
    {
        return $this->container['conversionSource'];
    }

    /**
     * Sets conversionSource
     *
     * @param string $conversionSource conversionSource
     *
     * @return $this
     */
    public function setConversionSource(string $conversionSource): static
    {
        if (is_null($conversionSource)) {
            throw new InvalidArgumentException('non-nullable conversionSource cannot be null');
        }
        $allowedValues = $this->getConversionSourceAllowableValues();
        if (!in_array($conversionSource, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'conversionSource', must be one of '%s'",
                    $conversionSource,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['conversionSource'] = $conversionSource;

        return $this;
    }

    /**
     * Gets ordersCount
     *
     * @return float
     */
    public function getOrdersCount(): float
    {
        return $this->container['ordersCount'];
    }

    /**
     * Sets ordersCount
     *
     * @param float $ordersCount ordersCount
     *
     * @return $this
     */
    public function setOrdersCount(float $ordersCount): static
    {
        if (is_null($ordersCount)) {
            throw new InvalidArgumentException('non-nullable ordersCount cannot be null');
        }
        $this->container['ordersCount'] = $ordersCount;

        return $this;
    }

    /**
     * Gets revenue
     *
     * @return float
     */
    public function getRevenue(): float
    {
        return $this->container['revenue'];
    }

    /**
     * Sets revenue
     *
     * @param float $revenue revenue
     *
     * @return $this
     */
    public function setRevenue(float $revenue): static
    {
        if (is_null($revenue)) {
            throw new InvalidArgumentException('non-nullable revenue cannot be null');
        }
        $this->container['revenue'] = $revenue;

        return $this;
    }

    /**
     * Gets averageBasket
     *
     * @return float
     */
    public function getAverageBasket(): float
    {
        return $this->container['averageBasket'];
    }

    /**
     * Sets averageBasket
     *
     * @param float $averageBasket averageBasket
     *
     * @return $this
     */
    public function setAverageBasket(float $averageBasket): static
    {
        if (is_null($averageBasket)) {
            throw new InvalidArgumentException('non-nullable averageBasket cannot be null');
        }
        $this->container['averageBasket'] = $averageBasket;

        return $this;
    }
}


