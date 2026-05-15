<?php

namespace Brevo\SmsCampaigns\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

/**
 * Recipients of the SMS campaign. For a single campaign, lists and exclusion lists are returned as objects with id and name.
 */
class GetSmsCampaignResponseRecipients extends JsonSerializableType
{
    /**
     * @var ?array<GetSmsCampaignResponseRecipientsExclusionListsItem> $exclusionLists
     */
    #[JsonProperty('exclusionLists'), ArrayType([GetSmsCampaignResponseRecipientsExclusionListsItem::class])]
    public ?array $exclusionLists;

    /**
     * @var ?array<GetSmsCampaignResponseRecipientsListsItem> $lists
     */
    #[JsonProperty('lists'), ArrayType([GetSmsCampaignResponseRecipientsListsItem::class])]
    public ?array $lists;

    /**
     * @param array{
     *   exclusionLists?: ?array<GetSmsCampaignResponseRecipientsExclusionListsItem>,
     *   lists?: ?array<GetSmsCampaignResponseRecipientsListsItem>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->exclusionLists = $values['exclusionLists'] ?? null;
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
