<?php
/**
 * ConversationsAgentOnlinePingPostRequest
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
 * ConversationsAgentOnlinePingPostRequest Class Doc Comment
 *
 * @package  Brevo\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class ConversationsAgentOnlinePingPostRequest extends AbstractModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = '_conversations_agentOnlinePing_post_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'agentId' => 'mixed',
        'receivedFrom' => 'mixed',
        'agentEmail' => 'mixed',
        'agentName' => 'mixed'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'agentId' => null,
        'receivedFrom' => null,
        'agentEmail' => null,
        'agentName' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'agentId' => true,
        'receivedFrom' => true,
        'agentEmail' => true,
        'agentName' => true
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
        'agentId' => 'agentId',
        'receivedFrom' => 'receivedFrom',
        'agentEmail' => 'agentEmail',
        'agentName' => 'agentName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'agentId' => 'setAgentId',
        'receivedFrom' => 'setReceivedFrom',
        'agentEmail' => 'setAgentEmail',
        'agentName' => 'setAgentName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'agentId' => 'getAgentId',
        'receivedFrom' => 'getReceivedFrom',
        'agentEmail' => 'getAgentEmail',
        'agentName' => 'getAgentName'
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
        $this->setIfExists('agentId', $data ?? [], null);
        $this->setIfExists('receivedFrom', $data ?? [], null);
        $this->setIfExists('agentEmail', $data ?? [], null);
        $this->setIfExists('agentName', $data ?? [], null);
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
     * Gets agentId
     *
     * @return mixed|null
     */
    public function getAgentId(): mixed
    {
        return $this->container['agentId'];
    }

    /**
     * Sets agentId
     *
     * @param mixed|null $agentId agent ID. It can be found on agent’s page or received <a href=\"https://developers.brevo.com/docs/conversations-webhooks\">from a webhook</a>. Alternatively, you can use `agentEmail` + `agentName` + `receivedFrom` instead (all 3 fields required).
     *
     * @return $this
     */
    public function setAgentId(mixed $agentId): static
    {
        if (is_null($agentId)) {
            array_push($this->openAPINullablesSetToNull, 'agentId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('agentId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['agentId'] = $agentId;

        return $this;
    }

    /**
     * Gets receivedFrom
     *
     * @return mixed|null
     */
    public function getReceivedFrom(): mixed
    {
        return $this->container['receivedFrom'];
    }

    /**
     * Sets receivedFrom
     *
     * @param mixed|null $receivedFrom mark your messages to distinguish messages created by you from the others.
     *
     * @return $this
     */
    public function setReceivedFrom(mixed $receivedFrom): static
    {
        if (is_null($receivedFrom)) {
            array_push($this->openAPINullablesSetToNull, 'receivedFrom');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('receivedFrom', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['receivedFrom'] = $receivedFrom;

        return $this;
    }

    /**
     * Gets agentEmail
     *
     * @return mixed|null
     */
    public function getAgentEmail(): mixed
    {
        return $this->container['agentEmail'];
    }

    /**
     * Sets agentEmail
     *
     * @param mixed|null $agentEmail agent email. When sending online pings from a standalone system, it’s hard to maintain a 1-to-1 relationship between the users of both systems. In this case, an agent can be specified by their email address. If there’s no agent with the specified email address in your Brevo organization, a dummy agent will be created automatically.
     *
     * @return $this
     */
    public function setAgentEmail(mixed $agentEmail): static
    {
        if (is_null($agentEmail)) {
            array_push($this->openAPINullablesSetToNull, 'agentEmail');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('agentEmail', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['agentEmail'] = $agentEmail;

        return $this;
    }

    /**
     * Gets agentName
     *
     * @return mixed|null
     */
    public function getAgentName(): mixed
    {
        return $this->container['agentName'];
    }

    /**
     * Sets agentName
     *
     * @param mixed|null $agentName agent name
     *
     * @return $this
     */
    public function setAgentName(mixed $agentName): static
    {
        if (is_null($agentName)) {
            array_push($this->openAPINullablesSetToNull, 'agentName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('agentName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['agentName'] = $agentName;

        return $this;
    }
}


