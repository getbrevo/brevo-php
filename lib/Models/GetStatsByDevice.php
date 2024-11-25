<?php
/**
 * GetStatsByDevice
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
 * GetStatsByDevice Class Doc Comment
 *
 * @package  Brevo\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class GetStatsByDevice extends AbstractModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'getStatsByDevice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'desktop' => 'array<string,\Brevo\Client\Models\GetDeviceBrowserStats>',
        'mobile' => 'array<string,\Brevo\Client\Models\GetDeviceBrowserStats>',
        'tablet' => 'array<string,\Brevo\Client\Models\GetDeviceBrowserStats>',
        'unknown' => 'array<string,\Brevo\Client\Models\GetDeviceBrowserStats>'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'desktop' => null,
        'mobile' => null,
        'tablet' => null,
        'unknown' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'desktop' => false,
        'mobile' => false,
        'tablet' => false,
        'unknown' => false
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
        'desktop' => 'desktop',
        'mobile' => 'mobile',
        'tablet' => 'tablet',
        'unknown' => 'unknown'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'desktop' => 'setDesktop',
        'mobile' => 'setMobile',
        'tablet' => 'setTablet',
        'unknown' => 'setUnknown'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'desktop' => 'getDesktop',
        'mobile' => 'getMobile',
        'tablet' => 'getTablet',
        'unknown' => 'getUnknown'
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
        $this->setIfExists('desktop', $data ?? [], null);
        $this->setIfExists('mobile', $data ?? [], null);
        $this->setIfExists('tablet', $data ?? [], null);
        $this->setIfExists('unknown', $data ?? [], null);
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
     * Gets desktop
     *
     * @return array<string,\Brevo\Client\Models\GetDeviceBrowserStats>|null
     */
    public function getDesktop(): ?array
    {
        return $this->container['desktop'];
    }

    /**
     * Sets desktop
     *
     * @param array<string,\Brevo\Client\Models\GetDeviceBrowserStats>|null $desktop Statistics of the campaign on the basis of desktop devices
     *
     * @return $this
     */
    public function setDesktop(?array $desktop): static
    {
        if (is_null($desktop)) {
            throw new InvalidArgumentException('non-nullable desktop cannot be null');
        }
        $this->container['desktop'] = $desktop;

        return $this;
    }

    /**
     * Gets mobile
     *
     * @return array<string,\Brevo\Client\Models\GetDeviceBrowserStats>|null
     */
    public function getMobile(): ?array
    {
        return $this->container['mobile'];
    }

    /**
     * Sets mobile
     *
     * @param array<string,\Brevo\Client\Models\GetDeviceBrowserStats>|null $mobile Statistics of the campaign on the basis of mobile devices
     *
     * @return $this
     */
    public function setMobile(?array $mobile): static
    {
        if (is_null($mobile)) {
            throw new InvalidArgumentException('non-nullable mobile cannot be null');
        }
        $this->container['mobile'] = $mobile;

        return $this;
    }

    /**
     * Gets tablet
     *
     * @return array<string,\Brevo\Client\Models\GetDeviceBrowserStats>|null
     */
    public function getTablet(): ?array
    {
        return $this->container['tablet'];
    }

    /**
     * Sets tablet
     *
     * @param array<string,\Brevo\Client\Models\GetDeviceBrowserStats>|null $tablet Statistics of the campaign on the basis of tablet devices
     *
     * @return $this
     */
    public function setTablet(?array $tablet): static
    {
        if (is_null($tablet)) {
            throw new InvalidArgumentException('non-nullable tablet cannot be null');
        }
        $this->container['tablet'] = $tablet;

        return $this;
    }

    /**
     * Gets unknown
     *
     * @return array<string,\Brevo\Client\Models\GetDeviceBrowserStats>|null
     */
    public function getUnknown(): ?array
    {
        return $this->container['unknown'];
    }

    /**
     * Sets unknown
     *
     * @param array<string,\Brevo\Client\Models\GetDeviceBrowserStats>|null $unknown Statistics of the campaign on the basis of unknown devices
     *
     * @return $this
     */
    public function setUnknown(?array $unknown): static
    {
        if (is_null($unknown)) {
            throw new InvalidArgumentException('non-nullable unknown cannot be null');
        }
        $this->container['unknown'] = $unknown;

        return $this;
    }
}


