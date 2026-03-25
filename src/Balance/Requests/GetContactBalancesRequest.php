<?php

namespace Brevo\Balance\Requests;

use Brevo\Core\Json\JsonSerializableType;

class GetContactBalancesRequest extends JsonSerializableType
{
    /**
     * @var ?bool $includeInternal Include balances tied to internal definitions.
     */
    public ?bool $includeInternal;

    /**
     * @param array{
     *   includeInternal?: ?bool,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->includeInternal = $values['includeInternal'] ?? null;
    }
}
