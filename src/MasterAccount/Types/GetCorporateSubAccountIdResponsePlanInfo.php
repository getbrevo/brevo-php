<?php

namespace Brevo\MasterAccount\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * Sub-account plan details
 */
class GetCorporateSubAccountIdResponsePlanInfo extends JsonSerializableType
{
    /**
     * @var ?GetCorporateSubAccountIdResponsePlanInfoCredits $credits Credits quota and remaining credits on the sub-account
     */
    #[JsonProperty('credits')]
    public ?GetCorporateSubAccountIdResponsePlanInfoCredits $credits;

    /**
     * @var ?GetCorporateSubAccountIdResponsePlanInfoFeatures $features Features available on the sub-account
     */
    #[JsonProperty('features')]
    public ?GetCorporateSubAccountIdResponsePlanInfoFeatures $features;

    /**
     * @var ?string $planType type of the plan
     */
    #[JsonProperty('planType')]
    public ?string $planType;

    /**
     * @param array{
     *   credits?: ?GetCorporateSubAccountIdResponsePlanInfoCredits,
     *   features?: ?GetCorporateSubAccountIdResponsePlanInfoFeatures,
     *   planType?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->credits = $values['credits'] ?? null;
        $this->features = $values['features'] ?? null;
        $this->planType = $values['planType'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
