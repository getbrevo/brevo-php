<?php

namespace Brevo\MasterAccount\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * Billing address of master account
 */
class GetCorporateMasterAccountResponseBillingInfoAddress extends JsonSerializableType
{
    /**
     * @var ?string $countryCode Country code
     */
    #[JsonProperty('countryCode')]
    public ?string $countryCode;

    /**
     * @var ?string $locality Locality
     */
    #[JsonProperty('locality')]
    public ?string $locality;

    /**
     * @var ?string $postalCode Postal code
     */
    #[JsonProperty('postalCode')]
    public ?string $postalCode;

    /**
     * @var ?string $stateCode State code
     */
    #[JsonProperty('stateCode')]
    public ?string $stateCode;

    /**
     * @var ?string $streetAddress Street address
     */
    #[JsonProperty('streetAddress')]
    public ?string $streetAddress;

    /**
     * @param array{
     *   countryCode?: ?string,
     *   locality?: ?string,
     *   postalCode?: ?string,
     *   stateCode?: ?string,
     *   streetAddress?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->countryCode = $values['countryCode'] ?? null;
        $this->locality = $values['locality'] ?? null;
        $this->postalCode = $values['postalCode'] ?? null;
        $this->stateCode = $values['stateCode'] ?? null;
        $this->streetAddress = $values['streetAddress'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
