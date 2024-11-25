<?php
/**
 * MasterDetailsResponsePlanInfoFeaturesInner
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
 * MasterDetailsResponsePlanInfoFeaturesInner Class Doc Comment
 *
 * @package  Brevo\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class MasterDetailsResponsePlanInfoFeaturesInner extends AbstractModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'masterDetailsResponse_planInfo_features_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'name' => 'string',
        'unitValue' => 'string',
        'quantity' => 'int',
        'quantityWithOverages' => 'int',
        'used' => 'int',
        'usedOverages' => 'int',
        'remaining' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'name' => null,
        'unitValue' => null,
        'quantity' => 'int64',
        'quantityWithOverages' => 'int64',
        'used' => 'int64',
        'usedOverages' => 'int64',
        'remaining' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'name' => false,
        'unitValue' => false,
        'quantity' => false,
        'quantityWithOverages' => false,
        'used' => false,
        'usedOverages' => false,
        'remaining' => false
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
        'name' => 'name',
        'unitValue' => 'unitValue',
        'quantity' => 'quantity',
        'quantityWithOverages' => 'quantityWithOverages',
        'used' => 'used',
        'usedOverages' => 'usedOverages',
        'remaining' => 'remaining'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'name' => 'setName',
        'unitValue' => 'setUnitValue',
        'quantity' => 'setQuantity',
        'quantityWithOverages' => 'setQuantityWithOverages',
        'used' => 'setUsed',
        'usedOverages' => 'setUsedOverages',
        'remaining' => 'setRemaining'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'name' => 'getName',
        'unitValue' => 'getUnitValue',
        'quantity' => 'getQuantity',
        'quantityWithOverages' => 'getQuantityWithOverages',
        'used' => 'getUsed',
        'usedOverages' => 'getUsedOverages',
        'remaining' => 'getRemaining'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('unitValue', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('quantityWithOverages', $data ?? [], null);
        $this->setIfExists('used', $data ?? [], null);
        $this->setIfExists('usedOverages', $data ?? [], null);
        $this->setIfExists('remaining', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return string[] invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Name of the feature
     *
     * @return $this
     */
    public function setName(?string $name): static
    {
        if (is_null($name)) {
            throw new InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets unitValue
     *
     * @return string|null
     */
    public function getUnitValue(): ?string
    {
        return $this->container['unitValue'];
    }

    /**
     * Sets unitValue
     *
     * @param string|null $unitValue Unit value of the feature
     *
     * @return $this
     */
    public function setUnitValue(?string $unitValue): static
    {
        if (is_null($unitValue)) {
            throw new InvalidArgumentException('non-nullable unitValue cannot be null');
        }
        $this->container['unitValue'] = $unitValue;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int|null
     */
    public function getQuantity(): ?int
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int|null $quantity Quantity provided in the plan
     *
     * @return $this
     */
    public function setQuantity(?int $quantity): static
    {
        if (is_null($quantity)) {
            throw new InvalidArgumentException('non-nullable quantity cannot be null');
        }
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets quantityWithOverages
     *
     * @return int|null
     */
    public function getQuantityWithOverages(): ?int
    {
        return $this->container['quantityWithOverages'];
    }

    /**
     * Sets quantityWithOverages
     *
     * @param int|null $quantityWithOverages Quantity with overages provided in the plan (only applicable on ENTv2)
     *
     * @return $this
     */
    public function setQuantityWithOverages(?int $quantityWithOverages): static
    {
        if (is_null($quantityWithOverages)) {
            throw new InvalidArgumentException('non-nullable quantityWithOverages cannot be null');
        }
        $this->container['quantityWithOverages'] = $quantityWithOverages;

        return $this;
    }

    /**
     * Gets used
     *
     * @return int|null
     */
    public function getUsed(): ?int
    {
        return $this->container['used'];
    }

    /**
     * Sets used
     *
     * @param int|null $used Quantity consumed by master
     *
     * @return $this
     */
    public function setUsed(?int $used): static
    {
        if (is_null($used)) {
            throw new InvalidArgumentException('non-nullable used cannot be null');
        }
        $this->container['used'] = $used;

        return $this;
    }

    /**
     * Gets usedOverages
     *
     * @return int|null
     */
    public function getUsedOverages(): ?int
    {
        return $this->container['usedOverages'];
    }

    /**
     * Sets usedOverages
     *
     * @param int|null $usedOverages Quantity consumed by sub-organizations over the admin plan limit (only applicable on ENTv2)
     *
     * @return $this
     */
    public function setUsedOverages(?int $usedOverages): static
    {
        if (is_null($usedOverages)) {
            throw new InvalidArgumentException('non-nullable usedOverages cannot be null');
        }
        $this->container['usedOverages'] = $usedOverages;

        return $this;
    }

    /**
     * Gets remaining
     *
     * @return int|null
     */
    public function getRemaining(): ?int
    {
        return $this->container['remaining'];
    }

    /**
     * Sets remaining
     *
     * @param int|null $remaining Quantity remaining in the plan
     *
     * @return $this
     */
    public function setRemaining(?int $remaining): static
    {
        if (is_null($remaining)) {
            throw new InvalidArgumentException('non-nullable remaining cannot be null');
        }
        $this->container['remaining'] = $remaining;

        return $this;
    }
}


