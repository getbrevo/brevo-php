<?php
/**
 * CompaniesLinkUnlinkIdPatchRequest
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
 * CompaniesLinkUnlinkIdPatchRequest Class Doc Comment
 *
 * @package  Brevo\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class CompaniesLinkUnlinkIdPatchRequest extends AbstractModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = '_companies_link_unlink__id__patch_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'linkContactIds' => 'int[]',
        'unlinkContactIds' => 'int[]',
        'linkDealsIds' => 'string[]',
        'unlinkDealsIds' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'linkContactIds' => 'int64',
        'unlinkContactIds' => 'int64',
        'linkDealsIds' => null,
        'unlinkDealsIds' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'linkContactIds' => false,
        'unlinkContactIds' => false,
        'linkDealsIds' => false,
        'unlinkDealsIds' => false
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
        'linkContactIds' => 'linkContactIds',
        'unlinkContactIds' => 'unlinkContactIds',
        'linkDealsIds' => 'linkDealsIds',
        'unlinkDealsIds' => 'unlinkDealsIds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'linkContactIds' => 'setLinkContactIds',
        'unlinkContactIds' => 'setUnlinkContactIds',
        'linkDealsIds' => 'setLinkDealsIds',
        'unlinkDealsIds' => 'setUnlinkDealsIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'linkContactIds' => 'getLinkContactIds',
        'unlinkContactIds' => 'getUnlinkContactIds',
        'linkDealsIds' => 'getLinkDealsIds',
        'unlinkDealsIds' => 'getUnlinkDealsIds'
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
        $this->setIfExists('linkContactIds', $data ?? [], null);
        $this->setIfExists('unlinkContactIds', $data ?? [], null);
        $this->setIfExists('linkDealsIds', $data ?? [], null);
        $this->setIfExists('unlinkDealsIds', $data ?? [], null);
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
     * Gets linkContactIds
     *
     * @return int[]|null
     */
    public function getLinkContactIds(): ?array
    {
        return $this->container['linkContactIds'];
    }

    /**
     * Sets linkContactIds
     *
     * @param int[]|null $linkContactIds Contact ids for contacts to be linked with company
     *
     * @return $this
     */
    public function setLinkContactIds(?array $linkContactIds): static
    {
        if (is_null($linkContactIds)) {
            throw new InvalidArgumentException('non-nullable linkContactIds cannot be null');
        }
        $this->container['linkContactIds'] = $linkContactIds;

        return $this;
    }

    /**
     * Gets unlinkContactIds
     *
     * @return int[]|null
     */
    public function getUnlinkContactIds(): ?array
    {
        return $this->container['unlinkContactIds'];
    }

    /**
     * Sets unlinkContactIds
     *
     * @param int[]|null $unlinkContactIds Contact ids for contacts to be unlinked from company
     *
     * @return $this
     */
    public function setUnlinkContactIds(?array $unlinkContactIds): static
    {
        if (is_null($unlinkContactIds)) {
            throw new InvalidArgumentException('non-nullable unlinkContactIds cannot be null');
        }
        $this->container['unlinkContactIds'] = $unlinkContactIds;

        return $this;
    }

    /**
     * Gets linkDealsIds
     *
     * @return string[]|null
     */
    public function getLinkDealsIds(): ?array
    {
        return $this->container['linkDealsIds'];
    }

    /**
     * Sets linkDealsIds
     *
     * @param string[]|null $linkDealsIds Deal ids for deals to be linked with company
     *
     * @return $this
     */
    public function setLinkDealsIds(?array $linkDealsIds): static
    {
        if (is_null($linkDealsIds)) {
            throw new InvalidArgumentException('non-nullable linkDealsIds cannot be null');
        }
        $this->container['linkDealsIds'] = $linkDealsIds;

        return $this;
    }

    /**
     * Gets unlinkDealsIds
     *
     * @return string[]|null
     */
    public function getUnlinkDealsIds(): ?array
    {
        return $this->container['unlinkDealsIds'];
    }

    /**
     * Sets unlinkDealsIds
     *
     * @param string[]|null $unlinkDealsIds Deal ids for deals to be unlinked from company
     *
     * @return $this
     */
    public function setUnlinkDealsIds(?array $unlinkDealsIds): static
    {
        if (is_null($unlinkDealsIds)) {
            throw new InvalidArgumentException('non-nullable unlinkDealsIds cannot be null');
        }
        $this->container['unlinkDealsIds'] = $unlinkDealsIds;

        return $this;
    }
}


