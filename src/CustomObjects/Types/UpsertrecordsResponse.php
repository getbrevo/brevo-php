<?php

namespace Brevo\CustomObjects\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class UpsertrecordsResponse extends JsonSerializableType
{
    /**
     * @var ?string $message
     */
    #[JsonProperty('message')]
    public ?string $message;

    /**
     * @var ?int $processId Unique Id for the batch process used to track the status of the batch. **How to use this processId:**   Refer to the [Get process status API](https://developers.brevo.com/reference/get-process) to check the execution status of this batch using the returned `processId`.
     */
    #[JsonProperty('processId')]
    public ?int $processId;

    /**
     * @param array{
     *   message?: ?string,
     *   processId?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->message = $values['message'] ?? null;
        $this->processId = $values['processId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
