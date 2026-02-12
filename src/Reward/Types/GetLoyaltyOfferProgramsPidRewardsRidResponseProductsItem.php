<?php

namespace Brevo\Reward\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetLoyaltyOfferProgramsPidRewardsRidResponseProductsItem extends JsonSerializableType
{
    /**
     * @var ?string $createdAt Timestamp when the product was created
     */
    #[JsonProperty('createdAt')]
    public ?string $createdAt;

    /**
     * @var ?string $imageRef URL of the product image
     */
    #[JsonProperty('imageRef')]
    public ?string $imageRef;

    /**
     * @var ?string $productId Unique identifier for the product
     */
    #[JsonProperty('productId')]
    public ?string $productId;

    /**
     * @var ?string $value string
     */
    #[JsonProperty('value')]
    public ?string $value;

    /**
     * @param array{
     *   createdAt?: ?string,
     *   imageRef?: ?string,
     *   productId?: ?string,
     *   value?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->createdAt = $values['createdAt'] ?? null;
        $this->imageRef = $values['imageRef'] ?? null;
        $this->productId = $values['productId'] ?? null;
        $this->value = $values['value'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
