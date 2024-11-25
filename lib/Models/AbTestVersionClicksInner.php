<?php
/**
 * AbTestVersionClicksInner
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
 * AbTestVersionClicksInner Class Doc Comment
 *
 * @package  Brevo\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class AbTestVersionClicksInner extends AbstractModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'abTestVersionClicks_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'link' => 'string',
        'clicksCount' => 'int',
        'clickRate' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'link' => null,
        'clicksCount' => 'int64',
        'clickRate' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'link' => false,
        'clicksCount' => false,
        'clickRate' => false
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
        'link' => 'link',
        'clicksCount' => 'clicksCount',
        'clickRate' => 'clickRate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'link' => 'setLink',
        'clicksCount' => 'setClicksCount',
        'clickRate' => 'setClickRate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'link' => 'getLink',
        'clicksCount' => 'getClicksCount',
        'clickRate' => 'getClickRate'
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
        $this->setIfExists('link', $data ?? [], null);
        $this->setIfExists('clicksCount', $data ?? [], null);
        $this->setIfExists('clickRate', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return string[] invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        if ($this->container['link'] === null) {
            $invalidProperties[] = "'link' can't be null";
        }
        if ($this->container['clicksCount'] === null) {
            $invalidProperties[] = "'clicksCount' can't be null";
        }
        if ($this->container['clickRate'] === null) {
            $invalidProperties[] = "'clickRate' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Gets link
     *
     * @return string
     */
    public function getLink(): string
    {
        return $this->container['link'];
    }

    /**
     * Sets link
     *
     * @param string $link URL of the link
     *
     * @return $this
     */
    public function setLink(string $link): static
    {
        if (is_null($link)) {
            throw new InvalidArgumentException('non-nullable link cannot be null');
        }
        $this->container['link'] = $link;

        return $this;
    }

    /**
     * Gets clicksCount
     *
     * @return int
     */
    public function getClicksCount(): int
    {
        return $this->container['clicksCount'];
    }

    /**
     * Sets clicksCount
     *
     * @param int $clicksCount Number of times a link is clicked
     *
     * @return $this
     */
    public function setClicksCount(int $clicksCount): static
    {
        if (is_null($clicksCount)) {
            throw new InvalidArgumentException('non-nullable clicksCount cannot be null');
        }
        $this->container['clicksCount'] = $clicksCount;

        return $this;
    }

    /**
     * Gets clickRate
     *
     * @return string
     */
    public function getClickRate(): string
    {
        return $this->container['clickRate'];
    }

    /**
     * Sets clickRate
     *
     * @param string $clickRate Percentage of clicks of link with respect to total clicks
     *
     * @return $this
     */
    public function setClickRate(string $clickRate): static
    {
        if (is_null($clickRate)) {
            throw new InvalidArgumentException('non-nullable clickRate cannot be null');
        }
        $this->container['clickRate'] = $clickRate;

        return $this;
    }
}


