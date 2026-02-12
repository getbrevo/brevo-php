<?php

namespace Brevo\CustomObjects\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class UpsertrecordsRequestRecordsItemAssociationsItemOneRecordsItemOne extends JsonSerializableType
{
    /**
     * @var ?array<string, mixed> $identifiers
     */
    #[JsonProperty('identifiers'), ArrayType(['string' => 'mixed'])]
    public ?array $identifiers;

    /**
     * @param array{
     *   identifiers?: ?array<string, mixed>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->identifiers = $values['identifiers'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
