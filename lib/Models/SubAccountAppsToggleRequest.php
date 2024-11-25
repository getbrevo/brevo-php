<?php
/**
 * SubAccountAppsToggleRequest
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
 * SubAccountAppsToggleRequest Class Doc Comment
 *
 * @description List of enable/disable applications on the sub-account
 * @package  Brevo\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class SubAccountAppsToggleRequest extends AbstractModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'subAccountAppsToggleRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'inbox' => 'bool',
        'whatsapp' => 'bool',
        'automation' => 'bool',
        'emailCampaigns' => 'bool',
        'smsCampaigns' => 'bool',
        'landingPages' => 'bool',
        'transactionalEmails' => 'bool',
        'transactionalSms' => 'bool',
        'facebookAds' => 'bool',
        'webPush' => 'bool',
        'meetings' => 'bool',
        'conversations' => 'bool',
        'crm' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'inbox' => null,
        'whatsapp' => null,
        'automation' => null,
        'emailCampaigns' => null,
        'smsCampaigns' => null,
        'landingPages' => null,
        'transactionalEmails' => null,
        'transactionalSms' => null,
        'facebookAds' => null,
        'webPush' => null,
        'meetings' => null,
        'conversations' => null,
        'crm' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'inbox' => false,
        'whatsapp' => false,
        'automation' => false,
        'emailCampaigns' => false,
        'smsCampaigns' => false,
        'landingPages' => false,
        'transactionalEmails' => false,
        'transactionalSms' => false,
        'facebookAds' => false,
        'webPush' => false,
        'meetings' => false,
        'conversations' => false,
        'crm' => false
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
        'inbox' => 'inbox',
        'whatsapp' => 'whatsapp',
        'automation' => 'automation',
        'emailCampaigns' => 'email-campaigns',
        'smsCampaigns' => 'sms-campaigns',
        'landingPages' => 'landing-pages',
        'transactionalEmails' => 'transactional-emails',
        'transactionalSms' => 'transactional-sms',
        'facebookAds' => 'facebook-ads',
        'webPush' => 'web-push',
        'meetings' => 'meetings',
        'conversations' => 'conversations',
        'crm' => 'crm'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'inbox' => 'setInbox',
        'whatsapp' => 'setWhatsapp',
        'automation' => 'setAutomation',
        'emailCampaigns' => 'setEmailCampaigns',
        'smsCampaigns' => 'setSmsCampaigns',
        'landingPages' => 'setLandingPages',
        'transactionalEmails' => 'setTransactionalEmails',
        'transactionalSms' => 'setTransactionalSms',
        'facebookAds' => 'setFacebookAds',
        'webPush' => 'setWebPush',
        'meetings' => 'setMeetings',
        'conversations' => 'setConversations',
        'crm' => 'setCrm'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'inbox' => 'getInbox',
        'whatsapp' => 'getWhatsapp',
        'automation' => 'getAutomation',
        'emailCampaigns' => 'getEmailCampaigns',
        'smsCampaigns' => 'getSmsCampaigns',
        'landingPages' => 'getLandingPages',
        'transactionalEmails' => 'getTransactionalEmails',
        'transactionalSms' => 'getTransactionalSms',
        'facebookAds' => 'getFacebookAds',
        'webPush' => 'getWebPush',
        'meetings' => 'getMeetings',
        'conversations' => 'getConversations',
        'crm' => 'getCrm'
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
        $this->setIfExists('inbox', $data ?? [], null);
        $this->setIfExists('whatsapp', $data ?? [], null);
        $this->setIfExists('automation', $data ?? [], null);
        $this->setIfExists('emailCampaigns', $data ?? [], null);
        $this->setIfExists('smsCampaigns', $data ?? [], null);
        $this->setIfExists('landingPages', $data ?? [], null);
        $this->setIfExists('transactionalEmails', $data ?? [], null);
        $this->setIfExists('transactionalSms', $data ?? [], null);
        $this->setIfExists('facebookAds', $data ?? [], null);
        $this->setIfExists('webPush', $data ?? [], null);
        $this->setIfExists('meetings', $data ?? [], null);
        $this->setIfExists('conversations', $data ?? [], null);
        $this->setIfExists('crm', $data ?? [], null);
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
     * Gets inbox
     *
     * @return bool|null
     */
    public function getInbox(): ?bool
    {
        return $this->container['inbox'];
    }

    /**
     * Sets inbox
     *
     * @param bool|null $inbox Set this field to enable or disable Inbox on the sub-account / Not applicable on ENTv2
     *
     * @return $this
     */
    public function setInbox(?bool $inbox): static
    {
        if (is_null($inbox)) {
            throw new InvalidArgumentException('non-nullable inbox cannot be null');
        }
        $this->container['inbox'] = $inbox;

        return $this;
    }

    /**
     * Gets whatsapp
     *
     * @return bool|null
     */
    public function getWhatsapp(): ?bool
    {
        return $this->container['whatsapp'];
    }

    /**
     * Sets whatsapp
     *
     * @param bool|null $whatsapp Set this field to enable or disable Whatsapp campaigns on the sub-account
     *
     * @return $this
     */
    public function setWhatsapp(?bool $whatsapp): static
    {
        if (is_null($whatsapp)) {
            throw new InvalidArgumentException('non-nullable whatsapp cannot be null');
        }
        $this->container['whatsapp'] = $whatsapp;

        return $this;
    }

    /**
     * Gets automation
     *
     * @return bool|null
     */
    public function getAutomation(): ?bool
    {
        return $this->container['automation'];
    }

    /**
     * Sets automation
     *
     * @param bool|null $automation Set this field to enable or disable Automation on the sub-account
     *
     * @return $this
     */
    public function setAutomation(?bool $automation): static
    {
        if (is_null($automation)) {
            throw new InvalidArgumentException('non-nullable automation cannot be null');
        }
        $this->container['automation'] = $automation;

        return $this;
    }

    /**
     * Gets emailCampaigns
     *
     * @return bool|null
     */
    public function getEmailCampaigns(): ?bool
    {
        return $this->container['emailCampaigns'];
    }

    /**
     * Sets emailCampaigns
     *
     * @param bool|null $emailCampaigns Set this field to enable or disable Email Campaigns on the sub-account
     *
     * @return $this
     */
    public function setEmailCampaigns(?bool $emailCampaigns): static
    {
        if (is_null($emailCampaigns)) {
            throw new InvalidArgumentException('non-nullable emailCampaigns cannot be null');
        }
        $this->container['emailCampaigns'] = $emailCampaigns;

        return $this;
    }

    /**
     * Gets smsCampaigns
     *
     * @return bool|null
     */
    public function getSmsCampaigns(): ?bool
    {
        return $this->container['smsCampaigns'];
    }

    /**
     * Sets smsCampaigns
     *
     * @param bool|null $smsCampaigns Set this field to enable or disable SMS Marketing on the sub-account
     *
     * @return $this
     */
    public function setSmsCampaigns(?bool $smsCampaigns): static
    {
        if (is_null($smsCampaigns)) {
            throw new InvalidArgumentException('non-nullable smsCampaigns cannot be null');
        }
        $this->container['smsCampaigns'] = $smsCampaigns;

        return $this;
    }

    /**
     * Gets landingPages
     *
     * @return bool|null
     */
    public function getLandingPages(): ?bool
    {
        return $this->container['landingPages'];
    }

    /**
     * Sets landingPages
     *
     * @param bool|null $landingPages Set this field to enable or disable Landing pages on the sub-account
     *
     * @return $this
     */
    public function setLandingPages(?bool $landingPages): static
    {
        if (is_null($landingPages)) {
            throw new InvalidArgumentException('non-nullable landingPages cannot be null');
        }
        $this->container['landingPages'] = $landingPages;

        return $this;
    }

    /**
     * Gets transactionalEmails
     *
     * @return bool|null
     */
    public function getTransactionalEmails(): ?bool
    {
        return $this->container['transactionalEmails'];
    }

    /**
     * Sets transactionalEmails
     *
     * @param bool|null $transactionalEmails Set this field to enable or disable Transactional Email on the sub-account
     *
     * @return $this
     */
    public function setTransactionalEmails(?bool $transactionalEmails): static
    {
        if (is_null($transactionalEmails)) {
            throw new InvalidArgumentException('non-nullable transactionalEmails cannot be null');
        }
        $this->container['transactionalEmails'] = $transactionalEmails;

        return $this;
    }

    /**
     * Gets transactionalSms
     *
     * @return bool|null
     */
    public function getTransactionalSms(): ?bool
    {
        return $this->container['transactionalSms'];
    }

    /**
     * Sets transactionalSms
     *
     * @param bool|null $transactionalSms Set this field to enable or disable Transactional SMS on the sub-account
     *
     * @return $this
     */
    public function setTransactionalSms(?bool $transactionalSms): static
    {
        if (is_null($transactionalSms)) {
            throw new InvalidArgumentException('non-nullable transactionalSms cannot be null');
        }
        $this->container['transactionalSms'] = $transactionalSms;

        return $this;
    }

    /**
     * Gets facebookAds
     *
     * @return bool|null
     */
    public function getFacebookAds(): ?bool
    {
        return $this->container['facebookAds'];
    }

    /**
     * Sets facebookAds
     *
     * @param bool|null $facebookAds Set this field to enable or disable Facebook ads on the sub-account
     *
     * @return $this
     */
    public function setFacebookAds(?bool $facebookAds): static
    {
        if (is_null($facebookAds)) {
            throw new InvalidArgumentException('non-nullable facebookAds cannot be null');
        }
        $this->container['facebookAds'] = $facebookAds;

        return $this;
    }

    /**
     * Gets webPush
     *
     * @return bool|null
     */
    public function getWebPush(): ?bool
    {
        return $this->container['webPush'];
    }

    /**
     * Sets webPush
     *
     * @param bool|null $webPush Set this field to enable or disable Web Push on the sub-account
     *
     * @return $this
     */
    public function setWebPush(?bool $webPush): static
    {
        if (is_null($webPush)) {
            throw new InvalidArgumentException('non-nullable webPush cannot be null');
        }
        $this->container['webPush'] = $webPush;

        return $this;
    }

    /**
     * Gets meetings
     *
     * @return bool|null
     */
    public function getMeetings(): ?bool
    {
        return $this->container['meetings'];
    }

    /**
     * Sets meetings
     *
     * @param bool|null $meetings Set this field to enable or disable Meetings on the sub-account
     *
     * @return $this
     */
    public function setMeetings(?bool $meetings): static
    {
        if (is_null($meetings)) {
            throw new InvalidArgumentException('non-nullable meetings cannot be null');
        }
        $this->container['meetings'] = $meetings;

        return $this;
    }

    /**
     * Gets conversations
     *
     * @return bool|null
     */
    public function getConversations(): ?bool
    {
        return $this->container['conversations'];
    }

    /**
     * Sets conversations
     *
     * @param bool|null $conversations Set this field to enable or disable Conversations on the sub-account
     *
     * @return $this
     */
    public function setConversations(?bool $conversations): static
    {
        if (is_null($conversations)) {
            throw new InvalidArgumentException('non-nullable conversations cannot be null');
        }
        $this->container['conversations'] = $conversations;

        return $this;
    }

    /**
     * Gets crm
     *
     * @return bool|null
     */
    public function getCrm(): ?bool
    {
        return $this->container['crm'];
    }

    /**
     * Sets crm
     *
     * @param bool|null $crm Set this field to enable or disable Sales CRM on the sub-account
     *
     * @return $this
     */
    public function setCrm(?bool $crm): static
    {
        if (is_null($crm)) {
            throw new InvalidArgumentException('non-nullable crm cannot be null');
        }
        $this->container['crm'] = $crm;

        return $this;
    }
}


