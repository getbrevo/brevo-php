<?php

namespace Brevo\WhatsAppCampaigns\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\WhatsAppCampaigns\Types\UpdateWhatsAppCampaignRequestCampaignStatus;
use Brevo\WhatsAppCampaigns\Types\UpdateWhatsAppCampaignRequestRecipients;

class UpdateWhatsAppCampaignRequest extends JsonSerializableType
{
    /**
     * @var ?string $campaignName Name of the campaign
     */
    #[JsonProperty('campaignName')]
    public ?string $campaignName;

    /**
     * @var ?value-of<UpdateWhatsAppCampaignRequestCampaignStatus> $campaignStatus Status of the campaign
     */
    #[JsonProperty('campaignStatus')]
    public ?string $campaignStatus;

    /**
     * @var ?UpdateWhatsAppCampaignRequestRecipients $recipients Segment ids and List ids to include/exclude from campaign
     */
    #[JsonProperty('recipients')]
    public ?UpdateWhatsAppCampaignRequestRecipients $recipients;

    /**
     * @var ?string $rescheduleFor Reschedule the sending UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) of campaign. **Prefer to pass your timezone in date-time format for accurate result.For example: **2017-06-01T12:30:00+02:00** Use this field to update the scheduledAt of any existing draft or scheduled WhatsApp campaign.
     */
    #[JsonProperty('rescheduleFor')]
    public ?string $rescheduleFor;

    /**
     * @param array{
     *   campaignName?: ?string,
     *   campaignStatus?: ?value-of<UpdateWhatsAppCampaignRequestCampaignStatus>,
     *   recipients?: ?UpdateWhatsAppCampaignRequestRecipients,
     *   rescheduleFor?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->campaignName = $values['campaignName'] ?? null;
        $this->campaignStatus = $values['campaignStatus'] ?? null;
        $this->recipients = $values['recipients'] ?? null;
        $this->rescheduleFor = $values['rescheduleFor'] ?? null;
    }
}
