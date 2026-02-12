<?php

namespace Brevo\InboundParsing\Types;

use Brevo\Core\Json\JsonSerializableType;
use DateTime;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\Date;

class GetInboundEmailEventsByUuidResponseLogsItem extends JsonSerializableType
{
    /**
     * @var ?DateTime $date Date of the event
     */
    #[JsonProperty('date'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $date;

    /**
     * @var ?value-of<GetInboundEmailEventsByUuidResponseLogsItemType> $type Type of the event
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @param array{
     *   date?: ?DateTime,
     *   type?: ?value-of<GetInboundEmailEventsByUuidResponseLogsItemType>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->date = $values['date'] ?? null;
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
