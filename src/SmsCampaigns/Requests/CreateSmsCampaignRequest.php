<?php

namespace Brevo\SmsCampaigns\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\SmsCampaigns\Types\CreateSmsCampaignRequestRecipients;

class CreateSmsCampaignRequest extends JsonSerializableType
{
    /**
     * @var string $content Content of the message. The **maximum characters used per SMS is 160**, if used more than that, it will be counted as more than one SMS.
     */
    #[JsonProperty('content')]
    public string $content;

    /**
     * @var string $name Name of the campaign
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $organisationPrefix A recognizable prefix will ensure your audience knows who you are. Recommended by U.S. carriers. This will be added as your Brand Name before the message content. **Prefer verifying maximum length of 160 characters including this prefix in message content to avoid multiple sending of same sms.**
     */
    #[JsonProperty('organisationPrefix')]
    public ?string $organisationPrefix;

    /**
     * @var ?CreateSmsCampaignRequestRecipients $recipients
     */
    #[JsonProperty('recipients')]
    public ?CreateSmsCampaignRequestRecipients $recipients;

    /**
     * @var ?string $scheduledAt UTC date-time on which the campaign has to run (YYYY-MM-DDTHH:mm:ss.SSSZ). **Prefer to pass your timezone in date-time format for accurate result.**
     */
    #[JsonProperty('scheduledAt')]
    public ?string $scheduledAt;

    /**
     * @var string $sender Name of the sender. **The number of characters is limited to 11 for alphanumeric characters and 15 for numeric characters**
     */
    #[JsonProperty('sender')]
    public string $sender;

    /**
     * @var ?bool $unicodeEnabled Format of the message. It indicates whether the content should be treated as unicode or not.
     */
    #[JsonProperty('unicodeEnabled')]
    public ?bool $unicodeEnabled;

    /**
     * @var ?string $unsubscribeInstruction Instructions to unsubscribe from future communications. Recommended by U.S. carriers. Must include **STOP** keyword. This will be added as instructions after the end of message content. **Prefer verifying maximum length of 160 characters including this instructions in message content to avoid multiple sending of same sms.**
     */
    #[JsonProperty('unsubscribeInstruction')]
    public ?string $unsubscribeInstruction;

    /**
     * @param array{
     *   content: string,
     *   name: string,
     *   sender: string,
     *   organisationPrefix?: ?string,
     *   recipients?: ?CreateSmsCampaignRequestRecipients,
     *   scheduledAt?: ?string,
     *   unicodeEnabled?: ?bool,
     *   unsubscribeInstruction?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->content = $values['content'];
        $this->name = $values['name'];
        $this->organisationPrefix = $values['organisationPrefix'] ?? null;
        $this->recipients = $values['recipients'] ?? null;
        $this->scheduledAt = $values['scheduledAt'] ?? null;
        $this->sender = $values['sender'];
        $this->unicodeEnabled = $values['unicodeEnabled'] ?? null;
        $this->unsubscribeInstruction = $values['unsubscribeInstruction'] ?? null;
    }
}
