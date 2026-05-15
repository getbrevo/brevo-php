<?php

namespace Brevo\SmsCampaigns\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Types\GetSmsCampaignStats;
use Brevo\Core\Types\ArrayType;

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
     * @var ?string $organisationPrefix A recognizable prefix added as the Brand Name before the message content. Empty string if not set.
     */
    #[JsonProperty('organisationPrefix')]
    public ?string $organisationPrefix;

    /**
     * @var ?string $scheduledAt UTC date-time on which SMS campaign is scheduled. Should be in YYYY-MM-DDTHH:mm:ss.SSSZ format. Empty string if not scheduled.
     */
    #[JsonProperty('scheduledAt')]
    public ?string $scheduledAt;

    /**
     * @var string $sender Sender of the SMS Campaign
     */
    #[JsonProperty('sender')]
    public string $sender;

    /**
     * @var ?string $sentDate UTC date-time on which the SMS campaign was sent (YYYY-MM-DDTHH:mm:ss.SSSZ). Only available if the campaign status is 'sent'.
     */
    #[JsonProperty('sentDate')]
    public ?string $sentDate;

    /**
     * @var value-of<GetSmsCampaignResponseStatus> $status Status of the SMS Campaign
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?string $unsubscribeInstruction Instructions to unsubscribe from future communications. Empty string if not set.
     */
    #[JsonProperty('unsubscribeInstruction')]
    public ?string $unsubscribeInstruction;

    /**
     * @var GetSmsCampaignResponseRecipients $recipients Recipients of the SMS campaign. For a single campaign, lists and exclusion lists are returned as objects with id and name.
     */
    #[JsonProperty('recipients')]
    public GetSmsCampaignResponseRecipients $recipients;

    /**
     * @var GetSmsCampaignStats $statistics
     */
    #[JsonProperty('statistics')]
    public GetSmsCampaignStats $statistics;

    /**
     * @var ?array<string> $tags Tags (labels) associated with the SMS campaign. Only available when retrieving a single campaign.
     */
    #[JsonProperty('tags'), ArrayType(['string'])]
    public ?array $tags;

    /**
     * @param array{
     *   content: string,
     *   createdAt: string,
     *   id: int,
     *   modifiedAt: string,
     *   name: string,
     *   sender: string,
     *   status: value-of<GetSmsCampaignResponseStatus>,
     *   recipients: GetSmsCampaignResponseRecipients,
     *   statistics: GetSmsCampaignStats,
     *   organisationPrefix?: ?string,
     *   scheduledAt?: ?string,
     *   sentDate?: ?string,
     *   unsubscribeInstruction?: ?string,
     *   tags?: ?array<string>,
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
        $this->organisationPrefix = $values['organisationPrefix'] ?? null;
        $this->scheduledAt = $values['scheduledAt'] ?? null;
        $this->sender = $values['sender'];
        $this->sentDate = $values['sentDate'] ?? null;
        $this->status = $values['status'];
        $this->unsubscribeInstruction = $values['unsubscribeInstruction'] ?? null;
        $this->recipients = $values['recipients'];
        $this->statistics = $values['statistics'];
        $this->tags = $values['tags'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
