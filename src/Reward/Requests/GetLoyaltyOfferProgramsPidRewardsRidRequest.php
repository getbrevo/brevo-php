<?php

namespace Brevo\Reward\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Reward\Types\GetLoyaltyOfferProgramsPidRewardsRidRequestVersion;

class GetLoyaltyOfferProgramsPidRewardsRidRequest extends JsonSerializableType
{
    /**
     * @var ?value-of<GetLoyaltyOfferProgramsPidRewardsRidRequestVersion> $version Version
     */
    public ?string $version;

    /**
     * @param array{
     *   version?: ?value-of<GetLoyaltyOfferProgramsPidRewardsRidRequestVersion>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->version = $values['version'] ?? null;
    }
}
