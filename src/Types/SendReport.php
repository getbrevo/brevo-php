<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class SendReport extends JsonSerializableType
{
    /**
     * @var SendReportEmail $email Custom attributes for the report email.
     */
    #[JsonProperty('email')]
    public SendReportEmail $email;

    /**
     * @var ?value-of<SendReportLanguage> $language Language of email content for campaign report sending.
     */
    #[JsonProperty('language')]
    public ?string $language;

    /**
     * @param array{
     *   email: SendReportEmail,
     *   language?: ?value-of<SendReportLanguage>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->email = $values['email'];
        $this->language = $values['language'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
