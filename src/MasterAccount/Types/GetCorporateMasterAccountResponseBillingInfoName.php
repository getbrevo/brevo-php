<?php

namespace Brevo\MasterAccount\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * Billing name of master account holder
 */
class GetCorporateMasterAccountResponseBillingInfoName extends JsonSerializableType
{
    /**
     * @var ?string $familyName Last name for billing
     */
    #[JsonProperty('familyName')]
    public ?string $familyName;

    /**
     * @var ?string $givenName First name for billing
     */
    #[JsonProperty('givenName')]
    public ?string $givenName;

    /**
     * @param array{
     *   familyName?: ?string,
     *   givenName?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->familyName = $values['familyName'] ?? null;
        $this->givenName = $values['givenName'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
