<?php
/**
 * SendSms
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
 * SendSms Class Doc Comment
 *
 * @package  Brevo\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class SendSms extends AbstractModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'sendSms';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'reference' => 'string',
        'messageId' => 'int',
        'smsCount' => 'int',
        'usedCredits' => 'float',
        'remainingCredits' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'reference' => null,
        'messageId' => 'int64',
        'smsCount' => 'int64',
        'usedCredits' => 'float',
        'remainingCredits' => 'float'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'reference' => false,
        'messageId' => false,
        'smsCount' => false,
        'usedCredits' => false,
        'remainingCredits' => false
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
        'reference' => 'reference',
        'messageId' => 'messageId',
        'smsCount' => 'smsCount',
        'usedCredits' => 'usedCredits',
        'remainingCredits' => 'remainingCredits'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'reference' => 'setReference',
        'messageId' => 'setMessageId',
        'smsCount' => 'setSmsCount',
        'usedCredits' => 'setUsedCredits',
        'remainingCredits' => 'setRemainingCredits'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'reference' => 'getReference',
        'messageId' => 'getMessageId',
        'smsCount' => 'getSmsCount',
        'usedCredits' => 'getUsedCredits',
        'remainingCredits' => 'getRemainingCredits'
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
        $this->setIfExists('reference', $data ?? [], null);
        $this->setIfExists('messageId', $data ?? [], null);
        $this->setIfExists('smsCount', $data ?? [], null);
        $this->setIfExists('usedCredits', $data ?? [], null);
        $this->setIfExists('remainingCredits', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return string[] invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        if ($this->container['reference'] === null) {
            $invalidProperties[] = "'reference' can't be null";
        }
        if ($this->container['messageId'] === null) {
            $invalidProperties[] = "'messageId' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Gets reference
     *
     * @return string
     */
    public function getReference(): string
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string $reference reference
     *
     * @return $this
     */
    public function setReference(string $reference): static
    {
        if (is_null($reference)) {
            throw new InvalidArgumentException('non-nullable reference cannot be null');
        }
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets messageId
     *
     * @return int
     */
    public function getMessageId(): int
    {
        return $this->container['messageId'];
    }

    /**
     * Sets messageId
     *
     * @param int $messageId messageId
     *
     * @return $this
     */
    public function setMessageId(int $messageId): static
    {
        if (is_null($messageId)) {
            throw new InvalidArgumentException('non-nullable messageId cannot be null');
        }
        $this->container['messageId'] = $messageId;

        return $this;
    }

    /**
     * Gets smsCount
     *
     * @return int|null
     */
    public function getSmsCount(): ?int
    {
        return $this->container['smsCount'];
    }

    /**
     * Sets smsCount
     *
     * @param int|null $smsCount Count of SMS's to send multiple text messages
     *
     * @return $this
     */
    public function setSmsCount(?int $smsCount): static
    {
        if (is_null($smsCount)) {
            throw new InvalidArgumentException('non-nullable smsCount cannot be null');
        }
        $this->container['smsCount'] = $smsCount;

        return $this;
    }

    /**
     * Gets usedCredits
     *
     * @return float|null
     */
    public function getUsedCredits(): ?float
    {
        return $this->container['usedCredits'];
    }

    /**
     * Sets usedCredits
     *
     * @param float|null $usedCredits SMS credits used per text message
     *
     * @return $this
     */
    public function setUsedCredits(?float $usedCredits): static
    {
        if (is_null($usedCredits)) {
            throw new InvalidArgumentException('non-nullable usedCredits cannot be null');
        }
        $this->container['usedCredits'] = $usedCredits;

        return $this;
    }

    /**
     * Gets remainingCredits
     *
     * @return float|null
     */
    public function getRemainingCredits(): ?float
    {
        return $this->container['remainingCredits'];
    }

    /**
     * Sets remainingCredits
     *
     * @param float|null $remainingCredits Remaining SMS credits of the user
     *
     * @return $this
     */
    public function setRemainingCredits(?float $remainingCredits): static
    {
        if (is_null($remainingCredits)) {
            throw new InvalidArgumentException('non-nullable remainingCredits cannot be null');
        }
        $this->container['remainingCredits'] = $remainingCredits;

        return $this;
    }
}


