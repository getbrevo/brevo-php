<?php

namespace Brevo\Ecommerce\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Ecommerce\Types\CreateUpdateBatchProductsRequestProductsItem;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class CreateUpdateBatchProductsRequest extends JsonSerializableType
{
    /**
     * @var array<CreateUpdateBatchProductsRequestProductsItem> $products array of products objects
     */
    #[JsonProperty('products'), ArrayType([CreateUpdateBatchProductsRequestProductsItem::class])]
    public array $products;

    /**
     * @var ?bool $updateEnabled Facilitate to update the existing categories in the same request (updateEnabled = true)
     */
    #[JsonProperty('updateEnabled')]
    public ?bool $updateEnabled;

    /**
     * @param array{
     *   products: array<CreateUpdateBatchProductsRequestProductsItem>,
     *   updateEnabled?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->products = $values['products'];
        $this->updateEnabled = $values['updateEnabled'] ?? null;
    }
}
