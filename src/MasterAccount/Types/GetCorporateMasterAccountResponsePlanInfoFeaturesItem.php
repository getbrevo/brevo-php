<?php

namespace Brevo\MasterAccount\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetCorporateMasterAccountResponsePlanInfoFeaturesItem extends JsonSerializableType
{
    /**
     * @var ?string $name Name of the feature
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?int $quantity Quantity provided in the plan
     */
    #[JsonProperty('quantity')]
    public ?int $quantity;

    /**
     * Quantity with overages provided in the plan (only
     * applicable on ENTv2)
     *
     * @var ?int $quantityWithOverages
     */
    #[JsonProperty('quantityWithOverages')]
    public ?int $quantityWithOverages;

    /**
     * @var ?int $remaining Quantity remaining in the plan
     */
    #[JsonProperty('remaining')]
    public ?int $remaining;

    /**
     * @var ?string $unitValue Unit value of the feature
     */
    #[JsonProperty('unitValue')]
    public ?string $unitValue;

    /**
     * @var ?int $used Quantity consumed by master
     */
    #[JsonProperty('used')]
    public ?int $used;

    /**
     * Quantity consumed by sub-organizations over the
     * admin plan limit (only applicable on ENTv2)
     *
     * @var ?int $usedOverages
     */
    #[JsonProperty('usedOverages')]
    public ?int $usedOverages;

    /**
     * @param array{
     *   name?: ?string,
     *   quantity?: ?int,
     *   quantityWithOverages?: ?int,
     *   remaining?: ?int,
     *   unitValue?: ?string,
     *   used?: ?int,
     *   usedOverages?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->name = $values['name'] ?? null;
        $this->quantity = $values['quantity'] ?? null;
        $this->quantityWithOverages = $values['quantityWithOverages'] ?? null;
        $this->remaining = $values['remaining'] ?? null;
        $this->unitValue = $values['unitValue'] ?? null;
        $this->used = $values['used'] ?? null;
        $this->usedOverages = $values['usedOverages'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
