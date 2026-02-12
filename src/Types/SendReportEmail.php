<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

/**
 * Custom attributes for the report email.
 */
class SendReportEmail extends JsonSerializableType
{
    /**
     * @var string $body Custom text message to be presented in the report email.
     */
    #[JsonProperty('body')]
    public string $body;

    /**
     * @var array<string> $to Email addresses of the recipients
     */
    #[JsonProperty('to'), ArrayType(['string'])]
    public array $to;

    /**
     * @param array{
     *   body: string,
     *   to: array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->body = $values['body'];
        $this->to = $values['to'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
