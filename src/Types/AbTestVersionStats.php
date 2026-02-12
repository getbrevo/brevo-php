<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * Percentage of a particular event for both versions
 */
class AbTestVersionStats extends JsonSerializableType
{
    /**
     * @var string $versionA percentage of an event for version A
     */
    #[JsonProperty('Version A')]
    public string $versionA;

    /**
     * @var string $versionB percentage of an event for version B
     */
    #[JsonProperty('Version B')]
    public string $versionB;

    /**
     * @param array{
     *   versionA: string,
     *   versionB: string,
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
