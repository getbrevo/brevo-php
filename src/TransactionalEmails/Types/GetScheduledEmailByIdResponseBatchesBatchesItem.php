<?php

namespace Brevo\TransactionalEmails\Types;

use Brevo\Core\Json\JsonSerializableType;
use DateTime;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\Date;

class GetScheduledEmailByIdResponseBatchesBatchesItem extends JsonSerializableType
{
    /**
     * @var DateTime $createdAt Datetime on which the batch was scheduled
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @var DateTime $scheduledAt Datetime for which the batch was scheduled
     */
    #[JsonProperty('scheduledAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $scheduledAt;

    /**
     * @var value-of<GetScheduledEmailByIdResponseBatchesBatchesItemStatus> $status Current status of the scheduled batch
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @param array{
     *   createdAt: DateTime,
     *   scheduledAt: DateTime,
     *   status: value-of<GetScheduledEmailByIdResponseBatchesBatchesItemStatus>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->createdAt = $values['createdAt'];
        $this->scheduledAt = $values['scheduledAt'];
        $this->status = $values['status'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
