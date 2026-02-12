<?php

namespace Brevo\Reward\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;
use Brevo\Reward\Types\RedeemVoucherRequestOrder;

class RedeemVoucherRequest extends JsonSerializableType
{
    /**
     * @var ?string $attributedRewardId Unique identifier for the attributed reward
     */
    #[JsonProperty('attributedRewardId')]
    public ?string $attributedRewardId;

    /**
     * @var ?string $code Redemption code for the reward
     */
    #[JsonProperty('code')]
    public ?string $code;

    /**
     * @var ?int $contactId Unique identifier for the contact
     */
    #[JsonProperty('contactId')]
    public ?int $contactId;

    /**
     * @var ?string $loyaltySubscriptionId Identifier for the loyalty subscription
     */
    #[JsonProperty('loyaltySubscriptionId')]
    public ?string $loyaltySubscriptionId;

    /**
     * @var ?array<string, mixed> $meta Additional metadata associated with the redeem request
     */
    #[JsonProperty('meta'), ArrayType(['string' => 'mixed'])]
    public ?array $meta;

    /**
     * @var ?RedeemVoucherRequestOrder $order Order details for the redemption
     */
    #[JsonProperty('order')]
    public ?RedeemVoucherRequestOrder $order;

    /**
     * @var ?string $rewardId Unique identifier for the reward
     */
    #[JsonProperty('rewardId')]
    public ?string $rewardId;

    /**
     * @var ?int $ttl Time to live in seconds for the redemption request
     */
    #[JsonProperty('ttl')]
    public ?int $ttl;

    /**
     * @param array{
     *   attributedRewardId?: ?string,
     *   code?: ?string,
     *   contactId?: ?int,
     *   loyaltySubscriptionId?: ?string,
     *   meta?: ?array<string, mixed>,
     *   order?: ?RedeemVoucherRequestOrder,
     *   rewardId?: ?string,
     *   ttl?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->attributedRewardId = $values['attributedRewardId'] ?? null;
        $this->code = $values['code'] ?? null;
        $this->contactId = $values['contactId'] ?? null;
        $this->loyaltySubscriptionId = $values['loyaltySubscriptionId'] ?? null;
        $this->meta = $values['meta'] ?? null;
        $this->order = $values['order'] ?? null;
        $this->rewardId = $values['rewardId'] ?? null;
        $this->ttl = $values['ttl'] ?? null;
    }
}
