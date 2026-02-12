<?php

namespace Brevo\MasterAccount\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\MasterAccount\Types\PutCorporateSubAccountIdPlanRequestCredits;
use Brevo\Core\Json\JsonProperty;
use Brevo\MasterAccount\Types\PutCorporateSubAccountIdPlanRequestFeatures;

class PutCorporateSubAccountIdPlanRequest extends JsonSerializableType
{
    /**
     * @var ?PutCorporateSubAccountIdPlanRequestCredits $credits Credit details to update
     */
    #[JsonProperty('credits')]
    public ?PutCorporateSubAccountIdPlanRequestCredits $credits;

    /**
     * @var ?PutCorporateSubAccountIdPlanRequestFeatures $features Features details to update
     */
    #[JsonProperty('features')]
    public ?PutCorporateSubAccountIdPlanRequestFeatures $features;

    /**
     * @param array{
     *   credits?: ?PutCorporateSubAccountIdPlanRequestCredits,
     *   features?: ?PutCorporateSubAccountIdPlanRequestFeatures,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->credits = $values['credits'] ?? null;
        $this->features = $values['features'] ?? null;
    }
}
