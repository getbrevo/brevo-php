<?php

namespace Brevo\MasterAccount\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * Billing details of the master account organization
 */
class GetCorporateMasterAccountResponseBillingInfo extends JsonSerializableType
{
    /**
     * @var ?GetCorporateMasterAccountResponseBillingInfoAddress $address Billing address of master account
     */
    #[JsonProperty('address')]
    public ?GetCorporateMasterAccountResponseBillingInfoAddress $address;

    /**
     * @var ?string $companyName Company name of master account
     */
    #[JsonProperty('companyName')]
    public ?string $companyName;

    /**
     * @var ?string $email Billing email id of master account
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var ?GetCorporateMasterAccountResponseBillingInfoName $name Billing name of master account holder
     */
    #[JsonProperty('name')]
    public ?GetCorporateMasterAccountResponseBillingInfoName $name;

    /**
     * @param array{
     *   address?: ?GetCorporateMasterAccountResponseBillingInfoAddress,
     *   companyName?: ?string,
     *   email?: ?string,
     *   name?: ?GetCorporateMasterAccountResponseBillingInfoName,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->address = $values['address'] ?? null;
        $this->companyName = $values['companyName'] ?? null;
        $this->email = $values['email'] ?? null;
        $this->name = $values['name'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
