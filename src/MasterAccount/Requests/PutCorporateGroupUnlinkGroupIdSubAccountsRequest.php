<?php

namespace Brevo\MasterAccount\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class PutCorporateGroupUnlinkGroupIdSubAccountsRequest extends JsonSerializableType
{
    /**
     * @var array<int> $subAccountIds List of sub-account ids
     */
    #[JsonProperty('subAccountIds'), ArrayType(['integer'])]
    public array $subAccountIds;

    /**
     * @param array{
     *   subAccountIds: array<int>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->subAccountIds = $values['subAccountIds'];
    }
}
