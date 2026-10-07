<?php

namespace Brevo\Program\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetParameterSubscriptionInfoResponse extends JsonSerializableType
{
    /**
     * @var ?GetParameterSubscriptionInfoResponseBalance $balance Balance details for the subscription.
     */
    #[JsonProperty('balance')]
    public ?GetParameterSubscriptionInfoResponseBalance $balance;

    /**
     * @var ?string $loyaltyProgramName Name of the loyalty program.
     */
    #[JsonProperty('loyaltyProgramName')]
    public ?string $loyaltyProgramName;

    /**
     * @var ?array<GetParameterSubscriptionInfoResponseMembersItem> $members List of members associated with the subscription.
     */
    #[JsonProperty('members'), ArrayType([GetParameterSubscriptionInfoResponseMembersItem::class])]
    public ?array $members;

    /**
     * @var ?GetParameterSubscriptionInfoResponseMembership $membership Membership details of the subscription. Returned when the subscription could be resolved from the provided `contactId` or `loyaltySubscriptionId`.
     */
    #[JsonProperty('membership')]
    public ?GetParameterSubscriptionInfoResponseMembership $membership;

    /**
     * @var ?array<GetParameterSubscriptionInfoResponseRewardItem> $reward List of rewards associated with the subscription.
     */
    #[JsonProperty('reward'), ArrayType([GetParameterSubscriptionInfoResponseRewardItem::class])]
    public ?array $reward;

    /**
     * @var ?array<GetParameterSubscriptionInfoResponseTierItem> $tier List of tier assignments for the subscription.
     */
    #[JsonProperty('tier'), ArrayType([GetParameterSubscriptionInfoResponseTierItem::class])]
    public ?array $tier;

    /**
     * @param array{
     *   balance?: ?GetParameterSubscriptionInfoResponseBalance,
     *   loyaltyProgramName?: ?string,
     *   members?: ?array<GetParameterSubscriptionInfoResponseMembersItem>,
     *   membership?: ?GetParameterSubscriptionInfoResponseMembership,
     *   reward?: ?array<GetParameterSubscriptionInfoResponseRewardItem>,
     *   tier?: ?array<GetParameterSubscriptionInfoResponseTierItem>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->balance = $values['balance'] ?? null;
        $this->loyaltyProgramName = $values['loyaltyProgramName'] ?? null;
        $this->members = $values['members'] ?? null;
        $this->membership = $values['membership'] ?? null;
        $this->reward = $values['reward'] ?? null;
        $this->tier = $values['tier'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
