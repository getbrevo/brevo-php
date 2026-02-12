<?php

namespace Brevo\ExternalFeeds\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetAllExternalFeedsResponse extends JsonSerializableType
{
    /**
     * @var int $count Total number of feeds
     */
    #[JsonProperty('count')]
    public int $count;

    /**
     * @var array<GetAllExternalFeedsResponseFeedsItem> $feeds List of external feeds
     */
    #[JsonProperty('feeds'), ArrayType([GetAllExternalFeedsResponseFeedsItem::class])]
    public array $feeds;

    /**
     * @param array{
     *   count: int,
     *   feeds: array<GetAllExternalFeedsResponseFeedsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->count = $values['count'];
        $this->feeds = $values['feeds'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
