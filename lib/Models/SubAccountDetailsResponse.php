<?php
/**
 * SubAccountDetailsResponse
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
 * SubAccountDetailsResponse Class Doc Comment
 *
 * @package  Brevo\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class SubAccountDetailsResponse extends AbstractModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'subAccountDetailsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'name' => 'string',
        'email' => 'string',
        'companyName' => 'string',
        'groups' => '\Brevo\Client\Models\SubAccountDetailsResponseGroupsInner[]',
        'planInfo' => '\Brevo\Client\Models\SubAccountDetailsResponsePlanInfo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'name' => null,
        'email' => null,
        'companyName' => null,
        'groups' => null,
        'planInfo' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'name' => false,
        'email' => false,
        'companyName' => false,
        'groups' => false,
        'planInfo' => false
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
        'email' => 'email',
        'companyName' => 'companyName',
        'groups' => 'groups',
        'planInfo' => 'planInfo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'name' => 'setName',
        'email' => 'setEmail',
        'companyName' => 'setCompanyName',
        'groups' => 'setGroups',
        'planInfo' => 'setPlanInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'name' => 'getName',
        'email' => 'getEmail',
        'companyName' => 'getCompanyName',
        'groups' => 'getGroups',
        'planInfo' => 'getPlanInfo'
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
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('companyName', $data ?? [], null);
        $this->setIfExists('groups', $data ?? [], null);
        $this->setIfExists('planInfo', $data ?? [], null);
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
     * @param string|null $name Name of the sub-account user
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
     * Gets email
     *
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email Email id of the sub-account organization
     *
     * @return $this
     */
    public function setEmail(?string $email): static
    {
        if (is_null($email)) {
            throw new InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets companyName
     *
     * @return string|null
     */
    public function getCompanyName(): ?string
    {
        return $this->container['companyName'];
    }

    /**
     * Sets companyName
     *
     * @param string|null $companyName Sub-account company name
     *
     * @return $this
     */
    public function setCompanyName(?string $companyName): static
    {
        if (is_null($companyName)) {
            throw new InvalidArgumentException('non-nullable companyName cannot be null');
        }
        $this->container['companyName'] = $companyName;

        return $this;
    }

    /**
     * Gets groups
     *
     * @return \Brevo\Client\Models\SubAccountDetailsResponseGroupsInner[]|null
     */
    public function getGroups(): ?array
    {
        return $this->container['groups'];
    }

    /**
     * Sets groups
     *
     * @param \Brevo\Client\Models\SubAccountDetailsResponseGroupsInner[]|null $groups groups
     *
     * @return $this
     */
    public function setGroups(?array $groups): static
    {
        if (is_null($groups)) {
            throw new InvalidArgumentException('non-nullable groups cannot be null');
        }
        $this->container['groups'] = $groups;

        return $this;
    }

    /**
     * Gets planInfo
     *
     * @return \Brevo\Client\Models\SubAccountDetailsResponsePlanInfo|null
     */
    public function getPlanInfo(): ?\Brevo\Client\Models\SubAccountDetailsResponsePlanInfo
    {
        return $this->container['planInfo'];
    }

    /**
     * Sets planInfo
     *
     * @param \Brevo\Client\Models\SubAccountDetailsResponsePlanInfo|null $planInfo planInfo
     *
     * @return $this
     */
    public function setPlanInfo(?\Brevo\Client\Models\SubAccountDetailsResponsePlanInfo $planInfo): static
    {
        if (is_null($planInfo)) {
            throw new InvalidArgumentException('non-nullable planInfo cannot be null');
        }
        $this->container['planInfo'] = $planInfo;

        return $this;
    }
}


