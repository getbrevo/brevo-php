<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\Union;

/**
 * Tag of the message
 */
class SendTransacSmsTag extends JsonSerializableType
{
    /**
     * @var (
     *    string
     *   |array<string>
     * )|null $field A tag can be a string or an array of strings.
     */
    #[JsonProperty('field'), Union('string', ['string'], 'null')]
    public string|array|null $field;

    /**
     * @param array{
     *   field?: (
     *    string
     *   |array<string>
     * )|null,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->field = $values['field'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
