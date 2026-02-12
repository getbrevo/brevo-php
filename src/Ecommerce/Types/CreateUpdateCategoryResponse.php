<?php

namespace Brevo\Ecommerce\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class CreateUpdateCategoryResponse extends JsonSerializableType
{
    /**
     * @var ?int $id ID of the category when a new category is created
     */
    #[JsonProperty('id')]
    public ?int $id;

    /**
     * @param array{
     *   id?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->id = $values['id'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
