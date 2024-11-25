<?php
/**
 * GetScheduledEmailById200Response
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
 * GetScheduledEmailById200Response Class Doc Comment
 *
 * @package  Brevo\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class GetScheduledEmailById200Response extends AbstractModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'getScheduledEmailById_200_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'scheduledAt' => '\DateTime',
        'createdAt' => '\DateTime',
        'status' => 'string',
        'count' => 'int',
        'batches' => '\Brevo\Client\Models\GetScheduledEmailByBatchIdBatchesInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'scheduledAt' => 'date-time',
        'createdAt' => 'date-time',
        'status' => null,
        'count' => null,
        'batches' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'scheduledAt' => false,
        'createdAt' => false,
        'status' => false,
        'count' => false,
        'batches' => false
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
        'scheduledAt' => 'scheduledAt',
        'createdAt' => 'createdAt',
        'status' => 'status',
        'count' => 'count',
        'batches' => 'batches'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'scheduledAt' => 'setScheduledAt',
        'createdAt' => 'setCreatedAt',
        'status' => 'setStatus',
        'count' => 'setCount',
        'batches' => 'setBatches'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'scheduledAt' => 'getScheduledAt',
        'createdAt' => 'getCreatedAt',
        'status' => 'getStatus',
        'count' => 'getCount',
        'batches' => 'getBatches'
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

    public const STATUS_IN_PROGRESS = 'inProgress';
    public const STATUS_QUEUED = 'queued';
    public const STATUS_PROCESSED = 'processed';
    public const STATUS_ERROR = 'error';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_IN_PROGRESS,
            self::STATUS_QUEUED,
            self::STATUS_PROCESSED,
            self::STATUS_ERROR,
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
        $this->setIfExists('scheduledAt', $data ?? [], null);
        $this->setIfExists('createdAt', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('count', $data ?? [], null);
        $this->setIfExists('batches', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return string[] invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        if ($this->container['scheduledAt'] === null) {
            $invalidProperties[] = "'scheduledAt' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
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
     * Gets scheduledAt
     *
     * @return \DateTime
     */
    public function getScheduledAt(): \DateTime
    {
        return $this->container['scheduledAt'];
    }

    /**
     * Sets scheduledAt
     *
     * @param \DateTime $scheduledAt Datetime for which the email was scheduled
     *
     * @return $this
     */
    public function setScheduledAt(\DateTime $scheduledAt): static
    {
        if (is_null($scheduledAt)) {
            throw new InvalidArgumentException('non-nullable scheduledAt cannot be null');
        }
        $this->container['scheduledAt'] = $scheduledAt;

        return $this;
    }

    /**
     * Gets createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param \DateTime $createdAt Datetime on which the email was scheduled
     *
     * @return $this
     */
    public function setCreatedAt(\DateTime $createdAt): static
    {
        if (is_null($createdAt)) {
            throw new InvalidArgumentException('non-nullable createdAt cannot be null');
        }
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Current status of the scheduled email
     *
     * @return $this
     */
    public function setStatus(string $status): static
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
     * Gets count
     *
     * @return int|null
     */
    public function getCount(): ?int
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     *
     * @param int|null $count Total number of batches
     *
     * @return $this
     */
    public function setCount(?int $count): static
    {
        if (is_null($count)) {
            throw new InvalidArgumentException('non-nullable count cannot be null');
        }
        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets batches
     *
     * @return \Brevo\Client\Models\GetScheduledEmailByBatchIdBatchesInner[]|null
     */
    public function getBatches(): ?array
    {
        return $this->container['batches'];
    }

    /**
     * Sets batches
     *
     * @param \Brevo\Client\Models\GetScheduledEmailByBatchIdBatchesInner[]|null $batches batches
     *
     * @return $this
     */
    public function setBatches(?array $batches): static
    {
        if (is_null($batches)) {
            throw new InvalidArgumentException('non-nullable batches cannot be null');
        }
        $this->container['batches'] = $batches;

        return $this;
    }
}


