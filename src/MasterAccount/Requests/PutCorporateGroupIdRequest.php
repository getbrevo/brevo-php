<?php

namespace Brevo\MasterAccount\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class PutCorporateGroupIdRequest extends JsonSerializableType
{
    /**
     * @var ?string $groupName The name of the group of sub-accounts
     */
    #[JsonProperty('groupName')]
    public ?string $groupName;

    /**
     * @var ?array<int> $subAccountIds Pass the list of sub-account Ids to be included in the group
     */
    #[JsonProperty('subAccountIds'), ArrayType(['integer'])]
    public ?array $subAccountIds;

    /**
     * @param array{
     *   groupName?: ?string,
     *   subAccountIds?: ?array<int>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->groupName = $values['groupName'] ?? null;
        $this->subAccountIds = $values['subAccountIds'] ?? null;
    }
}
