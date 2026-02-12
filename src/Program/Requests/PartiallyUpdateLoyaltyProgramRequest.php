<?php

namespace Brevo\Program\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class PartiallyUpdateLoyaltyProgramRequest extends JsonSerializableType
{
    /**
     * @var ?string $description Loyalty Program description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?array<string, mixed> $meta Loyalty Program meta data
     */
    #[JsonProperty('meta'), ArrayType(['string' => 'mixed'])]
    public ?array $meta;

    /**
     * @var ?string $name Loyalty Program name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @param array{
     *   description?: ?string,
     *   meta?: ?array<string, mixed>,
     *   name?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->description = $values['description'] ?? null;
        $this->meta = $values['meta'] ?? null;
        $this->name = $values['name'] ?? null;
    }
}
