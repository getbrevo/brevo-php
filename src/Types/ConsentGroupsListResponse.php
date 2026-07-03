<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

/**
 * Paginated list of consent groups.
 */
class ConsentGroupsListResponse extends JsonSerializableType
{
    /**
     * @var array<ConsentGroup> $consentGroups List of consent groups matching the filter
     */
    #[JsonProperty('consentGroups'), ArrayType([ConsentGroup::class])]
    public array $consentGroups;

    /**
     * @var int $total Total number of consent groups matching the filter
     */
    #[JsonProperty('total')]
    public int $total;

    /**
     * @var int $limit Maximum number of results returned
     */
    #[JsonProperty('limit')]
    public int $limit;

    /**
     * @var int $offset Number of results skipped
     */
    #[JsonProperty('offset')]
    public int $offset;

    /**
     * @param array{
     *   consentGroups: array<ConsentGroup>,
     *   total: int,
     *   limit: int,
     *   offset: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->consentGroups = $values['consentGroups'];
        $this->total = $values['total'];
        $this->limit = $values['limit'];
        $this->offset = $values['offset'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
