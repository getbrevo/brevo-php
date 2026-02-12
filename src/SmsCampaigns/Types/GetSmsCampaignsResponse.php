<?php

namespace Brevo\SmsCampaigns\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetSmsCampaignsResponse extends JsonSerializableType
{
    /**
     * @var ?array<GetSmsCampaignsResponseCampaignsItem> $campaigns
     */
    #[JsonProperty('campaigns'), ArrayType([GetSmsCampaignsResponseCampaignsItem::class])]
    public ?array $campaigns;

    /**
     * @var ?int $count Number of SMS campaigns retrieved
     */
    #[JsonProperty('count')]
    public ?int $count;

    /**
     * @param array{
     *   campaigns?: ?array<GetSmsCampaignsResponseCampaignsItem>,
     *   count?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->campaigns = $values['campaigns'] ?? null;
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
