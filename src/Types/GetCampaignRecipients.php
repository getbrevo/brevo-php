<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetCampaignRecipients extends JsonSerializableType
{
    /**
     * @var array<int> $exclusionLists
     */
    #[JsonProperty('exclusionLists'), ArrayType(['integer'])]
    public array $exclusionLists;

    /**
     * @var array<int> $lists
     */
    #[JsonProperty('lists'), ArrayType(['integer'])]
    public array $lists;

    /**
     * @param array{
     *   exclusionLists: array<int>,
     *   lists: array<int>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->exclusionLists = $values['exclusionLists'];
        $this->lists = $values['lists'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
