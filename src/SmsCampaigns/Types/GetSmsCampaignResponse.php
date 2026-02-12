<?php

namespace Brevo\SmsCampaigns\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Types\GetCampaignRecipients;
use Brevo\Types\GetSmsCampaignStats;

class GetSmsCampaignResponse extends JsonSerializableType
{
    /**
     * @var string $content Content of the SMS Campaign
     */
    #[JsonProperty('content')]
    public string $content;

    /**
     * @var string $createdAt Creation UTC date-time of the SMS campaign (YYYY-MM-DDTHH:mm:ss.SSSZ)
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var int $id ID of the SMS Campaign
     */
    #[JsonProperty('id')]
    public int $id;

    /**
     * @var string $modifiedAt UTC date-time of last modification of the SMS campaign (YYYY-MM-DDTHH:mm:ss.SSSZ)
     */
    #[JsonProperty('modifiedAt')]
    public string $modifiedAt;

    /**
     * @var string $name Name of the SMS Campaign
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $scheduledAt UTC date-time on which SMS campaign is scheduled. Should be in YYYY-MM-DDTHH:mm:ss.SSSZ format
     */
    #[JsonProperty('scheduledAt')]
    public ?string $scheduledAt;

    /**
     * @var string $sender Sender of the SMS Campaign
     */
    #[JsonProperty('sender')]
    public string $sender;

    /**
     * @var value-of<GetSmsCampaignResponseStatus> $status Status of the SMS Campaign
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var GetCampaignRecipients $recipients
     */
    #[JsonProperty('recipients')]
    public GetCampaignRecipients $recipients;

    /**
     * @var GetSmsCampaignStats $statistics
     */
    #[JsonProperty('statistics')]
    public GetSmsCampaignStats $statistics;

    /**
     * @param array{
     *   content: string,
     *   createdAt: string,
     *   id: int,
     *   modifiedAt: string,
     *   name: string,
     *   sender: string,
     *   status: value-of<GetSmsCampaignResponseStatus>,
     *   recipients: GetCampaignRecipients,
     *   statistics: GetSmsCampaignStats,
     *   scheduledAt?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->content = $values['content'];
        $this->createdAt = $values['createdAt'];
        $this->id = $values['id'];
        $this->modifiedAt = $values['modifiedAt'];
        $this->name = $values['name'];
        $this->scheduledAt = $values['scheduledAt'] ?? null;
        $this->sender = $values['sender'];
        $this->status = $values['status'];
        $this->recipients = $values['recipients'];
        $this->statistics = $values['statistics'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
