<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class SendTransacSms extends JsonSerializableType
{
    /**
     * @var ?string $organisationPrefix A recognizable prefix will ensure your audience knows who you are. Recommended by U.S. carriers. This will be added as your Brand Name before the message content. **Prefer verifying maximum length of 160 characters including this prefix in message content to avoid multiple sending of same sms.**
     */
    #[JsonProperty('organisationPrefix')]
    public ?string $organisationPrefix;

    /**
     * @var string $recipient Mobile number to send SMS with the country code
     */
    #[JsonProperty('recipient')]
    public string $recipient;

    /**
     * @var string $sender Name of the sender. **The number of characters is limited to 11 for alphanumeric characters and 15 for numeric characters**
     */
    #[JsonProperty('sender')]
    public string $sender;

    /**
     * @var ?SendTransacSmsTag $tag Tag of the message
     */
    #[JsonProperty('tag')]
    public ?SendTransacSmsTag $tag;

    /**
     * @var ?value-of<SendTransacSmsType> $type Type of the SMS. Marketing SMS messages are those sent typically with marketing content. Transactional SMS messages are sent to individuals and are triggered in response to some action, such as a sign-up, purchase, etc.
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @var ?bool $unicodeEnabled Format of the message. It indicates whether the content should be treated as unicode or not.
     */
    #[JsonProperty('unicodeEnabled')]
    public ?bool $unicodeEnabled;

    /**
     * @var ?string $webUrl Webhook to call for each event triggered by the message (delivered etc.)
     */
    #[JsonProperty('webUrl')]
    public ?string $webUrl;

    /**
     * @param array{
     *   recipient: string,
     *   sender: string,
     *   organisationPrefix?: ?string,
     *   tag?: ?SendTransacSmsTag,
     *   type?: ?value-of<SendTransacSmsType>,
     *   unicodeEnabled?: ?bool,
     *   webUrl?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->organisationPrefix = $values['organisationPrefix'] ?? null;
        $this->recipient = $values['recipient'];
        $this->sender = $values['sender'];
        $this->tag = $values['tag'] ?? null;
        $this->type = $values['type'] ?? null;
        $this->unicodeEnabled = $values['unicodeEnabled'] ?? null;
        $this->webUrl = $values['webUrl'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
