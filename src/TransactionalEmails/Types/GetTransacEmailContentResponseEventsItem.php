<?php

namespace Brevo\TransactionalEmails\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetTransacEmailContentResponseEventsItem extends JsonSerializableType
{
    /**
     * @var string $name Name of the event that occurred on the sent email
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var string $time Time at which the event occurred
     */
    #[JsonProperty('time')]
    public string $time;

    /**
     * @param array{
     *   name: string,
     *   time: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->time = $values['time'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
