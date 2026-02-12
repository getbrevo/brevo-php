<?php

namespace Brevo\Event\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;
use Brevo\Core\Types\Union;
use Brevo\Event\Types\CreateEventRequestIdentifiers;
use Brevo\Event\Types\CreateEventRequestObject;

class CreateEventRequest extends JsonSerializableType
{
    /**
     * @var ?array<string, (
     *    string
     *   |int
     * )> $contactProperties Properties defining the state of the contact associated to this event. Useful to update contact attributes defined in your contacts database while passing the event. For example: **"FIRSTNAME": "Jane" , "AGE": 37**
     */
    #[JsonProperty('contact_properties'), ArrayType(['string' => new Union('string', 'integer')])]
    public ?array $contactProperties;

    /**
     * @var ?string $eventDate Timestamp of when the event occurred (e.g. "2024-01-24T17:39:57+01:00"). If no value is passed, the timestamp of the event creation is used.
     */
    #[JsonProperty('event_date')]
    public ?string $eventDate;

    /**
     * @var string $eventName The name of the event that occurred. This is how you will find your event in Brevo. Limited to 255 characters, alphanumerical characters and - _ only.
     */
    #[JsonProperty('event_name')]
    public string $eventName;

    /**
     * @var ?array<string, (
     *    string
     *   |int
     *   |array<string, mixed>
     *   |array<mixed>
     * )> $eventProperties Properties of the event. Top level properties and nested properties can be used to better segment contacts and personalise workflow conditions. The following field type are supported: string, number, boolean (true/false), date (Timestamp e.g. "2024-01-24T17:39:57+01:00"). Keys are limited to 255 characters, alphanumerical characters and - _ only. Size is limited to 50Kb.
     */
    #[JsonProperty('event_properties'), ArrayType(['string' => new Union('string', 'integer', ['string' => 'mixed'], ['mixed'])])]
    public ?array $eventProperties;

    /**
     * @var CreateEventRequestIdentifiers $identifiers Identifies the contact associated with the event. At least one identifier is required.
     */
    #[JsonProperty('identifiers')]
    public CreateEventRequestIdentifiers $identifiers;

    /**
     * @var ?CreateEventRequestObject $object Identifiers of the object record associated with this event. Ignored if the object type or identifier for this record does not exist on the account.
     */
    #[JsonProperty('object')]
    public ?CreateEventRequestObject $object;

    /**
     * @param array{
     *   eventName: string,
     *   identifiers: CreateEventRequestIdentifiers,
     *   contactProperties?: ?array<string, (
     *    string
     *   |int
     * )>,
     *   eventDate?: ?string,
     *   eventProperties?: ?array<string, (
     *    string
     *   |int
     *   |array<string, mixed>
     *   |array<mixed>
     * )>,
     *   object?: ?CreateEventRequestObject,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->contactProperties = $values['contactProperties'] ?? null;
        $this->eventDate = $values['eventDate'] ?? null;
        $this->eventName = $values['eventName'];
        $this->eventProperties = $values['eventProperties'] ?? null;
        $this->identifiers = $values['identifiers'];
        $this->object = $values['object'] ?? null;
    }
}
