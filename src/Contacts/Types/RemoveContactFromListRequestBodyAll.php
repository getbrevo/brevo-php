<?php

namespace Brevo\Contacts\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class RemoveContactFromListRequestBodyAll extends JsonSerializableType
{
    /**
     * @var ?bool $all **Required if 'emails', 'extIds' and 'ids' are empty.** Remove all existing contacts from a list. A process will be created in this scenario. You can fetch the process details to know about the progress
     */
    #[JsonProperty('all')]
    public ?bool $all;

    /**
     * @param array{
     *   all?: ?bool,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->all = $values['all'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
