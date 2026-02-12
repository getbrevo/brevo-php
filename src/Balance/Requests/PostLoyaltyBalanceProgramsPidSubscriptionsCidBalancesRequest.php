<?php

namespace Brevo\Balance\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class PostLoyaltyBalanceProgramsPidSubscriptionsCidBalancesRequest extends JsonSerializableType
{
    /**
     * @var string $balanceDefinitionId Unique identifier (UUID) of the balance definition associated with the new balance.
     */
    #[JsonProperty('balanceDefinitionId')]
    public string $balanceDefinitionId;

    /**
     * @param array{
     *   balanceDefinitionId: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->balanceDefinitionId = $values['balanceDefinitionId'];
    }
}
