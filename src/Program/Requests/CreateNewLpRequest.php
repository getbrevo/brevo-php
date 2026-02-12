<?php

namespace Brevo\Program\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class CreateNewLpRequest extends JsonSerializableType
{
    /**
     * @var ?string $description Optional description of the loyalty program (max 256 chars).
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?string $documentId Optional unique document ID.
     */
    #[JsonProperty('documentId')]
    public ?string $documentId;

    /**
     * @var ?array<string, mixed> $meta Optional metadata related to the loyalty program.
     */
    #[JsonProperty('meta'), ArrayType(['string' => 'mixed'])]
    public ?array $meta;

    /**
     * @var string $name Required name of the loyalty program (max 128 chars).
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @param array{
     *   name: string,
     *   description?: ?string,
     *   documentId?: ?string,
     *   meta?: ?array<string, mixed>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->description = $values['description'] ?? null;
        $this->documentId = $values['documentId'] ?? null;
        $this->meta = $values['meta'] ?? null;
        $this->name = $values['name'];
    }
}
