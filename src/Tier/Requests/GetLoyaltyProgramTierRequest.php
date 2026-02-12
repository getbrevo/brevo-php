<?php

namespace Brevo\Tier\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Tier\Types\GetLoyaltyProgramTierRequestVersion;

class GetLoyaltyProgramTierRequest extends JsonSerializableType
{
    /**
     * @var ?value-of<GetLoyaltyProgramTierRequestVersion> $version Select 'active' to retrieve list of all tiers which are live for clients. Select draft to retrieve list of all non deleted tiers.
     */
    public ?string $version;

    /**
     * @param array{
     *   version?: ?value-of<GetLoyaltyProgramTierRequestVersion>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->version = $values['version'] ?? null;
    }
}
