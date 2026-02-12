<?php

namespace Brevo\Tasks\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;
use DateTime;
use Brevo\Core\Types\Date;
use Brevo\Types\TaskReminder;

class PostCrmTasksRequest extends JsonSerializableType
{
    /**
     * @var ?string $assignToId To assign a task to a user you can use either the account email or ID.
     */
    #[JsonProperty('assignToId')]
    public ?string $assignToId;

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
     * @var DateTime $date Task due date and time
     */
    #[JsonProperty('date'), Date(Date::TYPE_DATETIME)]
    public DateTime $date;

    /**
     * @var ?array<string> $dealsIds Deal ids for deals a task is linked to
     */
    #[JsonProperty('dealsIds'), ArrayType(['string'])]
    public ?array $dealsIds;

    /**
     * @var ?bool $done Task marked as done
     */
    #[JsonProperty('done')]
    public ?bool $done;

    /**
     * @var ?int $duration Duration of task in milliseconds [1 minute = 60000 ms]
     */
    #[JsonProperty('duration')]
    public ?int $duration;

    /**
     * @var string $name Name of task
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $notes Notes added to a task
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @var ?TaskReminder $reminder
     */
    #[JsonProperty('reminder')]
    public ?TaskReminder $reminder;

    /**
     * @var string $taskTypeId Id for type of task e.g Call / Email / Meeting etc.
     */
    #[JsonProperty('taskTypeId')]
    public string $taskTypeId;

    /**
     * @param array{
     *   date: DateTime,
     *   name: string,
     *   taskTypeId: string,
     *   assignToId?: ?string,
     *   companiesIds?: ?array<string>,
     *   contactsIds?: ?array<int>,
     *   dealsIds?: ?array<string>,
     *   done?: ?bool,
     *   duration?: ?int,
     *   notes?: ?string,
     *   reminder?: ?TaskReminder,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->assignToId = $values['assignToId'] ?? null;
        $this->companiesIds = $values['companiesIds'] ?? null;
        $this->contactsIds = $values['contactsIds'] ?? null;
        $this->date = $values['date'];
        $this->dealsIds = $values['dealsIds'] ?? null;
        $this->done = $values['done'] ?? null;
        $this->duration = $values['duration'] ?? null;
        $this->name = $values['name'];
        $this->notes = $values['notes'] ?? null;
        $this->reminder = $values['reminder'] ?? null;
        $this->taskTypeId = $values['taskTypeId'];
    }
}
