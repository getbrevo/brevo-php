<?php

namespace Brevo\Reward\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetLoyaltyOfferProgramsPidOffersResponse extends JsonSerializableType
{
    /**
     * @var ?array<GetLoyaltyOfferProgramsPidOffersResponseItemsItem> $items Items for the current reward
     */
    #[JsonProperty('items'), ArrayType([GetLoyaltyOfferProgramsPidOffersResponseItemsItem::class])]
    public ?array $items;

    /**
     * @var ?int $totalCount Count of the associated parameter in current reward
     */
    #[JsonProperty('totalCount')]
    public ?int $totalCount;

    /**
     * @param array{
     *   items?: ?array<GetLoyaltyOfferProgramsPidOffersResponseItemsItem>,
     *   totalCount?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->items = $values['items'] ?? null;
        $this->totalCount = $values['totalCount'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
