<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;
use DateTime;
use Brevo\Core\Types\Date;

/**
 * Task Details
 */
class Task extends JsonSerializableType
{
    /**
     * @var ?string $id Unique task id
     */
    #[JsonProperty('id')]
    public ?string $id;

    /**
     * @var string $taskTypeId Id for type of task e.g Call / Email / Meeting etc.
     */
    #[JsonProperty('taskTypeId')]
    public string $taskTypeId;

    /**
     * @var string $name Name of task
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?array<string> $companiesIds Companies ids for companies a task is linked to
     */
    #[JsonProperty('companiesIds'), ArrayType(['string'])]
    public ?array $companiesIds;

    /**
     * @var ?array<string> $dealsIds Deal ids for deals a task is linked to
     */
    #[JsonProperty('dealsIds'), ArrayType(['string'])]
    public ?array $dealsIds;

    /**
     * @var ?array<int> $contactsIds Contact ids for contacts linked to this task
     */
    #[JsonProperty('contactsIds'), ArrayType(['integer'])]
    public ?array $contactsIds;

    /**
     * @var ?string $assignToId Account id of the user assigned to this task
     */
    #[JsonProperty('assignToId')]
    public ?string $assignToId;

    /**
     * @var DateTime $date Task due date and time
     */
    #[JsonProperty('date'), Date(Date::TYPE_DATETIME)]
    public DateTime $date;

    /**
     * @var ?string $notes Notes added to a task
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @var ?bool $done Whether the task is marked as done
     */
    #[JsonProperty('done')]
    public ?bool $done;

    /**
     * @var ?DateTime $createdAt Task creation date/time
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $createdAt;

    /**
     * @var ?DateTime $updatedAt Task last update date/time
     */
    #[JsonProperty('updatedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $updatedAt;

    /**
     * @param array{
     *   taskTypeId: string,
     *   name: string,
     *   date: DateTime,
     *   id?: ?string,
     *   companiesIds?: ?array<string>,
     *   dealsIds?: ?array<string>,
     *   contactsIds?: ?array<int>,
     *   assignToId?: ?string,
     *   notes?: ?string,
     *   done?: ?bool,
     *   createdAt?: ?DateTime,
     *   updatedAt?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'] ?? null;
        $this->taskTypeId = $values['taskTypeId'];
        $this->name = $values['name'];
        $this->companiesIds = $values['companiesIds'] ?? null;
        $this->dealsIds = $values['dealsIds'] ?? null;
        $this->contactsIds = $values['contactsIds'] ?? null;
        $this->assignToId = $values['assignToId'] ?? null;
        $this->date = $values['date'];
        $this->notes = $values['notes'] ?? null;
        $this->done = $values['done'] ?? null;
        $this->createdAt = $values['createdAt'] ?? null;
        $this->updatedAt = $values['updatedAt'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
