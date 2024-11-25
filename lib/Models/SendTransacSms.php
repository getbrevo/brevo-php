<?php
/**
 * SendTransacSms
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
 * SendTransacSms Class Doc Comment
 *
 * @package  Brevo\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class SendTransacSms extends AbstractModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'sendTransacSms';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'sender' => 'string',
        'recipient' => 'string',
        'content' => 'string',
        'type' => 'string',
        'tag' => 'string',
        'webUrl' => 'string',
        'unicodeEnabled' => 'bool',
        'organisationPrefix' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'sender' => null,
        'recipient' => null,
        'content' => null,
        'type' => null,
        'tag' => null,
        'webUrl' => 'url',
        'unicodeEnabled' => null,
        'organisationPrefix' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'sender' => false,
        'recipient' => false,
        'content' => false,
        'type' => false,
        'tag' => false,
        'webUrl' => false,
        'unicodeEnabled' => false,
        'organisationPrefix' => false
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
        'sender' => 'sender',
        'recipient' => 'recipient',
        'content' => 'content',
        'type' => 'type',
        'tag' => 'tag',
        'webUrl' => 'webUrl',
        'unicodeEnabled' => 'unicodeEnabled',
        'organisationPrefix' => 'organisationPrefix'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'sender' => 'setSender',
        'recipient' => 'setRecipient',
        'content' => 'setContent',
        'type' => 'setType',
        'tag' => 'setTag',
        'webUrl' => 'setWebUrl',
        'unicodeEnabled' => 'setUnicodeEnabled',
        'organisationPrefix' => 'setOrganisationPrefix'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'sender' => 'getSender',
        'recipient' => 'getRecipient',
        'content' => 'getContent',
        'type' => 'getType',
        'tag' => 'getTag',
        'webUrl' => 'getWebUrl',
        'unicodeEnabled' => 'getUnicodeEnabled',
        'organisationPrefix' => 'getOrganisationPrefix'
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

    public const TYPE_TRANSACTIONAL = 'transactional';
    public const TYPE_MARKETING = 'marketing';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_TRANSACTIONAL,
            self::TYPE_MARKETING,
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
        $this->setIfExists('sender', $data ?? [], null);
        $this->setIfExists('recipient', $data ?? [], null);
        $this->setIfExists('content', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], 'transactional');
        $this->setIfExists('tag', $data ?? [], null);
        $this->setIfExists('webUrl', $data ?? [], null);
        $this->setIfExists('unicodeEnabled', $data ?? [], false);
        $this->setIfExists('organisationPrefix', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return string[] invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        if ($this->container['sender'] === null) {
            $invalidProperties[] = "'sender' can't be null";
        }
        if ((mb_strlen($this->container['sender']) > 15)) {
            $invalidProperties[] = "invalid value for 'sender', the character length must be smaller than or equal to 15.";
        }

        if ($this->container['recipient'] === null) {
            $invalidProperties[] = "'recipient' can't be null";
        }
        if ($this->container['content'] === null) {
            $invalidProperties[] = "'content' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Gets sender
     *
     * @return string
     */
    public function getSender(): string
    {
        return $this->container['sender'];
    }

    /**
     * Sets sender
     *
     * @param string $sender Name of the sender. **The number of characters is limited to 11 for alphanumeric characters and 15 for numeric characters**
     *
     * @return $this
     */
    public function setSender(string $sender): static
    {
        if (is_null($sender)) {
            throw new InvalidArgumentException('non-nullable sender cannot be null');
        }
        if ((mb_strlen($sender) > 15)) {
            throw new InvalidArgumentException('invalid length for $sender when calling SendTransacSms., must be smaller than or equal to 15.');
        }

        $this->container['sender'] = $sender;

        return $this;
    }

    /**
     * Gets recipient
     *
     * @return string
     */
    public function getRecipient(): string
    {
        return $this->container['recipient'];
    }

    /**
     * Sets recipient
     *
     * @param string $recipient Mobile number to send SMS with the country code
     *
     * @return $this
     */
    public function setRecipient(string $recipient): static
    {
        if (is_null($recipient)) {
            throw new InvalidArgumentException('non-nullable recipient cannot be null');
        }
        $this->container['recipient'] = $recipient;

        return $this;
    }

    /**
     * Gets content
     *
     * @return string
     */
    public function getContent(): string
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string $content Content of the message. If more than **160 characters** long, will be sent as multiple text messages
     *
     * @return $this
     */
    public function setContent(string $content): static
    {
        if (is_null($content)) {
            throw new InvalidArgumentException('non-nullable content cannot be null');
        }
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Type of the SMS. Marketing SMS messages are those sent typically with marketing content. Transactional SMS messages are sent to individuals and are triggered in response to some action, such as a sign-up, purchase, etc.
     *
     * @return $this
     */
    public function setType(?string $type): static
    {
        if (is_null($type)) {
            throw new InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets tag
     *
     * @return string|null
     */
    public function getTag(): ?string
    {
        return $this->container['tag'];
    }

    /**
     * Sets tag
     *
     * @param string|null $tag Tag of the message
     *
     * @return $this
     */
    public function setTag(?string $tag): static
    {
        if (is_null($tag)) {
            throw new InvalidArgumentException('non-nullable tag cannot be null');
        }
        $this->container['tag'] = $tag;

        return $this;
    }

    /**
     * Gets webUrl
     *
     * @return string|null
     */
    public function getWebUrl(): ?string
    {
        return $this->container['webUrl'];
    }

    /**
     * Sets webUrl
     *
     * @param string|null $webUrl Webhook to call for each event triggered by the message (delivered etc.)
     *
     * @return $this
     */
    public function setWebUrl(?string $webUrl): static
    {
        if (is_null($webUrl)) {
            throw new InvalidArgumentException('non-nullable webUrl cannot be null');
        }
        $this->container['webUrl'] = $webUrl;

        return $this;
    }

    /**
     * Gets unicodeEnabled
     *
     * @return bool|null
     */
    public function getUnicodeEnabled(): ?bool
    {
        return $this->container['unicodeEnabled'];
    }

    /**
     * Sets unicodeEnabled
     *
     * @param bool|null $unicodeEnabled Format of the message. It indicates whether the content should be treated as unicode or not.
     *
     * @return $this
     */
    public function setUnicodeEnabled(?bool $unicodeEnabled): static
    {
        if (is_null($unicodeEnabled)) {
            throw new InvalidArgumentException('non-nullable unicodeEnabled cannot be null');
        }
        $this->container['unicodeEnabled'] = $unicodeEnabled;

        return $this;
    }

    /**
     * Gets organisationPrefix
     *
     * @return string|null
     */
    public function getOrganisationPrefix(): ?string
    {
        return $this->container['organisationPrefix'];
    }

    /**
     * Sets organisationPrefix
     *
     * @param string|null $organisationPrefix A recognizable prefix will ensure your audience knows who you are. Recommended by U.S. carriers. This will be added as your Brand Name before the message content. **Prefer verifying maximum length of 160 characters including this prefix in message content to avoid multiple sending of same sms.**
     *
     * @return $this
     */
    public function setOrganisationPrefix(?string $organisationPrefix): static
    {
        if (is_null($organisationPrefix)) {
            throw new InvalidArgumentException('non-nullable organisationPrefix cannot be null');
        }
        $this->container['organisationPrefix'] = $organisationPrefix;

        return $this;
    }
}


