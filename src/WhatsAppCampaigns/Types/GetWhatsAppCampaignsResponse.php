<?php

namespace Brevo\WhatsAppCampaigns\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetWhatsAppCampaignsResponse extends JsonSerializableType
{
    /**
     * @var ?array<GetWhatsAppCampaignsResponseCampaignsItem> $campaigns
     */
    #[JsonProperty('campaigns'), ArrayType([GetWhatsAppCampaignsResponseCampaignsItem::class])]
    public ?array $campaigns;

    /**
     * @var ?int $count Number of WhatsApp campaigns retrieved
     */
    #[JsonProperty('count')]
    public ?int $count;

    /**
     * @param array{
     *   campaigns?: ?array<GetWhatsAppCampaignsResponseCampaignsItem>,
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
