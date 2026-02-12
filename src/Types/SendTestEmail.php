<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class SendTestEmail extends JsonSerializableType
{
    /**
     * @var ?array<string> $emailTo List of the email addresses of the recipients whom you wish to send the test mail. _If left empty, the test mail will be sent to your entire test list. You can not send more than 50 test emails per day_.
     */
    #[JsonProperty('emailTo'), ArrayType(['string'])]
    public ?array $emailTo;

    /**
     * @param array{
     *   emailTo?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->emailTo = $values['emailTo'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
