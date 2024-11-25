<?php
/**
 * CreateWebhook
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
 * CreateWebhook Class Doc Comment
 *
 * @package  Brevo\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class CreateWebhook extends AbstractModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'createWebhook';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'url' => 'string',
        'events' => 'string[]',
        'description' => 'string',
        'type' => 'string',
        'domain' => 'string',
        'batched' => 'bool',
        'auth' => 'object',
        'headers' => 'object[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'url' => 'url',
        'events' => null,
        'description' => null,
        'type' => null,
        'domain' => null,
        'batched' => null,
        'auth' => null,
        'headers' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'url' => false,
        'events' => false,
        'description' => false,
        'type' => false,
        'domain' => false,
        'batched' => false,
        'auth' => false,
        'headers' => false
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
        'url' => 'url',
        'events' => 'events',
        'description' => 'description',
        'type' => 'type',
        'domain' => 'domain',
        'batched' => 'batched',
        'auth' => 'auth',
        'headers' => 'headers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'url' => 'setUrl',
        'events' => 'setEvents',
        'description' => 'setDescription',
        'type' => 'setType',
        'domain' => 'setDomain',
        'batched' => 'setBatched',
        'auth' => 'setAuth',
        'headers' => 'setHeaders'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'url' => 'getUrl',
        'events' => 'getEvents',
        'description' => 'getDescription',
        'type' => 'getType',
        'domain' => 'getDomain',
        'batched' => 'getBatched',
        'auth' => 'getAuth',
        'headers' => 'getHeaders'
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

    public const EVENTS_SENT = 'sent';
    public const EVENTS_HARD_BOUNCE = 'hardBounce';
    public const EVENTS_SOFT_BOUNCE = 'softBounce';
    public const EVENTS_BLOCKED = 'blocked';
    public const EVENTS_SPAM = 'spam';
    public const EVENTS_DELIVERED = 'delivered';
    public const EVENTS_REQUEST = 'request';
    public const EVENTS_CLICK = 'click';
    public const EVENTS_INVALID = 'invalid';
    public const EVENTS_DEFERRED = 'deferred';
    public const EVENTS_OPENED = 'opened';
    public const EVENTS_UNIQUE_OPENED = 'uniqueOpened';
    public const EVENTS_UNSUBSCRIBED = 'unsubscribed';
    public const EVENTS_LIST_ADDITION = 'listAddition';
    public const EVENTS_CONTACT_UPDATED = 'contactUpdated';
    public const EVENTS_CONTACT_DELETED = 'contactDeleted';
    public const EVENTS_INBOUND_EMAIL_PROCESSED = 'inboundEmailProcessed';
    public const TYPE_TRANSACTIONAL = 'transactional';
    public const TYPE_MARKETING = 'marketing';
    public const TYPE_INBOUND = 'inbound';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEventsAllowableValues()
    {
        return [
            self::EVENTS_SENT,
            self::EVENTS_HARD_BOUNCE,
            self::EVENTS_SOFT_BOUNCE,
            self::EVENTS_BLOCKED,
            self::EVENTS_SPAM,
            self::EVENTS_DELIVERED,
            self::EVENTS_REQUEST,
            self::EVENTS_CLICK,
            self::EVENTS_INVALID,
            self::EVENTS_DEFERRED,
            self::EVENTS_OPENED,
            self::EVENTS_UNIQUE_OPENED,
            self::EVENTS_UNSUBSCRIBED,
            self::EVENTS_LIST_ADDITION,
            self::EVENTS_CONTACT_UPDATED,
            self::EVENTS_CONTACT_DELETED,
            self::EVENTS_INBOUND_EMAIL_PROCESSED,
        ];
    }

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
            self::TYPE_INBOUND,
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
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('events', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], 'transactional');
        $this->setIfExists('domain', $data ?? [], null);
        $this->setIfExists('batched', $data ?? [], null);
        $this->setIfExists('auth', $data ?? [], null);
        $this->setIfExists('headers', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return string[] invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if ($this->container['events'] === null) {
            $invalidProperties[] = "'events' can't be null";
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
     * Gets url
     *
     * @return string
     */
    public function getUrl(): string
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url URL of the webhook
     *
     * @return $this
     */
    public function setUrl(string $url): static
    {
        if (is_null($url)) {
            throw new InvalidArgumentException('non-nullable url cannot be null');
        }
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets events
     *
     * @return string[]
     */
    public function getEvents(): array
    {
        return $this->container['events'];
    }

    /**
     * Sets events
     *
     * @param string[] $events - Events triggering the webhook. Possible values for **Transactional** type webhook: #### `sent` OR `request`, `delivered`, `hardBounce`, `softBounce`, `blocked`, `spam`, `invalid`, `deferred`, `click`, `opened`, `uniqueOpened` and `unsubscribed` - Possible values for **Marketing** type webhook: #### `spam`, `opened`, `click`, `hardBounce`, `softBounce`, `unsubscribed`, `listAddition` & `delivered` - Possible values for **Inbound** type webhook: #### `inboundEmailProcessed`
     *
     * @return $this
     */
    public function setEvents(array $events): static
    {
        if (is_null($events)) {
            throw new InvalidArgumentException('non-nullable events cannot be null');
        }
        $allowedValues = $this->getEventsAllowableValues();
        if (array_diff($events, $allowedValues)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value for 'events', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['events'] = $events;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Description of the webhook
     *
     * @return $this
     */
    public function setDescription(?string $description): static
    {
        if (is_null($description)) {
            throw new InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

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
     * @param string|null $type Type of the webhook
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
     * Gets domain
     *
     * @return string|null
     */
    public function getDomain(): ?string
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param string|null $domain Inbound domain of webhook, required in case of event type `inbound`
     *
     * @return $this
     */
    public function setDomain(?string $domain): static
    {
        if (is_null($domain)) {
            throw new InvalidArgumentException('non-nullable domain cannot be null');
        }
        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets batched
     *
     * @return bool|null
     */
    public function getBatched(): ?bool
    {
        return $this->container['batched'];
    }

    /**
     * Sets batched
     *
     * @param bool|null $batched Batching configuration of the webhook, we send batched webhooks if its true
     *
     * @return $this
     */
    public function setBatched(?bool $batched): static
    {
        if (is_null($batched)) {
            throw new InvalidArgumentException('non-nullable batched cannot be null');
        }
        $this->container['batched'] = $batched;

        return $this;
    }

    /**
     * Gets auth
     *
     * @return object|null
     */
    public function getAuth(): ?object
    {
        return $this->container['auth'];
    }

    /**
     * Sets auth
     *
     * @param object|null $auth Authentication header to be send with the webhook requests
     *
     * @return $this
     */
    public function setAuth(?object $auth): static
    {
        if (is_null($auth)) {
            throw new InvalidArgumentException('non-nullable auth cannot be null');
        }
        $this->container['auth'] = $auth;

        return $this;
    }

    /**
     * Gets headers
     *
     * @return object[]|null
     */
    public function getHeaders(): ?array
    {
        return $this->container['headers'];
    }

    /**
     * Sets headers
     *
     * @param object[]|null $headers headers
     *
     * @return $this
     */
    public function setHeaders(?array $headers): static
    {
        if (is_null($headers)) {
            throw new InvalidArgumentException('non-nullable headers cannot be null');
        }
        $this->container['headers'] = $headers;

        return $this;
    }
}


