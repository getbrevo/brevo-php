<?php

namespace Brevo\Contacts\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class AddContactToListRequestBodyEmails extends JsonSerializableType
{
    /**
     * @var ?array<string> $emails Emails to add to a list. You can pass a **maximum of 150 emails** for addition in one request. **_If you need to add the emails in bulk, please prefer /contacts/import api._**
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
