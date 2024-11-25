<?php
/**
 * CompletedTransaction
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
 * CompletedTransaction Class Doc Comment
 *
 * @package  Brevo\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class CompletedTransaction extends AbstractModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'completedTransaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'string',
        'status' => 'string',
        'amount' => 'float',
        'meta' => 'object',
        'rejectedAt' => '\DateTime',
        'rejectReason' => 'string',
        'expirationDate' => '\DateTime',
        'completedAt' => '\DateTime',
        'cancelledAt' => '\DateTime',
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
        'status' => null,
        'amount' => null,
        'meta' => null,
        'rejectedAt' => 'date-time',
        'rejectReason' => null,
        'expirationDate' => 'date-time',
        'completedAt' => 'date-time',
        'cancelledAt' => 'date-time',
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
        'status' => false,
        'amount' => false,
        'meta' => false,
        'rejectedAt' => false,
        'rejectReason' => false,
        'expirationDate' => false,
        'completedAt' => false,
        'cancelledAt' => false,
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
        'status' => 'status',
        'amount' => 'amount',
        'meta' => 'meta',
        'rejectedAt' => 'rejectedAt',
        'rejectReason' => 'rejectReason',
        'expirationDate' => 'expirationDate',
        'completedAt' => 'completedAt',
        'cancelledAt' => 'cancelledAt',
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
        'status' => 'setStatus',
        'amount' => 'setAmount',
        'meta' => 'setMeta',
        'rejectedAt' => 'setRejectedAt',
        'rejectReason' => 'setRejectReason',
        'expirationDate' => 'setExpirationDate',
        'completedAt' => 'setCompletedAt',
        'cancelledAt' => 'setCancelledAt',
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
        'status' => 'getStatus',
        'amount' => 'getAmount',
        'meta' => 'getMeta',
        'rejectedAt' => 'getRejectedAt',
        'rejectReason' => 'getRejectReason',
        'expirationDate' => 'getExpirationDate',
        'completedAt' => 'getCompletedAt',
        'cancelledAt' => 'getCancelledAt',
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

    public const STATUS_COMPLETED = 'completed';
    public const STATUS_REJECTED = 'rejected';
    public const STATUS_CANCELLED = 'cancelled';
    public const STATUS_DRAFT = 'draft';
    public const STATUS_EXPIRED = 'expired';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_COMPLETED,
            self::STATUS_REJECTED,
            self::STATUS_CANCELLED,
            self::STATUS_DRAFT,
            self::STATUS_EXPIRED,
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
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('meta', $data ?? [], null);
        $this->setIfExists('rejectedAt', $data ?? [], null);
        $this->setIfExists('rejectReason', $data ?? [], null);
        $this->setIfExists('expirationDate', $data ?? [], null);
        $this->setIfExists('completedAt', $data ?? [], null);
        $this->setIfExists('cancelledAt', $data ?? [], null);
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

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

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
     * @param string|null $id Unique identifier for the transaction.
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
     * Gets status
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Current status of the transaction, indicating its state (draft/complete/cancelled/rejected/expired)
     *
     * @return $this
     */
    public function setStatus(?string $status): static
    {
        if (is_null($status)) {
            throw new InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float|null $amount The monetary value of the transaction.
     *
     * @return $this
     */
    public function setAmount(?float $amount): static
    {
        if (is_null($amount)) {
            throw new InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets meta
     *
     * @return object|null
     */
    public function getMeta(): ?object
    {
        return $this->container['meta'];
    }

    /**
     * Sets meta
     *
     * @param object|null $meta Additional metadata related to the transaction
     *
     * @return $this
     */
    public function setMeta(?object $meta): static
    {
        if (is_null($meta)) {
            throw new InvalidArgumentException('non-nullable meta cannot be null');
        }
        $this->container['meta'] = $meta;

        return $this;
    }

    /**
     * Gets rejectedAt
     *
     * @return \DateTime|null
     */
    public function getRejectedAt(): ?\DateTime
    {
        return $this->container['rejectedAt'];
    }

    /**
     * Sets rejectedAt
     *
     * @param \DateTime|null $rejectedAt Timestamp indicating when the transaction was rejected
     *
     * @return $this
     */
    public function setRejectedAt(?\DateTime $rejectedAt): static
    {
        if (is_null($rejectedAt)) {
            throw new InvalidArgumentException('non-nullable rejectedAt cannot be null');
        }
        $this->container['rejectedAt'] = $rejectedAt;

        return $this;
    }

    /**
     * Gets rejectReason
     *
     * @return string|null
     */
    public function getRejectReason(): ?string
    {
        return $this->container['rejectReason'];
    }

    /**
     * Sets rejectReason
     *
     * @param string|null $rejectReason Reason for rejecting the transaction
     *
     * @return $this
     */
    public function setRejectReason(?string $rejectReason): static
    {
        if (is_null($rejectReason)) {
            throw new InvalidArgumentException('non-nullable rejectReason cannot be null');
        }
        $this->container['rejectReason'] = $rejectReason;

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
     * @param \DateTime|null $expirationDate Date when the transaction expires if not completed.
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
     * Gets completedAt
     *
     * @return \DateTime|null
     */
    public function getCompletedAt(): ?\DateTime
    {
        return $this->container['completedAt'];
    }

    /**
     * Sets completedAt
     *
     * @param \DateTime|null $completedAt completedAt
     *
     * @return $this
     */
    public function setCompletedAt(?\DateTime $completedAt): static
    {
        if (is_null($completedAt)) {
            throw new InvalidArgumentException('non-nullable completedAt cannot be null');
        }
        $this->container['completedAt'] = $completedAt;

        return $this;
    }

    /**
     * Gets cancelledAt
     *
     * @return \DateTime|null
     */
    public function getCancelledAt(): ?\DateTime
    {
        return $this->container['cancelledAt'];
    }

    /**
     * Sets cancelledAt
     *
     * @param \DateTime|null $cancelledAt cancelledAt
     *
     * @return $this
     */
    public function setCancelledAt(?\DateTime $cancelledAt): static
    {
        if (is_null($cancelledAt)) {
            throw new InvalidArgumentException('non-nullable cancelledAt cannot be null');
        }
        $this->container['cancelledAt'] = $cancelledAt;

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


