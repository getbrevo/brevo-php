<?php

namespace Brevo\Tasks\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Types\Task;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

/**
 * List of tasks
 */
class GetCrmTasksResponse extends JsonSerializableType
{
    /**
     * @var ?array<Task> $items List of tasks
     */
    #[JsonProperty('items'), ArrayType([Task::class])]
    public ?array $items;

    /**
     * @param array{
     *   items?: ?array<Task>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->items = $values['items'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
