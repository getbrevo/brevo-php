<?php

namespace Brevo\Ecommerce\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class CreateBatchOrderResponse extends JsonSerializableType
{
    /**
     * @var float $batchId Batch ID of the request
     */
    #[JsonProperty('batchId')]
    public float $batchId;

    /**
     * @var ?int $count Number of orders
     */
    #[JsonProperty('count')]
    public ?int $count;

    /**
     * @param array{
     *   batchId: float,
     *   count?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->batchId = $values['batchId'];
        $this->count = $values['count'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
