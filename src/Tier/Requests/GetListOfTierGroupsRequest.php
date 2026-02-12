<?php

namespace Brevo\Tier\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Tier\Types\GetListOfTierGroupsRequestVersion;

class GetListOfTierGroupsRequest extends JsonSerializableType
{
    /**
     * @var ?value-of<GetListOfTierGroupsRequestVersion> $version Select 'active' to retrieve list of all tier groups which are live for clients. Select draft to retrieve list of all non deleted tier groups.
     */
    public ?string $version;

    /**
     * @param array{
     *   version?: ?value-of<GetListOfTierGroupsRequestVersion>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->version = $values['version'] ?? null;
    }
}
