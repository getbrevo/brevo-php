<?php

namespace Brevo\MasterAccount\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\MasterAccount\Types\PutCorporateSubAccountsPlanRequestCredits;
use Brevo\Core\Json\JsonProperty;
use Brevo\MasterAccount\Types\PutCorporateSubAccountsPlanRequestFeatures;
use Brevo\Core\Types\ArrayType;

class PutCorporateSubAccountsPlanRequest extends JsonSerializableType
{
    /**
     * @var ?PutCorporateSubAccountsPlanRequestCredits $credits Credit details to update
     */
    #[JsonProperty('credits')]
    public ?PutCorporateSubAccountsPlanRequestCredits $credits;

    /**
     * @var ?PutCorporateSubAccountsPlanRequestFeatures $features Features details to update
     */
    #[JsonProperty('features')]
    public ?PutCorporateSubAccountsPlanRequestFeatures $features;

    /**
     * @var ?array<int> $subAccountIds List of sub-account ids
     */
    #[JsonProperty('subAccountIds'), ArrayType(['integer'])]
    public ?array $subAccountIds;

    /**
     * @param array{
     *   credits?: ?PutCorporateSubAccountsPlanRequestCredits,
     *   features?: ?PutCorporateSubAccountsPlanRequestFeatures,
     *   subAccountIds?: ?array<int>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->credits = $values['credits'] ?? null;
        $this->features = $values['features'] ?? null;
        $this->subAccountIds = $values['subAccountIds'] ?? null;
    }
}
