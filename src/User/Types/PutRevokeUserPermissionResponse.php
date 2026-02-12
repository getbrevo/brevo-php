<?php

namespace Brevo\User\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class PutRevokeUserPermissionResponse extends JsonSerializableType
{
    /**
     * @var ?array<string> $creditNotes Credit note
     */
    #[JsonProperty('credit_notes'), ArrayType(['string'])]
    public ?array $creditNotes;

    /**
     * @var string $status Status of the API operation.
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @param array{
     *   status: string,
     *   creditNotes?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->creditNotes = $values['creditNotes'] ?? null;
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
