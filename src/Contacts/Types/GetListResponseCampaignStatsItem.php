<?php

namespace Brevo\Contacts\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Types\GetCampaignStats;

class GetListResponseCampaignStatsItem extends JsonSerializableType
{
    /**
     * @var int $campaignId ID of the campaign
     */
    #[JsonProperty('campaignId')]
    public int $campaignId;

    /**
     * @var GetCampaignStats $stats
     */
    #[JsonProperty('stats')]
    public GetCampaignStats $stats;

    /**
     * @param array{
     *   campaignId: int,
     *   stats: GetCampaignStats,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->campaignId = $values['campaignId'];
        $this->stats = $values['stats'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
