<?php

namespace Brevo\TransactionalEmails\Types;

use Brevo\Core\Json\JsonSerializableType;
use DateTime;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\Date;

class GetScheduledEmailByIdResponseCreatedAt extends JsonSerializableType
{
    /**
     * @var DateTime $createdAt Datetime on which the email was scheduled
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $createdAt;

    /**
     * @var DateTime $scheduledAt Datetime for which the email was scheduled
     */
    #[JsonProperty('scheduledAt'), Date(Date::TYPE_DATETIME)]
    public DateTime $scheduledAt;

    /**
     * @var value-of<GetScheduledEmailByIdResponseCreatedAtStatus> $status Current status of the scheduled email
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @param array{
     *   createdAt: DateTime,
     *   scheduledAt: DateTime,
     *   status: value-of<GetScheduledEmailByIdResponseCreatedAtStatus>,
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
