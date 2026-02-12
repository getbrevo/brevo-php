<?php

namespace Brevo\Process\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetProcessesResponse extends JsonSerializableType
{
    /**
     * @var int $count Total number of processes available on your account
     */
    #[JsonProperty('count')]
    public int $count;

    /**
     * @var array<GetProcessesResponseProcessesItem> $processes List of background processes on your account
     */
    #[JsonProperty('processes'), ArrayType([GetProcessesResponseProcessesItem::class])]
    public array $processes;

    /**
     * @param array{
     *   count: int,
     *   processes: array<GetProcessesResponseProcessesItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->count = $values['count'];
        $this->processes = $values['processes'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
