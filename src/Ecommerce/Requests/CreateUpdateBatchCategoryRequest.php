<?php

namespace Brevo\Ecommerce\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Ecommerce\Types\CreateUpdateBatchCategoryRequestCategoriesItem;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class CreateUpdateBatchCategoryRequest extends JsonSerializableType
{
    /**
     * @var array<CreateUpdateBatchCategoryRequestCategoriesItem> $categories array of categories objects
     */
    #[JsonProperty('categories'), ArrayType([CreateUpdateBatchCategoryRequestCategoriesItem::class])]
    public array $categories;

    /**
     * @var ?bool $updateEnabled Facilitate to update the existing categories in the same request (updateEnabled = true)
     */
    #[JsonProperty('updateEnabled')]
    public ?bool $updateEnabled;

    /**
     * @param array{
     *   categories: array<CreateUpdateBatchCategoryRequestCategoriesItem>,
     *   updateEnabled?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->categories = $values['categories'];
        $this->updateEnabled = $values['updateEnabled'] ?? null;
    }
}
