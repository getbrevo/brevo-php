<?php
/**
 * RewardAttributionResponse
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
 * RewardAttributionResponse Class Doc Comment
 *
 * @package  Brevo\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class RewardAttributionResponse extends AbstractModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'rewardAttributionResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'string',
        'rewardId' => 'string',
        'loyaltyProgramId' => 'string',
        'contactId' => 'float',
        'code' => 'string',
        'expirationDate' => '\DateTime',
        'consumedAt' => '\DateTime',
        'createdAt' => '\DateTime',
        'updatedAt' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => 'uuid',
        'rewardId' => 'uuid',
        'loyaltyProgramId' => 'uuid',
        'contactId' => null,
        'code' => null,
        'expirationDate' => 'date-time',
        'consumedAt' => 'date-time',
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
        'rewardId' => false,
        'loyaltyProgramId' => false,
        'contactId' => false,
        'code' => false,
        'expirationDate' => false,
        'consumedAt' => false,
        'createdAt' => false,
        'updatedAt' => false
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
        'rewardId' => 'rewardId',
        'loyaltyProgramId' => 'loyaltyProgramId',
        'contactId' => 'contactId',
        'code' => 'code',
        'expirationDate' => 'expirationDate',
        'consumedAt' => 'consumedAt',
        'createdAt' => 'createdAt',
        'updatedAt' => 'updatedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'rewardId' => 'setRewardId',
        'loyaltyProgramId' => 'setLoyaltyProgramId',
        'contactId' => 'setContactId',
        'code' => 'setCode',
        'expirationDate' => 'setExpirationDate',
        'consumedAt' => 'setConsumedAt',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'rewardId' => 'getRewardId',
        'loyaltyProgramId' => 'getLoyaltyProgramId',
        'contactId' => 'getContactId',
        'code' => 'getCode',
        'expirationDate' => 'getExpirationDate',
        'consumedAt' => 'getConsumedAt',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('rewardId', $data ?? [], null);
        $this->setIfExists('loyaltyProgramId', $data ?? [], null);
        $this->setIfExists('contactId', $data ?? [], null);
        $this->setIfExists('code', $data ?? [], null);
        $this->setIfExists('expirationDate', $data ?? [], null);
        $this->setIfExists('consumedAt', $data ?? [], null);
        $this->setIfExists('createdAt', $data ?? [], null);
        $this->setIfExists('updatedAt', $data ?? [], null);
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
     * Gets id
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Attributed reward Id
     *
     * @return $this
     */
    public function setId(?string $id): static
    {
        if (is_null($id)) {
            throw new InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets rewardId
     *
     * @return string|null
     */
    public function getRewardId(): ?string
    {
        return $this->container['rewardId'];
    }

    /**
     * Sets rewardId
     *
     * @param string|null $rewardId Reward id which ias attributed
     *
     * @return $this
     */
    public function setRewardId(?string $rewardId): static
    {
        if (is_null($rewardId)) {
            throw new InvalidArgumentException('non-nullable rewardId cannot be null');
        }
        $this->container['rewardId'] = $rewardId;

        return $this;
    }

    /**
     * Gets loyaltyProgramId
     *
     * @return string|null
     */
    public function getLoyaltyProgramId(): ?string
    {
        return $this->container['loyaltyProgramId'];
    }

    /**
     * Sets loyaltyProgramId
     *
     * @param string|null $loyaltyProgramId Loyalty program id
     *
     * @return $this
     */
    public function setLoyaltyProgramId(?string $loyaltyProgramId): static
    {
        if (is_null($loyaltyProgramId)) {
            throw new InvalidArgumentException('non-nullable loyaltyProgramId cannot be null');
        }
        $this->container['loyaltyProgramId'] = $loyaltyProgramId;

        return $this;
    }

    /**
     * Gets contactId
     *
     * @return float|null
     */
    public function getContactId(): ?float
    {
        return $this->container['contactId'];
    }

    /**
     * Sets contactId
     *
     * @param float|null $contactId Contact to which reward is attributed
     *
     * @return $this
     */
    public function setContactId(?float $contactId): static
    {
        if (is_null($contactId)) {
            throw new InvalidArgumentException('non-nullable contactId cannot be null');
        }
        $this->container['contactId'] = $contactId;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code code associated to the attributed reward
     *
     * @return $this
     */
    public function setCode(?string $code): static
    {
        if (is_null($code)) {
            throw new InvalidArgumentException('non-nullable code cannot be null');
        }
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets expirationDate
     *
     * @return \DateTime|null
     */
    public function getExpirationDate(): ?\DateTime
    {
        return $this->container['expirationDate'];
    }

    /**
     * Sets expirationDate
     *
     * @param \DateTime|null $expirationDate expirationDate
     *
     * @return $this
     */
    public function setExpirationDate(?\DateTime $expirationDate): static
    {
        if (is_null($expirationDate)) {
            throw new InvalidArgumentException('non-nullable expirationDate cannot be null');
        }
        $this->container['expirationDate'] = $expirationDate;

        return $this;
    }

    /**
     * Gets consumedAt
     *
     * @return \DateTime|null
     */
    public function getConsumedAt(): ?\DateTime
    {
        return $this->container['consumedAt'];
    }

    /**
     * Sets consumedAt
     *
     * @param \DateTime|null $consumedAt consumedAt
     *
     * @return $this
     */
    public function setConsumedAt(?\DateTime $consumedAt): static
    {
        if (is_null($consumedAt)) {
            throw new InvalidArgumentException('non-nullable consumedAt cannot be null');
        }
        $this->container['consumedAt'] = $consumedAt;

        return $this;
    }

    /**
     * Gets createdAt
     *
     * @return \DateTime|null
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param \DateTime|null $createdAt createdAt
     *
     * @return $this
     */
    public function setCreatedAt(?\DateTime $createdAt): static
    {
        if (is_null($createdAt)) {
            throw new InvalidArgumentException('non-nullable createdAt cannot be null');
        }
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets updatedAt
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->container['updatedAt'];
    }

    /**
     * Sets updatedAt
     *
     * @param \DateTime|null $updatedAt updatedAt
     *
     * @return $this
     */
    public function setUpdatedAt(?\DateTime $updatedAt): static
    {
        if (is_null($updatedAt)) {
            throw new InvalidArgumentException('non-nullable updatedAt cannot be null');
        }
        $this->container['updatedAt'] = $updatedAt;

        return $this;
    }
}


