<?php

namespace Brevo\MasterAccount\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class PutCorporateSubAccountIdApplicationsToggleRequest extends JsonSerializableType
{
    /**
     * Set this field to enable or disable Automation on the
     * sub-account
     *
     * @var ?bool $automation
     */
    #[JsonProperty('automation')]
    public ?bool $automation;

    /**
     * Set this field to enable or disable Conversations on the
     * sub-account
     *
     * @var ?bool $conversations
     */
    #[JsonProperty('conversations')]
    public ?bool $conversations;

    /**
     * @var ?bool $crm Set this field to enable or disable Sales CRM on the sub-account
     */
    #[JsonProperty('crm')]
    public ?bool $crm;

    /**
     * Set this field to enable or disable Email Campaigns on the
     * sub-account
     *
     * @var ?bool $emailCampaigns
     */
    #[JsonProperty('email-campaigns')]
    public ?bool $emailCampaigns;

    /**
     * Set this field to enable or disable Facebook ads on the
     * sub-account
     *
     * @var ?bool $facebookAds
     */
    #[JsonProperty('facebook-ads')]
    public ?bool $facebookAds;

    /**
     * Set this field to enable or disable Inbox on the sub-account /
     * Not applicable on ENTv2
     *
     * @var ?bool $inbox
     */
    #[JsonProperty('inbox')]
    public ?bool $inbox;

    /**
     * Set this field to enable or disable Landing pages on the
     * sub-account
     *
     * @var ?bool $landingPages
     */
    #[JsonProperty('landing-pages')]
    public ?bool $landingPages;

    /**
     * @var ?bool $meetings Set this field to enable or disable Meetings on the sub-account
     */
    #[JsonProperty('meetings')]
    public ?bool $meetings;

    /**
     * Set this field to enable or disable SMS Marketing on the
     * sub-account
     *
     * @var ?bool $smsCampaigns
     */
    #[JsonProperty('sms-campaigns')]
    public ?bool $smsCampaigns;

    /**
     * Set this field to enable or disable Transactional Email on the
     * sub-account
     *
     * @var ?bool $transactionalEmails
     */
    #[JsonProperty('transactional-emails')]
    public ?bool $transactionalEmails;

    /**
     * Set this field to enable or disable Transactional SMS on the
     * sub-account
     *
     * @var ?bool $transactionalSms
     */
    #[JsonProperty('transactional-sms')]
    public ?bool $transactionalSms;

    /**
     * @var ?bool $webPush Set this field to enable or disable Web Push on the sub-account
     */
    #[JsonProperty('web-push')]
    public ?bool $webPush;

    /**
     * Set this field to enable or disable Whatsapp campaigns on the
     * sub-account
     *
     * @var ?bool $whatsapp
     */
    #[JsonProperty('whatsapp')]
    public ?bool $whatsapp;

    /**
     * @param array{
     *   automation?: ?bool,
     *   conversations?: ?bool,
     *   crm?: ?bool,
     *   emailCampaigns?: ?bool,
     *   facebookAds?: ?bool,
     *   inbox?: ?bool,
     *   landingPages?: ?bool,
     *   meetings?: ?bool,
     *   smsCampaigns?: ?bool,
     *   transactionalEmails?: ?bool,
     *   transactionalSms?: ?bool,
     *   webPush?: ?bool,
     *   whatsapp?: ?bool,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->automation = $values['automation'] ?? null;
        $this->conversations = $values['conversations'] ?? null;
        $this->crm = $values['crm'] ?? null;
        $this->emailCampaigns = $values['emailCampaigns'] ?? null;
        $this->facebookAds = $values['facebookAds'] ?? null;
        $this->inbox = $values['inbox'] ?? null;
        $this->landingPages = $values['landingPages'] ?? null;
        $this->meetings = $values['meetings'] ?? null;
        $this->smsCampaigns = $values['smsCampaigns'] ?? null;
        $this->transactionalEmails = $values['transactionalEmails'] ?? null;
        $this->transactionalSms = $values['transactionalSms'] ?? null;
        $this->webPush = $values['webPush'] ?? null;
        $this->whatsapp = $values['whatsapp'] ?? null;
    }
}
