<?php

namespace Brevo\Contacts\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class RequestContactExportResponse extends JsonSerializableType
{
    /**
     * @var int $processId Id of the process created
     */
    #[JsonProperty('processId')]
    public int $processId;

    /**
     * @param array{
     *   processId: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->processId = $values['processId'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
