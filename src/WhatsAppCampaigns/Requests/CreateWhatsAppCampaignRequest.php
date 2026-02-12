<?php

namespace Brevo\WhatsAppCampaigns\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\WhatsAppCampaigns\Types\CreateWhatsAppCampaignRequestRecipients;

class CreateWhatsAppCampaignRequest extends JsonSerializableType
{
    /**
     * @var string $name Name of the WhatsApp campaign creation
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var CreateWhatsAppCampaignRequestRecipients $recipients Segment ids and List ids to include/exclude from campaign
     */
    #[JsonProperty('recipients')]
    public CreateWhatsAppCampaignRequestRecipients $recipients;

    /**
     * @var string $scheduledAt Sending UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ). **Prefer to pass your timezone in date-time format for accurate result.For example: **2017-06-01T12:30:00+02:00**
     */
    #[JsonProperty('scheduledAt')]
    public string $scheduledAt;

    /**
     * @var int $templateId Id of the WhatsApp template in **approved** state
     */
    #[JsonProperty('templateId')]
    public int $templateId;

    /**
     * @param array{
     *   name: string,
     *   recipients: CreateWhatsAppCampaignRequestRecipients,
     *   scheduledAt: string,
     *   templateId: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->recipients = $values['recipients'];
        $this->scheduledAt = $values['scheduledAt'];
        $this->templateId = $values['templateId'];
    }
}
