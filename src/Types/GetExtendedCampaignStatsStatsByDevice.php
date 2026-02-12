<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetExtendedCampaignStatsStatsByDevice extends JsonSerializableType
{
    /**
     * @var ?array<string, GetDeviceBrowserStats> $desktop Statistics of the campaign on the basis of desktop devices
     */
    #[JsonProperty('desktop'), ArrayType(['string' => GetDeviceBrowserStats::class])]
    public ?array $desktop;

    /**
     * @var ?array<string, GetDeviceBrowserStats> $mobile Statistics of the campaign on the basis of mobile devices
     */
    #[JsonProperty('mobile'), ArrayType(['string' => GetDeviceBrowserStats::class])]
    public ?array $mobile;

    /**
     * @var ?array<string, GetDeviceBrowserStats> $tablet Statistics of the campaign on the basis of tablet devices
     */
    #[JsonProperty('tablet'), ArrayType(['string' => GetDeviceBrowserStats::class])]
    public ?array $tablet;

    /**
     * @var ?array<string, GetDeviceBrowserStats> $unknown Statistics of the campaign on the basis of unknown devices
     */
    #[JsonProperty('unknown'), ArrayType(['string' => GetDeviceBrowserStats::class])]
    public ?array $unknown;

    /**
     * @param array{
     *   desktop?: ?array<string, GetDeviceBrowserStats>,
     *   mobile?: ?array<string, GetDeviceBrowserStats>,
     *   tablet?: ?array<string, GetDeviceBrowserStats>,
     *   unknown?: ?array<string, GetDeviceBrowserStats>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->desktop = $values['desktop'] ?? null;
        $this->mobile = $values['mobile'] ?? null;
        $this->tablet = $values['tablet'] ?? null;
        $this->unknown = $values['unknown'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
