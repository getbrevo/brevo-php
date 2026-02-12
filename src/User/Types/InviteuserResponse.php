<?php

namespace Brevo\User\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class InviteuserResponse extends JsonSerializableType
{
    /**
     * @var ?string $invoiceId Invoice id
     */
    #[JsonProperty('invoice_id')]
    public ?string $invoiceId;

    /**
     * @var string $status Status of the API operation.
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @param array{
     *   status: string,
     *   invoiceId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->invoiceId = $values['invoiceId'] ?? null;
        $this->status = $values['status'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
