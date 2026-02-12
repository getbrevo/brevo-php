<?php

namespace Brevo\Notes\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Notes\Types\GetCrmNotesRequestEntity;
use Brevo\Notes\Types\GetCrmNotesRequestSort;

class GetCrmNotesRequest extends JsonSerializableType
{
    /**
     * @var ?value-of<GetCrmNotesRequestEntity> $entity Filter by note entity type
     */
    public ?string $entity;

    /**
     * @var ?string $entityIds Filter by note entity IDs
     */
    public ?string $entityIds;

    /**
     * @var ?int $dateFrom dateFrom to date range filter type (timestamp in milliseconds)
     */
    public ?int $dateFrom;

    /**
     * @var ?int $dateTo dateTo to date range filter type (timestamp in milliseconds)
     */
    public ?int $dateTo;

    /**
     * @var ?int $offset Index of the first document of the page
     */
    public ?int $offset;

    /**
     * @var ?int $limit Number of documents per page
     */
    public ?int $limit = 50;

    /**
     * @var ?value-of<GetCrmNotesRequestSort> $sort Sort the results in the ascending/descending order. Default order is **descending** by creation if `sort` is not passed
     */
    public ?string $sort;

    /**
     * @param array{
     *   entity?: ?value-of<GetCrmNotesRequestEntity>,
     *   entityIds?: ?string,
     *   dateFrom?: ?int,
     *   dateTo?: ?int,
     *   offset?: ?int,
     *   limit?: ?int,
     *   sort?: ?value-of<GetCrmNotesRequestSort>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->entity = $values['entity'] ?? null;
        $this->entityIds = $values['entityIds'] ?? null;
        $this->dateFrom = $values['dateFrom'] ?? null;
        $this->dateTo = $values['dateTo'] ?? null;
        $this->offset = $values['offset'] ?? null;
        $this->limit = $values['limit'] ?? null;
        $this->sort = $values['sort'] ?? null;
    }
}
