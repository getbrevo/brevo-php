<?php

namespace Brevo\WhatsAppCampaigns\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Types\WhatsappCampStats;

class GetWhatsAppCampaignsResponseCampaignsItem extends JsonSerializableType
{
    /**
     * @var string $campaignName Name of the WhatsApp Campaign
     */
    #[JsonProperty('campaignName')]
    public string $campaignName;

    /**
     * @var value-of<GetWhatsAppCampaignsResponseCampaignsItemCampaignStatus> $campaignStatus Status of the Whatsapp Campaign
     */
    #[JsonProperty('campaignStatus')]
    public string $campaignStatus;

    /**
     * @var string $createdAt Creation UTC date-time of the WhatsApp campaign (YYYY-MM-DDTHH:mm:ss.SSSZ)
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var ?string $errorReason Error Reason associated with the WhatsApp campaign sending
     */
    #[JsonProperty('errorReason')]
    public ?string $errorReason;

    /**
     * @var int $id ID of the WhatsApp Campaign
     */
    #[JsonProperty('id')]
    public int $id;

    /**
     * @var ?int $invalidatedContacts Count of invalidated contacts
     */
    #[JsonProperty('invalidatedContacts')]
    public ?int $invalidatedContacts;

    /**
     * @var string $modifiedAt UTC date-time of last modification of the WhatsApp campaign (YYYY-MM-DDTHH:mm:ss.SSSZ)
     */
    #[JsonProperty('modifiedAt')]
    public string $modifiedAt;

    /**
     * @var ?float $readPercentage Read percentage of the the whatsapp campaign created
     */
    #[JsonProperty('readPercentage')]
    public ?float $readPercentage;

    /**
     * @var string $scheduledAt UTC date-time on which WhatsApp campaign is scheduled. Should be in YYYY-MM-DDTHH:mm:ss.SSSZ format
     */
    #[JsonProperty('scheduledAt')]
    public string $scheduledAt;

    /**
     * @var ?WhatsappCampStats $stats
     */
    #[JsonProperty('stats')]
    public ?WhatsappCampStats $stats;

    /**
     * @var string $templateId Id of the WhatsApp template
     */
    #[JsonProperty('templateId')]
    public string $templateId;

    /**
     * @param array{
     *   campaignName: string,
     *   campaignStatus: value-of<GetWhatsAppCampaignsResponseCampaignsItemCampaignStatus>,
     *   createdAt: string,
     *   id: int,
     *   modifiedAt: string,
     *   scheduledAt: string,
     *   templateId: string,
     *   errorReason?: ?string,
     *   invalidatedContacts?: ?int,
     *   readPercentage?: ?float,
     *   stats?: ?WhatsappCampStats,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->campaignName = $values['campaignName'];
        $this->campaignStatus = $values['campaignStatus'];
        $this->createdAt = $values['createdAt'];
        $this->errorReason = $values['errorReason'] ?? null;
        $this->id = $values['id'];
        $this->invalidatedContacts = $values['invalidatedContacts'] ?? null;
        $this->modifiedAt = $values['modifiedAt'];
        $this->readPercentage = $values['readPercentage'] ?? null;
        $this->scheduledAt = $values['scheduledAt'];
        $this->stats = $values['stats'] ?? null;
        $this->templateId = $values['templateId'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
