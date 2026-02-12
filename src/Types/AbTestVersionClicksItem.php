<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class AbTestVersionClicksItem extends JsonSerializableType
{
    /**
     * @var string $clickRate Percentage of clicks of link with respect to total clicks
     */
    #[JsonProperty('clickRate')]
    public string $clickRate;

    /**
     * @var int $clicksCount Number of times a link is clicked
     */
    #[JsonProperty('clicksCount')]
    public int $clicksCount;

    /**
     * @var string $link URL of the link
     */
    #[JsonProperty('link')]
    public string $link;

    /**
     * @param array{
     *   clickRate: string,
     *   clicksCount: int,
     *   link: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->clickRate = $values['clickRate'];
        $this->clicksCount = $values['clicksCount'];
        $this->link = $values['link'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
