<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * A contact's membership status in a single consent group.
 */
class ConsentGroupItem extends JsonSerializableType
{
    /**
     * @var int $id ID of the consent group
     */
    #[JsonProperty('id')]
    public int $id;

    /**
     * @var value-of<ConsentGroupItemStatus> $status The contact's subscription status within this consent group
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @param array{
     *   id: int,
     *   status: value-of<ConsentGroupItemStatus>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
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
