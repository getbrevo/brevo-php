<?php

namespace Brevo\Balance\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Balance\Types\GetBalanceLimitRequestVersion;

class GetBalanceLimitRequest extends JsonSerializableType
{
    /**
     * @var ?value-of<GetBalanceLimitRequestVersion> $version Version
     */
    public ?string $version;

    /**
     * @param array{
     *   version?: ?value-of<GetBalanceLimitRequestVersion>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->version = $values['version'] ?? null;
    }
}
