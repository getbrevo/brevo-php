<?php

namespace Brevo\Ecommerce\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class CreateBatchOrderResponse extends JsonSerializableType
{
    /**
     * @var ?int $count Number of orders
     */
    #[JsonProperty('count')]
    public ?int $count;

    /**
     * @var float $batchId Batch ID of the request
     */
    #[JsonProperty('batch_id')]
    public float $batchId;

    /**
     * @param array{
     *   batchId: float,
     *   count?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->count = $values['count'] ?? null;
        $this->batchId = $values['batchId'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
