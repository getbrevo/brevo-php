<?php

namespace Brevo\Event\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * Identifiers for the object.
 */
class CreateEventRequestObjectIdentifiers extends JsonSerializableType
{
    /**
     * @var ?string $extId External object ID
     */
    #[JsonProperty('ext_id')]
    public ?string $extId;

    /**
     * @var ?string $id Internal object ID
     */
    #[JsonProperty('id')]
    public ?string $id;

    /**
     * @param array{
     *   extId?: ?string,
     *   id?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->extId = $values['extId'] ?? null;
        $this->id = $values['id'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
