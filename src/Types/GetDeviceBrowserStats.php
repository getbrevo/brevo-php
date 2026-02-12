<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetDeviceBrowserStats extends JsonSerializableType
{
    /**
     * @var int $clickers Number of total clicks for the campaign using the particular browser
     */
    #[JsonProperty('clickers')]
    public int $clickers;

    /**
     * @var int $uniqueClicks Number of unique clicks for the campaign using the particular browser
     */
    #[JsonProperty('uniqueClicks')]
    public int $uniqueClicks;

    /**
     * @var int $uniqueViews Number of unique openings for the campaign using the particular browser
     */
    #[JsonProperty('uniqueViews')]
    public int $uniqueViews;

    /**
     * @var int $viewed Number of openings for the campaign using the particular browser
     */
    #[JsonProperty('viewed')]
    public int $viewed;

    /**
     * @param array{
     *   clickers: int,
     *   uniqueClicks: int,
     *   uniqueViews: int,
     *   viewed: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->clickers = $values['clickers'];
        $this->uniqueClicks = $values['uniqueClicks'];
        $this->uniqueViews = $values['uniqueViews'];
        $this->viewed = $values['viewed'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
