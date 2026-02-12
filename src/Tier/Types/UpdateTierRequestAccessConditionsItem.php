<?php

namespace Brevo\Tier\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class UpdateTierRequestAccessConditionsItem extends JsonSerializableType
{
    /**
     * @var ?string $balanceDefinitionId Balance definition identifier for accessing the tier
     */
    #[JsonProperty('balanceDefinitionId')]
    public ?string $balanceDefinitionId;

    /**
     * @var ?int $minimumValue Minimum value required to access the tier
     */
    #[JsonProperty('minimumValue')]
    public ?int $minimumValue;

    /**
     * @param array{
     *   balanceDefinitionId?: ?string,
     *   minimumValue?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->balanceDefinitionId = $values['balanceDefinitionId'] ?? null;
        $this->minimumValue = $values['minimumValue'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
