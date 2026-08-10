<?php

namespace Brevo\TransactionalEmails\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class SendTransacEmailRequestMessageVersionsItemCcItem extends JsonSerializableType
{
    /**
     * @var ?bool $contactPixelTrackingConsent Consent of the recipient in cc for open (pixel) and click tracking, resolved by the sender at send time. Considered only if the per-contact pixel tracking consent feature is enabled for your account. Pass `true` if this recipient has consented to open and click tracking, in which case the open pixel and tracked links identify the recipient. Pass `false` to anonymise the open and click events (counted in aggregate statistics only). If it is not passed, the recipient is treated as unknown consent status and the email is still sent (the open and click are anonymised unless your account tracks unknown-consent contacts). A value other than `true`/`false` is rejected. Ignored when the feature is not enabled for your account.
     */
    #[JsonProperty('contactPixelTrackingConsent')]
    public ?bool $contactPixelTrackingConsent;

    /**
     * @var string $email CC recipient email address
     */
    #[JsonProperty('email')]
    public string $email;

    /**
     * @var ?string $name Display name of the CC recipient. Maximum length is 70 characters.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @param array{
     *   email: string,
     *   contactPixelTrackingConsent?: ?bool,
     *   name?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->contactPixelTrackingConsent = $values['contactPixelTrackingConsent'] ?? null;
        $this->email = $values['email'];
        $this->name = $values['name'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
