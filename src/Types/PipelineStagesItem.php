<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * List of stages
 */
class PipelineStagesItem extends JsonSerializableType
{
    /**
     * @var ?string $id Stage id
     */
    #[JsonProperty('id')]
    public ?string $id;

    /**
     * @var ?string $name Stage name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @param array{
     *   id?: ?string,
     *   name?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->id = $values['id'] ?? null;
        $this->name = $values['name'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
