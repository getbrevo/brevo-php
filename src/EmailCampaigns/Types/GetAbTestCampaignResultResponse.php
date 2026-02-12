<?php

namespace Brevo\EmailCampaigns\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetAbTestCampaignResultResponse extends JsonSerializableType
{
    /**
     * @var ?string $clickRate Click rate for current winning version
     */
    #[JsonProperty('clickRate')]
    public ?string $clickRate;

    /**
     * @var ?GetAbTestCampaignResultResponseClickedLinks $clickedLinks
     */
    #[JsonProperty('clickedLinks')]
    public ?GetAbTestCampaignResultResponseClickedLinks $clickedLinks;

    /**
     * @var ?string $openRate Open rate for current winning version
     */
    #[JsonProperty('openRate')]
    public ?string $openRate;

    /**
     * @var ?GetAbTestCampaignResultResponseStatistics $statistics
     */
    #[JsonProperty('statistics')]
    public ?GetAbTestCampaignResultResponseStatistics $statistics;

    /**
     * @var ?value-of<GetAbTestCampaignResultResponseWinningCriteria> $winningCriteria Criteria chosen for winning version (Open/Click)
     */
    #[JsonProperty('winningCriteria')]
    public ?string $winningCriteria;

    /**
     * @var ?string $winningSubjectLine Subject Line of current winning version
     */
    #[JsonProperty('winningSubjectLine')]
    public ?string $winningSubjectLine;

    /**
     * @var ?value-of<GetAbTestCampaignResultResponseWinningVersion> $winningVersion Winning Campaign Info. pending = Campaign has been picked for sending and winning version is yet to be decided, tie = A tie happened between both the versions, notAvailable = Campaign has not yet been picked for sending.
     */
    #[JsonProperty('winningVersion')]
    public ?string $winningVersion;

    /**
     * @var ?string $winningVersionRate Open/Click rate for the winner version
     */
    #[JsonProperty('winningVersionRate')]
    public ?string $winningVersionRate;

    /**
     * @param array{
     *   clickRate?: ?string,
     *   clickedLinks?: ?GetAbTestCampaignResultResponseClickedLinks,
     *   openRate?: ?string,
     *   statistics?: ?GetAbTestCampaignResultResponseStatistics,
     *   winningCriteria?: ?value-of<GetAbTestCampaignResultResponseWinningCriteria>,
     *   winningSubjectLine?: ?string,
     *   winningVersion?: ?value-of<GetAbTestCampaignResultResponseWinningVersion>,
     *   winningVersionRate?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->clickRate = $values['clickRate'] ?? null;
        $this->clickedLinks = $values['clickedLinks'] ?? null;
        $this->openRate = $values['openRate'] ?? null;
        $this->statistics = $values['statistics'] ?? null;
        $this->winningCriteria = $values['winningCriteria'] ?? null;
        $this->winningSubjectLine = $values['winningSubjectLine'] ?? null;
        $this->winningVersion = $values['winningVersion'] ?? null;
        $this->winningVersionRate = $values['winningVersionRate'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
