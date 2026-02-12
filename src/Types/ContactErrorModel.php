<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class ContactErrorModel extends JsonSerializableType
{
    /**
     * @var value-of<ContactErrorModelCode> $code Error code displayed in case of a failure
     */
    #[JsonProperty('code')]
    public string $code;

    /**
     * @var string $message Readable message associated to the failure
     */
    #[JsonProperty('message')]
    public string $message;

    /**
     * @var ?array<string, mixed> $metadata Additional information about the error
     */
    #[JsonProperty('metadata'), ArrayType(['string' => 'mixed'])]
    public ?array $metadata;

    /**
     * @param array{
     *   code: value-of<ContactErrorModelCode>,
     *   message: string,
     *   metadata?: ?array<string, mixed>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->code = $values['code'];
        $this->message = $values['message'];
        $this->metadata = $values['metadata'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
