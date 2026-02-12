<?php

namespace Brevo\Tier\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Tier\Types\GetTierGroupRequestVersion;

class GetTierGroupRequest extends JsonSerializableType
{
    /**
     * @var ?value-of<GetTierGroupRequestVersion> $version Select active to retrieve active version of tier group. Select draft to retrieve latest changes in tier group.
     */
    public ?string $version;

    /**
     * @param array{
     *   version?: ?value-of<GetTierGroupRequestVersion>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->version = $values['version'] ?? null;
    }
}
