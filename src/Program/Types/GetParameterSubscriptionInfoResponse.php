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
     * @var ?array<GetParameterSubscriptionInfoResponseMembersItem> $members List of members associated with the subscription.
     */
    #[JsonProperty('members'), ArrayType([GetParameterSubscriptionInfoResponseMembersItem::class])]
    public ?array $members;

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
     *   members?: ?array<GetParameterSubscriptionInfoResponseMembersItem>,
     *   reward?: ?array<GetParameterSubscriptionInfoResponseRewardItem>,
     *   tier?: ?array<GetParameterSubscriptionInfoResponseTierItem>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->balance = $values['balance'] ?? null;
        $this->members = $values['members'] ?? null;
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
