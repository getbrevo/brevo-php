<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetExtendedCampaignStats extends JsonSerializableType
{
    /**
     * @var array<GetCampaignStats> $campaignStats List-wise statistics of the campaign.
     */
    #[JsonProperty('campaignStats'), ArrayType([GetCampaignStats::class])]
    public array $campaignStats;

    /**
     * @var GetCampaignStats $globalStats Overall statistics of the campaign
     */
    #[JsonProperty('globalStats')]
    public GetCampaignStats $globalStats;

    /**
     * @var GetExtendedCampaignStatsLinksStats $linksStats Statistics about the number of clicks for the links
     */
    #[JsonProperty('linksStats')]
    public GetExtendedCampaignStatsLinksStats $linksStats;

    /**
     * @var int $mirrorClick Number of clicks on mirror link
     */
    #[JsonProperty('mirrorClick')]
    public int $mirrorClick;

    /**
     * @var int $remaining Number of remaning emails to send
     */
    #[JsonProperty('remaining')]
    public int $remaining;

    /**
     * @var array<string, GetDeviceBrowserStats> $statsByBrowser
     */
    #[JsonProperty('statsByBrowser'), ArrayType(['string' => GetDeviceBrowserStats::class])]
    public array $statsByBrowser;

    /**
     * @var GetExtendedCampaignStatsStatsByDevice $statsByDevice
     */
    #[JsonProperty('statsByDevice')]
    public GetExtendedCampaignStatsStatsByDevice $statsByDevice;

    /**
     * @var array<string, GetCampaignStats> $statsByDomain
     */
    #[JsonProperty('statsByDomain'), ArrayType(['string' => GetCampaignStats::class])]
    public array $statsByDomain;

    /**
     * @param array{
     *   campaignStats: array<GetCampaignStats>,
     *   globalStats: GetCampaignStats,
     *   linksStats: GetExtendedCampaignStatsLinksStats,
     *   mirrorClick: int,
     *   remaining: int,
     *   statsByBrowser: array<string, GetDeviceBrowserStats>,
     *   statsByDevice: GetExtendedCampaignStatsStatsByDevice,
     *   statsByDomain: array<string, GetCampaignStats>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->campaignStats = $values['campaignStats'];
        $this->globalStats = $values['globalStats'];
        $this->linksStats = $values['linksStats'];
        $this->mirrorClick = $values['mirrorClick'];
        $this->remaining = $values['remaining'];
        $this->statsByBrowser = $values['statsByBrowser'];
        $this->statsByDevice = $values['statsByDevice'];
        $this->statsByDomain = $values['statsByDomain'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
