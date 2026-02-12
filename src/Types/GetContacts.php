<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetContacts extends JsonSerializableType
{
    /**
     * @var array<GetContactDetails> $contacts
     */
    #[JsonProperty('contacts'), ArrayType([GetContactDetails::class])]
    public array $contacts;

    /**
     * @var int $count Number of contacts
     */
    #[JsonProperty('count')]
    public int $count;

    /**
     * @param array{
     *   contacts: array<GetContactDetails>,
     *   count: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->contacts = $values['contacts'];
        $this->count = $values['count'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
