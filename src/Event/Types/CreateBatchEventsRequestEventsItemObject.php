<?php

namespace Brevo\Event\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * Identifiers of the object record associated with this event. Ignored if the object type or identifier for this record does not exist on the account.
 */
class CreateBatchEventsRequestEventsItemObject extends JsonSerializableType
{
    /**
     * @var ?CreateBatchEventsRequestEventsItemObjectIdentifiers $identifiers Identifiers for the object.
     */
    #[JsonProperty('identifiers')]
    public ?CreateBatchEventsRequestEventsItemObjectIdentifiers $identifiers;

    /**
     * @var ?string $type Type of object (e.g., subscription, vehicle, etc.)
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @param array{
     *   identifiers?: ?CreateBatchEventsRequestEventsItemObjectIdentifiers,
     *   type?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->identifiers = $values['identifiers'] ?? null;
        $this->type = $values['type'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
