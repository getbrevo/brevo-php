<?php

namespace Brevo\Contacts\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetContactStatsResponseClickedItem extends JsonSerializableType
{
    /**
     * @var int $campaignId ID of the campaign which generated the event
     */
    #[JsonProperty('campaignId')]
    public int $campaignId;

    /**
     * @var array<GetContactStatsResponseClickedItemLinksItem> $links
     */
    #[JsonProperty('links'), ArrayType([GetContactStatsResponseClickedItemLinksItem::class])]
    public array $links;

    /**
     * @param array{
     *   campaignId: int,
     *   links: array<GetContactStatsResponseClickedItemLinksItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->campaignId = $values['campaignId'];
        $this->links = $values['links'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
