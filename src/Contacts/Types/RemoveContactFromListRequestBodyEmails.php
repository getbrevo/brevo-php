<?php

namespace Brevo\Contacts\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class RemoveContactFromListRequestBodyEmails extends JsonSerializableType
{
    /**
     * @var ?array<string> $emails **Required if 'all' is false and 'ids', 'extIds' are empty.** Emails to remove from a list. You can pass a **maximum of 150 emails** for removal in one request.
     */
    #[JsonProperty('emails'), ArrayType(['string'])]
    public ?array $emails;

    /**
     * @param array{
     *   emails?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->emails = $values['emails'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
