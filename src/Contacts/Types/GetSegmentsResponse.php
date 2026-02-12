<?php

namespace Brevo\Contacts\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetSegmentsResponse extends JsonSerializableType
{
    /**
     * @var ?int $count Number of Segments in your account
     */
    #[JsonProperty('count')]
    public ?int $count;

    /**
     * @var ?array<GetSegmentsResponseSegmentsItem> $segments Listing of all the segments available in your account
     */
    #[JsonProperty('segments'), ArrayType([GetSegmentsResponseSegmentsItem::class])]
    public ?array $segments;

    /**
     * @param array{
     *   count?: ?int,
     *   segments?: ?array<GetSegmentsResponseSegmentsItem>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->count = $values['count'] ?? null;
        $this->segments = $values['segments'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
