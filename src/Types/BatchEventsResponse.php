<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

/**
 * Response returned when a batch of events is processed
 */
class BatchEventsResponse extends JsonSerializableType
{
    /**
     * @var string $status Status of the batch request
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var int $totalEvents Total number of events submitted in the batch
     */
    #[JsonProperty('total_events')]
    public int $totalEvents;

    /**
     * @var int $successfulEvents Number of events that were successfully processed
     */
    #[JsonProperty('successful_events')]
    public int $successfulEvents;

    /**
     * @var int $failedEvents Number of events that failed to be processed
     */
    #[JsonProperty('failed_events')]
    public int $failedEvents;

    /**
     * @var array<BatchEventsResponseErrorsItem> $errors List of errors for the failed events
     */
    #[JsonProperty('errors'), ArrayType([BatchEventsResponseErrorsItem::class])]
    public array $errors;

    /**
     * @param array{
     *   status: string,
     *   totalEvents: int,
     *   successfulEvents: int,
     *   failedEvents: int,
     *   errors: array<BatchEventsResponseErrorsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->status = $values['status'];
        $this->totalEvents = $values['totalEvents'];
        $this->successfulEvents = $values['successfulEvents'];
        $this->failedEvents = $values['failedEvents'];
        $this->errors = $values['errors'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
