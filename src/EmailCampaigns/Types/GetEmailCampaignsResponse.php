<?php

namespace Brevo\EmailCampaigns\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetEmailCampaignsResponse extends JsonSerializableType
{
    /**
     * @var ?array<GetEmailCampaignsResponseCampaignsItem> $campaigns
     */
    #[JsonProperty('campaigns'), ArrayType([GetEmailCampaignsResponseCampaignsItem::class])]
    public ?array $campaigns;

    /**
     * @var ?int $count Number of Email campaigns retrieved
     */
    #[JsonProperty('count')]
    public ?int $count;

    /**
     * @param array{
     *   campaigns?: ?array<GetEmailCampaignsResponseCampaignsItem>,
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
