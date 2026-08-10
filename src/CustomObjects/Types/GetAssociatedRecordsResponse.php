<?php

namespace Brevo\CustomObjects\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetAssociatedRecordsResponse extends JsonSerializableType
{
    /**
     * @var ?bool $hasMore `true` when at least one more associated record exists after this page.
     */
    #[JsonProperty('has_more')]
    public ?bool $hasMore;

    /**
     * @var ?array<GetAssociatedRecordsResponseItemsItem> $items Associated records for this page, up to 20 per page. Fewer when the last page is reached, empty when the source record has no matching associations.
     */
    #[JsonProperty('items'), ArrayType([GetAssociatedRecordsResponseItemsItem::class])]
    public ?array $items;

    /**
     * @var ?int $offset The offset that was requested.
     */
    #[JsonProperty('offset')]
    public ?int $offset;

    /**
     * @param array{
     *   hasMore?: ?bool,
     *   items?: ?array<GetAssociatedRecordsResponseItemsItem>,
     *   offset?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->hasMore = $values['hasMore'] ?? null;
        $this->items = $values['items'] ?? null;
        $this->offset = $values['offset'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
