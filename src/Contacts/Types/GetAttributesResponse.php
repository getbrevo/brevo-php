<?php

namespace Brevo\Contacts\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetAttributesResponse extends JsonSerializableType
{
    /**
     * @var array<GetAttributesResponseAttributesItem> $attributes Listing of available contact attributes in your account
     */
    #[JsonProperty('attributes'), ArrayType([GetAttributesResponseAttributesItem::class])]
    public array $attributes;

    /**
     * @param array{
     *   attributes: array<GetAttributesResponseAttributesItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->attributes = $values['attributes'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
