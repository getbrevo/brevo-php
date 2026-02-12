<?php

namespace Brevo\Account\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * User seat information for the plan
 */
class GetAccountResponsePlanVerticalsItemUsers extends JsonSerializableType
{
    /**
     * @var string $purchasedSeats Number of purchased user seats
     */
    #[JsonProperty('purchasedSeats')]
    public string $purchasedSeats;

    /**
     * @var string $usedSeats Number of used user seats
     */
    #[JsonProperty('usedSeats')]
    public string $usedSeats;

    /**
     * @param array{
     *   purchasedSeats: string,
     *   usedSeats: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->purchasedSeats = $values['purchasedSeats'];
        $this->usedSeats = $values['usedSeats'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
