<?php

namespace Brevo\Contacts\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetListsResponse extends JsonSerializableType
{
    /**
     * @var ?int $count Number of lists in your account
     */
    #[JsonProperty('count')]
    public ?int $count;

    /**
     * @var ?array<GetListsResponseListsItem> $lists Listing of all the lists available in your account
     */
    #[JsonProperty('lists'), ArrayType([GetListsResponseListsItem::class])]
    public ?array $lists;

    /**
     * @param array{
     *   count?: ?int,
     *   lists?: ?array<GetListsResponseListsItem>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->count = $values['count'] ?? null;
        $this->lists = $values['lists'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
