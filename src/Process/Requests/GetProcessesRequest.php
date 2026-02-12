<?php

namespace Brevo\Process\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Process\Types\GetProcessesRequestSort;

class GetProcessesRequest extends JsonSerializableType
{
    /**
     * @var ?int $limit Number limitation for the result returned
     */
    public ?int $limit = 10;

    /**
     * @var ?int $offset Beginning point in the list to retrieve from.
     */
    public ?int $offset = 0;

    /**
     * Sort the results in the ascending/descending order of record creation.
     * Default order is **descending** if `sort` is not passed
     *
     * @var ?value-of<GetProcessesRequestSort> $sort
     */
    public ?string $sort;

    /**
     * @param array{
     *   limit?: ?int,
     *   offset?: ?int,
     *   sort?: ?value-of<GetProcessesRequestSort>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->limit = $values['limit'] ?? null;
        $this->offset = $values['offset'] ?? null;
        $this->sort = $values['sort'] ?? null;
    }
}
