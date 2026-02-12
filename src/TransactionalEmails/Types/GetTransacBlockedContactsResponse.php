<?php

namespace Brevo\TransactionalEmails\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetTransacBlockedContactsResponse extends JsonSerializableType
{
    /**
     * @var ?array<GetTransacBlockedContactsResponseContactsItem> $contacts
     */
    #[JsonProperty('contacts'), ArrayType([GetTransacBlockedContactsResponseContactsItem::class])]
    public ?array $contacts;

    /**
     * @var ?int $count Count of blocked or unsubscribed contact
     */
    #[JsonProperty('count')]
    public ?int $count;

    /**
     * @param array{
     *   contacts?: ?array<GetTransacBlockedContactsResponseContactsItem>,
     *   count?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->contacts = $values['contacts'] ?? null;
        $this->count = $values['count'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
