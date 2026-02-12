<?php

namespace Brevo\Companies\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class PostCompaniesImportResponse extends JsonSerializableType
{
    /**
     * @var ?int $processId The ID of the import process
     */
    #[JsonProperty('processId')]
    public ?int $processId;

    /**
     * @param array{
     *   processId?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->processId = $values['processId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
