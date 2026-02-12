<?php

namespace Brevo\Ecommerce\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Types\GetCategoryDetails;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetCategoriesResponse extends JsonSerializableType
{
    /**
     * @var array<GetCategoryDetails> $categories
     */
    #[JsonProperty('categories'), ArrayType([GetCategoryDetails::class])]
    public array $categories;

    /**
     * @var int $count Number of categories
     */
    #[JsonProperty('count')]
    public int $count;

    /**
     * @param array{
     *   categories: array<GetCategoryDetails>,
     *   count: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->categories = $values['categories'];
        $this->count = $values['count'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
