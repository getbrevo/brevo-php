<?php

namespace Brevo\Tasks\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * Task types details
 */
class GetCrmTasktypesResponse extends JsonSerializableType
{
    /**
     * @var ?string $id Id of task type
     */
    #[JsonProperty('id')]
    public ?string $id;

    /**
     * @var ?string $title Title of task type
     */
    #[JsonProperty('title')]
    public ?string $title;

    /**
     * @param array{
     *   id?: ?string,
     *   title?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->id = $values['id'] ?? null;
        $this->title = $values['title'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
