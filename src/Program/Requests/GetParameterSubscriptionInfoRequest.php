<?php

namespace Brevo\Program\Requests;

use Brevo\Core\Json\JsonSerializableType;

class GetParameterSubscriptionInfoRequest extends JsonSerializableType
{
    /**
     * @var ?string $contactId The contact ID to filter by.
     */
    public ?string $contactId;

    /**
     * @var ?string $params A list of filter parameters for querying the subscription info.
     */
    public ?string $params;

    /**
     * @var ?string $loyaltySubscriptionId The loyalty subscription ID to filter by.
     */
    public ?string $loyaltySubscriptionId;

    /**
     * @param array{
     *   contactId?: ?string,
     *   params?: ?string,
     *   loyaltySubscriptionId?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->contactId = $values['contactId'] ?? null;
        $this->params = $values['params'] ?? null;
        $this->loyaltySubscriptionId = $values['loyaltySubscriptionId'] ?? null;
    }
}
