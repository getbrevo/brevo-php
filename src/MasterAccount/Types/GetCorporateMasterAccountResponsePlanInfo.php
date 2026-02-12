<?php

namespace Brevo\MasterAccount\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

/**
 * Plan details
 */
class GetCorporateMasterAccountResponsePlanInfo extends JsonSerializableType
{
    /**
     * @var ?string $currencyCode Plan currency
     */
    #[JsonProperty('currencyCode')]
    public ?string $currencyCode;

    /**
     * @var ?array<GetCorporateMasterAccountResponsePlanInfoFeaturesItem> $features List of provided features in the plan
     */
    #[JsonProperty('features'), ArrayType([GetCorporateMasterAccountResponsePlanInfoFeaturesItem::class])]
    public ?array $features;

    /**
     * @var ?int $nextBillingAt Timestamp of next billing date
     */
    #[JsonProperty('nextBillingAt')]
    public ?int $nextBillingAt;

    /**
     * @var ?value-of<GetCorporateMasterAccountResponsePlanInfoPlanPeriod> $planPeriod Plan period type
     */
    #[JsonProperty('planPeriod')]
    public ?string $planPeriod;

    /**
     * @var ?float $price Plan amount
     */
    #[JsonProperty('price')]
    public ?float $price;

    /**
     * @var ?int $subAccounts Number of sub-accounts
     */
    #[JsonProperty('subAccounts')]
    public ?int $subAccounts;

    /**
     * @param array{
     *   currencyCode?: ?string,
     *   features?: ?array<GetCorporateMasterAccountResponsePlanInfoFeaturesItem>,
     *   nextBillingAt?: ?int,
     *   planPeriod?: ?value-of<GetCorporateMasterAccountResponsePlanInfoPlanPeriod>,
     *   price?: ?float,
     *   subAccounts?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->currencyCode = $values['currencyCode'] ?? null;
        $this->features = $values['features'] ?? null;
        $this->nextBillingAt = $values['nextBillingAt'] ?? null;
        $this->planPeriod = $values['planPeriod'] ?? null;
        $this->price = $values['price'] ?? null;
        $this->subAccounts = $values['subAccounts'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
