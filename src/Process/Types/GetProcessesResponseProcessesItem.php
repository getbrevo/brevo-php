<?php

namespace Brevo\Process\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use DateTime;
use Brevo\Core\Types\Date;

class GetProcessesResponseProcessesItem extends JsonSerializableType
{
    /**
     * @var int $id Unique identifier of the process
     */
    #[JsonProperty('id')]
    public int $id;

    /**
     * @var value-of<GetProcessesResponseProcessesItemName> $name Name/type of the process
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var value-of<GetProcessesResponseProcessesItemStatus> $status Current status of the process
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?GetProcessesResponseProcessesItemInfo $info Additional process information (for completed processes)
     */
    #[JsonProperty('info')]
    public ?GetProcessesResponseProcessesItemInfo $info;

    /**
     * @var ?string $exportUrl Download URL for completed export processes
     */
    #[JsonProperty('export_url')]
    public ?string $exportUrl;

    /**
     * @var ?string $error Error message for failed processes
     */
    #[JsonProperty('error')]
    public ?string $error;

    /**
     * @var ?DateTime $createdAt Process creation timestamp
     */
    #[JsonProperty('created_at'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $createdAt;

    /**
     * @var ?DateTime $completedAt Process completion timestamp
     */
    #[JsonProperty('completed_at'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $completedAt;

    /**
     * @param array{
     *   id: int,
     *   name: value-of<GetProcessesResponseProcessesItemName>,
     *   status: value-of<GetProcessesResponseProcessesItemStatus>,
     *   info?: ?GetProcessesResponseProcessesItemInfo,
     *   exportUrl?: ?string,
     *   error?: ?string,
     *   createdAt?: ?DateTime,
     *   completedAt?: ?DateTime,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->name = $values['name'];
        $this->status = $values['status'];
        $this->info = $values['info'] ?? null;
        $this->exportUrl = $values['exportUrl'] ?? null;
        $this->error = $values['error'] ?? null;
        $this->createdAt = $values['createdAt'] ?? null;
        $this->completedAt = $values['completedAt'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
