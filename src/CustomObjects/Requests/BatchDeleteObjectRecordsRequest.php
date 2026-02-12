<?php

namespace Brevo\CustomObjects\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\CustomObjects\Types\BatchDeleteObjectRecordsRequestIdentifiersIds;
use Brevo\CustomObjects\Types\BatchDeleteObjectRecordsRequestIdentifiersExtIds;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\Union;

class BatchDeleteObjectRecordsRequest extends JsonSerializableType
{
    /**
     * @var (
     *    BatchDeleteObjectRecordsRequestIdentifiersIds
     *   |BatchDeleteObjectRecordsRequestIdentifiersExtIds
     * )|null $identifiers One of the below must be provided
     */
    #[JsonProperty('identifiers'), Union(BatchDeleteObjectRecordsRequestIdentifiersIds::class, BatchDeleteObjectRecordsRequestIdentifiersExtIds::class, 'null')]
    public BatchDeleteObjectRecordsRequestIdentifiersIds|BatchDeleteObjectRecordsRequestIdentifiersExtIds|null $identifiers;

    /**
     * @param array{
     *   identifiers?: (
     *    BatchDeleteObjectRecordsRequestIdentifiersIds
     *   |BatchDeleteObjectRecordsRequestIdentifiersExtIds
     * )|null,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->identifiers = $values['identifiers'] ?? null;
    }
}
