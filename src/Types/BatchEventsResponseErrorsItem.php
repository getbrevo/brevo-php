<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class BatchEventsResponseErrorsItem extends JsonSerializableType
{
    /**
     * @var ?array<int> $eventIndex Index positions (0-based) of the events that caused the error
     */
    #[JsonProperty('eventIndex'), ArrayType(['integer'])]
    public ?array $eventIndex;

    /**
     * @var ?string $message Description of the error
     */
    #[JsonProperty('message')]
    public ?string $message;

    /**
     * @param array{
     *   eventIndex?: ?array<int>,
     *   message?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->eventIndex = $values['eventIndex'] ?? null;
        $this->message = $values['message'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
