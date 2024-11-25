<?php
/**
 * SubAccountUpdatePlanRequestFeatures
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
 * SubAccountUpdatePlanRequestFeatures Class Doc Comment
 *
 * @description Features details to update
 * @package  Brevo\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class SubAccountUpdatePlanRequestFeatures extends AbstractModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'subAccountUpdatePlanRequest_features';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'users' => 'int',
        'landingPage' => 'int',
        'inbox' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'users' => 'int64',
        'landingPage' => 'int64',
        'inbox' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'users' => false,
        'landingPage' => false,
        'inbox' => false
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
        'users' => 'users',
        'landingPage' => 'landingPage',
        'inbox' => 'inbox'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'users' => 'setUsers',
        'landingPage' => 'setLandingPage',
        'inbox' => 'setInbox'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'users' => 'getUsers',
        'landingPage' => 'getLandingPage',
        'inbox' => 'getInbox'
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
        $this->setIfExists('users', $data ?? [], null);
        $this->setIfExists('landingPage', $data ?? [], null);
        $this->setIfExists('inbox', $data ?? [], null);
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
     * Gets users
     *
     * @return int|null
     */
    public function getUsers(): ?int
    {
        return $this->container['users'];
    }

    /**
     * Sets users
     *
     * @param int|null $users Number of multi-users
     *
     * @return $this
     */
    public function setUsers(?int $users): static
    {
        if (is_null($users)) {
            throw new InvalidArgumentException('non-nullable users cannot be null');
        }
        $this->container['users'] = $users;

        return $this;
    }

    /**
     * Gets landingPage
     *
     * @return int|null
     */
    public function getLandingPage(): ?int
    {
        return $this->container['landingPage'];
    }

    /**
     * Sets landingPage
     *
     * @param int|null $landingPage Number of landing pages
     *
     * @return $this
     */
    public function setLandingPage(?int $landingPage): static
    {
        if (is_null($landingPage)) {
            throw new InvalidArgumentException('non-nullable landingPage cannot be null');
        }
        $this->container['landingPage'] = $landingPage;

        return $this;
    }

    /**
     * Gets inbox
     *
     * @return int|null
     */
    public function getInbox(): ?int
    {
        return $this->container['inbox'];
    }

    /**
     * Sets inbox
     *
     * @param int|null $inbox Number of inboxes / Not required on ENTv2
     *
     * @return $this
     */
    public function setInbox(?int $inbox): static
    {
        if (is_null($inbox)) {
            throw new InvalidArgumentException('non-nullable inbox cannot be null');
        }
        $this->container['inbox'] = $inbox;

        return $this;
    }
}


