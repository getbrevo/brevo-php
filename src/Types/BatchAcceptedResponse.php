<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * Response returned when all events in the batch are accepted for async processing
 */
class BatchAcceptedResponse extends JsonSerializableType
{
    /**
     * @var string $message Confirmation message indicating the batch was accepted
     */
    #[JsonProperty('message')]
    public string $message;

    /**
     * @var int $count Number of events queued for processing
     */
    #[JsonProperty('count')]
    public int $count;

    /**
     * @param array{
     *   message: string,
     *   count: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->message = $values['message'];
        $this->count = $values['count'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
