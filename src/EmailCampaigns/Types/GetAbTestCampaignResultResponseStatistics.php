<?php

namespace Brevo\EmailCampaigns\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Types\AbTestVersionStats;
use Brevo\Core\Json\JsonProperty;

class GetAbTestCampaignResultResponseStatistics extends JsonSerializableType
{
    /**
     * @var AbTestVersionStats $clicks
     */
    #[JsonProperty('clicks')]
    public AbTestVersionStats $clicks;

    /**
     * @var AbTestVersionStats $complaints
     */
    #[JsonProperty('complaints')]
    public AbTestVersionStats $complaints;

    /**
     * @var AbTestVersionStats $hardBounces
     */
    #[JsonProperty('hardBounces')]
    public AbTestVersionStats $hardBounces;

    /**
     * @var AbTestVersionStats $openers
     */
    #[JsonProperty('openers')]
    public AbTestVersionStats $openers;

    /**
     * @var AbTestVersionStats $softBounces
     */
    #[JsonProperty('softBounces')]
    public AbTestVersionStats $softBounces;

    /**
     * @var AbTestVersionStats $unsubscribed
     */
    #[JsonProperty('unsubscribed')]
    public AbTestVersionStats $unsubscribed;

    /**
     * @param array{
     *   clicks: AbTestVersionStats,
     *   complaints: AbTestVersionStats,
     *   hardBounces: AbTestVersionStats,
     *   openers: AbTestVersionStats,
     *   softBounces: AbTestVersionStats,
     *   unsubscribed: AbTestVersionStats,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->clicks = $values['clicks'];
        $this->complaints = $values['complaints'];
        $this->hardBounces = $values['hardBounces'];
        $this->openers = $values['openers'];
        $this->softBounces = $values['softBounces'];
        $this->unsubscribed = $values['unsubscribed'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
