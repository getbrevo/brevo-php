<?php

namespace Brevo\TransactionalEmails\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetScheduledEmailByIdResponseBatches extends JsonSerializableType
{
    /**
     * @var ?array<GetScheduledEmailByIdResponseBatchesBatchesItem> $batches
     */
    #[JsonProperty('batches'), ArrayType([GetScheduledEmailByIdResponseBatchesBatchesItem::class])]
    public ?array $batches;

    /**
     * @var ?int $count Total number of batches
     */
    #[JsonProperty('count')]
    public ?int $count;

    /**
     * @param array{
     *   batches?: ?array<GetScheduledEmailByIdResponseBatchesBatchesItem>,
     *   count?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->batches = $values['batches'] ?? null;
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
