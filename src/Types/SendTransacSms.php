<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\Union;
use Brevo\Core\Types\ArrayType;

class SendTransacSms extends JsonSerializableType
{
    /**
     * @var ?string $organisationPrefix A recognizable prefix will ensure your audience knows who you are. Recommended by U.S. carriers. This will be added as your Brand Name before the message content. **Prefer verifying maximum length of 160 characters including this prefix in message content to avoid multiple sending of same sms.**
     */
    #[JsonProperty('organisationPrefix')]
    public ?string $organisationPrefix;

    /**
     * @var string $recipient Mobile number to send SMS with the country code. Must contain between 6 and 15 digits, optionally prefixed with '+'.
     */
    #[JsonProperty('recipient')]
    public string $recipient;

    /**
     * @var string $sender Name of the sender. **The number of characters is limited to 11 for alphanumeric characters and 15 for numeric characters.** Alphanumeric sender names (up to 11 characters) must contain only letters and digits. Numeric sender names (12-15 characters) must contain only digits.
     */
    #[JsonProperty('sender')]
    public string $sender;

    /**
     * @var (
     *    string
     *   |array<string>
     * )|null $tag Tag of the message. Can be a single string or an array of strings (maximum 10 tags). Each tag must be a non-empty string.
     */
    #[JsonProperty('tag'), Union('string', ['string'], 'null')]
    public string|array|null $tag;

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
     * @var ?array<string, mixed> $params Pass the set of attributes to customize the template. For example, {"FNAME":"Joe", "LNAME":"Doe"}. These are the placeholder variables in the template that will be replaced with the corresponding values passed in the params object. Applicable only if `templateId` is used.
     */
    #[JsonProperty('params'), ArrayType(['string' => 'mixed'])]
    public ?array $params;

    /**
     * @var ?int $templateId Template ID to send SMS with the template. When provided, overrides the content parameter. Mandatory if 'content' is not passed.
     */
    #[JsonProperty('templateId')]
    public ?int $templateId;

    /**
     * @var ?string $content Content of the message. If more than **160 characters** long, will be sent as multiple text messages. Mandatory if 'templateId' is not passed, ignored if 'templateId' is passed.
     */
    #[JsonProperty('content')]
    public ?string $content;

    /**
     * @param array{
     *   recipient: string,
     *   sender: string,
     *   organisationPrefix?: ?string,
     *   tag?: (
     *    string
     *   |array<string>
     * )|null,
     *   type?: ?value-of<SendTransacSmsType>,
     *   unicodeEnabled?: ?bool,
     *   webUrl?: ?string,
     *   params?: ?array<string, mixed>,
     *   templateId?: ?int,
     *   content?: ?string,
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
        $this->params = $values['params'] ?? null;
        $this->templateId = $values['templateId'] ?? null;
        $this->content = $values['content'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
