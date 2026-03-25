<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use DateTime;
use Brevo\Core\Types\Date;
use Brevo\Core\Types\ArrayType;

class GetEventsListEventsItem extends JsonSerializableType
{
    /**
     * @var ?int $contactId Contact ID associated with the event
     */
    #[JsonProperty('contact_id')]
    public ?int $contactId;

    /**
     * @var ?DateTime $eventDate Date and time of the event
     */
    #[JsonProperty('event_date'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $eventDate;

    /**
     * @var ?string $eventName Name of the event
     */
    #[JsonProperty('event_name')]
    public ?string $eventName;

    /**
     * @var ?string $eventFilterId Filter ID of the event
     */
    #[JsonProperty('event_filter_id')]
    public ?string $eventFilterId;

    /**
     * @var ?string $source Source of the event
     */
    #[JsonProperty('source')]
    public ?string $source;

    /**
     * @var ?string $objectType Object type associated with the event
     */
    #[JsonProperty('object_type')]
    public ?string $objectType;

    /**
     * @var ?array<string, mixed> $eventProperties Event-level custom properties
     */
    #[JsonProperty('event_properties'), ArrayType(['string' => 'mixed'])]
    public ?array $eventProperties;

    /**
     * @var ?array<string, mixed> $contactProperties Contact-level properties at time of event
     */
    #[JsonProperty('contact_properties'), ArrayType(['string' => 'mixed'])]
    public ?array $contactProperties;

    /**
     * @param array{
     *   contactId?: ?int,
     *   eventDate?: ?DateTime,
     *   eventName?: ?string,
     *   eventFilterId?: ?string,
     *   source?: ?string,
     *   objectType?: ?string,
     *   eventProperties?: ?array<string, mixed>,
     *   contactProperties?: ?array<string, mixed>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->contactId = $values['contactId'] ?? null;
        $this->eventDate = $values['eventDate'] ?? null;
        $this->eventName = $values['eventName'] ?? null;
        $this->eventFilterId = $values['eventFilterId'] ?? null;
        $this->source = $values['source'] ?? null;
        $this->objectType = $values['objectType'] ?? null;
        $this->eventProperties = $values['eventProperties'] ?? null;
        $this->contactProperties = $values['contactProperties'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
