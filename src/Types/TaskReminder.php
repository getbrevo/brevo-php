<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

/**
 * Task reminder date/time for a task
 */
class TaskReminder extends JsonSerializableType
{
    /**
     * @var array<value-of<TaskReminderTypesItem>> $types Type of task reminder e.g email, push
     */
    #[JsonProperty('types'), ArrayType(['string'])]
    public array $types;

    /**
     * @var value-of<TaskReminderUnit> $unit Unit of time before reminder is to be sent
     */
    #[JsonProperty('unit')]
    public string $unit;

    /**
     * @var int $value Value of time unit before reminder is to be sent
     */
    #[JsonProperty('value')]
    public int $value;

    /**
     * @param array{
     *   types: array<value-of<TaskReminderTypesItem>>,
     *   unit: value-of<TaskReminderUnit>,
     *   value: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->types = $values['types'];
        $this->unit = $values['unit'];
        $this->value = $values['value'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
