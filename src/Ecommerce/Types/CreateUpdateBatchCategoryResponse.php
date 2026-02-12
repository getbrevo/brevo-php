<?php

namespace Brevo\Ecommerce\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class CreateUpdateBatchCategoryResponse extends JsonSerializableType
{
    /**
     * @var ?int $createdCount Number of the new created categories
     */
    #[JsonProperty('createdCount')]
    public ?int $createdCount;

    /**
     * @var ?int $updatedCount Number of the existing categories updated
     */
    #[JsonProperty('updatedCount')]
    public ?int $updatedCount;

    /**
     * @param array{
     *   createdCount?: ?int,
     *   updatedCount?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->createdCount = $values['createdCount'] ?? null;
        $this->updatedCount = $values['updatedCount'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
