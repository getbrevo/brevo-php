<?php

namespace Brevo\User\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class EditUserPermissionResponse extends JsonSerializableType
{
    /**
     * @var ?array<string> $creditNotes Credit note
     */
    #[JsonProperty('credit_notes'), ArrayType(['string'])]
    public ?array $creditNotes;

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
     *   creditNotes?: ?array<string>,
     *   invoiceId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->creditNotes = $values['creditNotes'] ?? null;
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
