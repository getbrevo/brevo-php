<?php

namespace Brevo\EmailCampaigns\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Types\AbTestVersionClicksItem;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetAbTestCampaignResultResponseClickedLinks extends JsonSerializableType
{
    /**
     * @var array<AbTestVersionClicksItem> $versionA
     */
    #[JsonProperty('Version A'), ArrayType([AbTestVersionClicksItem::class])]
    public array $versionA;

    /**
     * @var array<AbTestVersionClicksItem> $versionB
     */
    #[JsonProperty('Version B'), ArrayType([AbTestVersionClicksItem::class])]
    public array $versionB;

    /**
     * @param array{
     *   versionA: array<AbTestVersionClicksItem>,
     *   versionB: array<AbTestVersionClicksItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->versionA = $values['versionA'];
        $this->versionB = $values['versionB'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
