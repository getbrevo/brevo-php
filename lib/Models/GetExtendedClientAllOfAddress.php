<?php
/**
 * GetExtendedClientAllOfAddress
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
 * GetExtendedClientAllOfAddress Class Doc Comment
 *
 * @description Address informations
 * @package  Brevo\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class GetExtendedClientAllOfAddress extends AbstractModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'getExtendedClient_allOf_address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'street' => 'string',
        'city' => 'string',
        'zipCode' => 'string',
        'country' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'street' => null,
        'city' => null,
        'zipCode' => null,
        'country' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'street' => false,
        'city' => false,
        'zipCode' => false,
        'country' => false
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
        'street' => 'street',
        'city' => 'city',
        'zipCode' => 'zipCode',
        'country' => 'country'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'street' => 'setStreet',
        'city' => 'setCity',
        'zipCode' => 'setZipCode',
        'country' => 'setCountry'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'street' => 'getStreet',
        'city' => 'getCity',
        'zipCode' => 'getZipCode',
        'country' => 'getCountry'
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
        $this->setIfExists('street', $data ?? [], null);
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('zipCode', $data ?? [], null);
        $this->setIfExists('country', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return string[] invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        if ($this->container['street'] === null) {
            $invalidProperties[] = "'street' can't be null";
        }
        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ($this->container['zipCode'] === null) {
            $invalidProperties[] = "'zipCode' can't be null";
        }
        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Gets street
     *
     * @return string
     */
    public function getStreet(): string
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string $street Street information
     *
     * @return $this
     */
    public function setStreet(string $street): static
    {
        if (is_null($street)) {
            throw new InvalidArgumentException('non-nullable street cannot be null');
        }
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity(): string
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city City information
     *
     * @return $this
     */
    public function setCity(string $city): static
    {
        if (is_null($city)) {
            throw new InvalidArgumentException('non-nullable city cannot be null');
        }
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets zipCode
     *
     * @return string
     */
    public function getZipCode(): string
    {
        return $this->container['zipCode'];
    }

    /**
     * Sets zipCode
     *
     * @param string $zipCode Zip Code information
     *
     * @return $this
     */
    public function setZipCode(string $zipCode): static
    {
        if (is_null($zipCode)) {
            throw new InvalidArgumentException('non-nullable zipCode cannot be null');
        }
        $this->container['zipCode'] = $zipCode;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry(): string
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country Country information
     *
     * @return $this
     */
    public function setCountry(string $country): static
    {
        if (is_null($country)) {
            throw new InvalidArgumentException('non-nullable country cannot be null');
        }
        $this->container['country'] = $country;

        return $this;
    }
}


