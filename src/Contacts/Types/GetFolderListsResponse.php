<?php

namespace Brevo\Contacts\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Types\GetList;
use Brevo\Core\Types\ArrayType;

class GetFolderListsResponse extends JsonSerializableType
{
    /**
     * @var ?int $count Number of lists in the folder
     */
    #[JsonProperty('count')]
    public ?int $count;

    /**
     * @var ?array<GetList> $lists
     */
    #[JsonProperty('lists'), ArrayType([GetList::class])]
    public ?array $lists;

    /**
     * @param array{
     *   count?: ?int,
     *   lists?: ?array<GetList>,
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
