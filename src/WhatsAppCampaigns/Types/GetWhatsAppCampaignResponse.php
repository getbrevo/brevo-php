<?php

namespace Brevo\WhatsAppCampaigns\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Types\WhatsappCampStats;

class GetWhatsAppCampaignResponse extends JsonSerializableType
{
    /**
     * @var string $campaignName Name of the WhatsApp Campaign
     */
    #[JsonProperty('campaignName')]
    public string $campaignName;

    /**
     * @var value-of<GetWhatsAppCampaignResponseCampaignStatus> $campaignStatus Status of the WhatsApp Campaign
     */
    #[JsonProperty('campaignStatus')]
    public string $campaignStatus;

    /**
     * @var string $createdAt Creation UTC date-time of the WhatsApp campaign (YYYY-MM-DDTHH:mm:ss.SSSZ)
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var int $id ID of the WhatsApp Campaign
     */
    #[JsonProperty('id')]
    public int $id;

    /**
     * @var string $modifiedAt UTC date-time of last modification of the WhatsApp campaign (YYYY-MM-DDTHH:mm:ss.SSSZ)
     */
    #[JsonProperty('modifiedAt')]
    public string $modifiedAt;

    /**
     * @var ?string $scheduledAt UTC date-time on which WhatsApp campaign is scheduled. Should be in YYYY-MM-DDTHH:mm:ss.SSSZ format
     */
    #[JsonProperty('scheduledAt')]
    public ?string $scheduledAt;

    /**
     * @var string $senderNumber Sender of the WhatsApp Campaign
     */
    #[JsonProperty('senderNumber')]
    public string $senderNumber;

    /**
     * @var ?WhatsappCampStats $stats
     */
    #[JsonProperty('stats')]
    public ?WhatsappCampStats $stats;

    /**
     * @var GetWhatsAppCampaignResponseTemplate $template
     */
    #[JsonProperty('template')]
    public GetWhatsAppCampaignResponseTemplate $template;

    /**
     * @param array{
     *   campaignName: string,
     *   campaignStatus: value-of<GetWhatsAppCampaignResponseCampaignStatus>,
     *   createdAt: string,
     *   id: int,
     *   modifiedAt: string,
     *   senderNumber: string,
     *   template: GetWhatsAppCampaignResponseTemplate,
     *   scheduledAt?: ?string,
     *   stats?: ?WhatsappCampStats,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->campaignName = $values['campaignName'];
        $this->campaignStatus = $values['campaignStatus'];
        $this->createdAt = $values['createdAt'];
        $this->id = $values['id'];
        $this->modifiedAt = $values['modifiedAt'];
        $this->scheduledAt = $values['scheduledAt'] ?? null;
        $this->senderNumber = $values['senderNumber'];
        $this->stats = $values['stats'] ?? null;
        $this->template = $values['template'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
