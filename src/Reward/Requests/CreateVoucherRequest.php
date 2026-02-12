<?php

namespace Brevo\Reward\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class CreateVoucherRequest extends JsonSerializableType
{
    /**
     * @var ?string $code Code generated to attribute reward to a contact
     */
    #[JsonProperty('code')]
    public ?string $code;

    /**
     * @var ?int $contactId Contact to attribute the reward
     */
    #[JsonProperty('contactId')]
    public ?int $contactId;

    /**
     * @var ?string $expirationDate Reward expiration date
     */
    #[JsonProperty('expirationDate')]
    public ?string $expirationDate;

    /**
     * @var ?string $loyaltySubscriptionId One of contactId or loyaltySubscriptionId is required
     */
    #[JsonProperty('loyaltySubscriptionId')]
    public ?string $loyaltySubscriptionId;

    /**
     * @var ?array<string, mixed> $meta Offer meta information (key/value object)
     */
    #[JsonProperty('meta'), ArrayType(['string' => 'mixed'])]
    public ?array $meta;

    /**
     * @var string $rewardId Reward id
     */
    #[JsonProperty('rewardId')]
    public string $rewardId;

    /**
     * @var ?float $value Value of the selected reward config
     */
    #[JsonProperty('value')]
    public ?float $value;

    /**
     * @param array{
     *   rewardId: string,
     *   code?: ?string,
     *   contactId?: ?int,
     *   expirationDate?: ?string,
     *   loyaltySubscriptionId?: ?string,
     *   meta?: ?array<string, mixed>,
     *   value?: ?float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->code = $values['code'] ?? null;
        $this->contactId = $values['contactId'] ?? null;
        $this->expirationDate = $values['expirationDate'] ?? null;
        $this->loyaltySubscriptionId = $values['loyaltySubscriptionId'] ?? null;
        $this->meta = $values['meta'] ?? null;
        $this->rewardId = $values['rewardId'];
        $this->value = $values['value'] ?? null;
    }
}
