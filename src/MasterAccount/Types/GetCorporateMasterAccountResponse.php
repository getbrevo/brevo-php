<?php

namespace Brevo\MasterAccount\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetCorporateMasterAccountResponse extends JsonSerializableType
{
    /**
     * @var ?GetCorporateMasterAccountResponseBillingInfo $billingInfo Billing details of the master account organization
     */
    #[JsonProperty('billingInfo')]
    public ?GetCorporateMasterAccountResponseBillingInfo $billingInfo;

    /**
     * @var ?string $companyName Company name of master account organization
     */
    #[JsonProperty('companyName')]
    public ?string $companyName;

    /**
     * @var ?string $currencyCode Currency code of the master account organization
     */
    #[JsonProperty('currencyCode')]
    public ?string $currencyCode;

    /**
     * @var ?string $email Email id of master account
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var ?int $id Unique identifier of the master account organization
     */
    #[JsonProperty('id')]
    public ?int $id;

    /**
     * @var ?GetCorporateMasterAccountResponsePlanInfo $planInfo Plan details
     */
    #[JsonProperty('planInfo')]
    public ?GetCorporateMasterAccountResponsePlanInfo $planInfo;

    /**
     * @var ?string $timezone Timezone of the master account organization
     */
    #[JsonProperty('timezone')]
    public ?string $timezone;

    /**
     * @param array{
     *   billingInfo?: ?GetCorporateMasterAccountResponseBillingInfo,
     *   companyName?: ?string,
     *   currencyCode?: ?string,
     *   email?: ?string,
     *   id?: ?int,
     *   planInfo?: ?GetCorporateMasterAccountResponsePlanInfo,
     *   timezone?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->billingInfo = $values['billingInfo'] ?? null;
        $this->companyName = $values['companyName'] ?? null;
        $this->currencyCode = $values['currencyCode'] ?? null;
        $this->email = $values['email'] ?? null;
        $this->id = $values['id'] ?? null;
        $this->planInfo = $values['planInfo'] ?? null;
        $this->timezone = $values['timezone'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
