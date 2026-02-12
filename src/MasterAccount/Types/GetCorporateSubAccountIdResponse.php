<?php

namespace Brevo\MasterAccount\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetCorporateSubAccountIdResponse extends JsonSerializableType
{
    /**
     * @var ?string $companyName Sub-account company name
     */
    #[JsonProperty('companyName')]
    public ?string $companyName;

    /**
     * @var ?string $email Email id of the sub-account organization
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var ?array<GetCorporateSubAccountIdResponseGroupsItem> $groups List of groups associated with the sub-account
     */
    #[JsonProperty('groups'), ArrayType([GetCorporateSubAccountIdResponseGroupsItem::class])]
    public ?array $groups;

    /**
     * @var ?string $name Name of the sub-account user
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?GetCorporateSubAccountIdResponsePlanInfo $planInfo Sub-account plan details
     */
    #[JsonProperty('planInfo')]
    public ?GetCorporateSubAccountIdResponsePlanInfo $planInfo;

    /**
     * @param array{
     *   companyName?: ?string,
     *   email?: ?string,
     *   groups?: ?array<GetCorporateSubAccountIdResponseGroupsItem>,
     *   name?: ?string,
     *   planInfo?: ?GetCorporateSubAccountIdResponsePlanInfo,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->companyName = $values['companyName'] ?? null;
        $this->email = $values['email'] ?? null;
        $this->groups = $values['groups'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->planInfo = $values['planInfo'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
