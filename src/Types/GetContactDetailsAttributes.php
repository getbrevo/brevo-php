<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;

/**
 * Set of attributes of the contact
 */
class GetContactDetailsAttributes extends JsonSerializableType
{
    /**
     * @param array{
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        unset($values);
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
