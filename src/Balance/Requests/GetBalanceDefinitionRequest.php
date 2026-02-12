<?php

namespace Brevo\Balance\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Balance\Types\GetBalanceDefinitionRequestVersion;

class GetBalanceDefinitionRequest extends JsonSerializableType
{
    /**
     * @var ?value-of<GetBalanceDefinitionRequestVersion> $version Version
     */
    public ?string $version;

    /**
     * @param array{
     *   version?: ?value-of<GetBalanceDefinitionRequestVersion>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->version = $values['version'] ?? null;
    }
}
