<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

/**
 * Task Details
 */
class Task extends JsonSerializableType
{
    /**
     * @var ?array<string> $companiesIds Companies ids for companies a task is linked to
     */
    #[JsonProperty('companiesIds'), ArrayType(['string'])]
    public ?array $companiesIds;

    /**
     * @var ?array<int> $contactsIds Contact ids for contacts linked to this task
     */
    #[JsonProperty('contactsIds'), ArrayType(['integer'])]
    public ?array $contactsIds;

    /**
     * @var ?array<string> $dealsIds Deal ids for deals a task is linked to
     */
    #[JsonProperty('dealsIds'), ArrayType(['string'])]
    public ?array $dealsIds;

    /**
     * @var ?string $id Unique task id
     */
    #[JsonProperty('id')]
    public ?string $id;

    /**
     * @var string $name Name of task
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var string $taskTypeId Id for type of task e.g Call / Email / Meeting etc.
     */
    #[JsonProperty('taskTypeId')]
    public string $taskTypeId;

    /**
     * @param array{
     *   name: string,
     *   taskTypeId: string,
     *   companiesIds?: ?array<string>,
     *   contactsIds?: ?array<int>,
     *   dealsIds?: ?array<string>,
     *   id?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->companiesIds = $values['companiesIds'] ?? null;
        $this->contactsIds = $values['contactsIds'] ?? null;
        $this->dealsIds = $values['dealsIds'] ?? null;
        $this->id = $values['id'] ?? null;
        $this->name = $values['name'];
        $this->taskTypeId = $values['taskTypeId'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
