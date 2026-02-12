<?php

namespace Brevo\MasterAccount\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetCorporateSubAccountResponse extends JsonSerializableType
{
    /**
     * @var ?int $count Total number of subaccounts
     */
    #[JsonProperty('count')]
    public ?int $count;

    /**
     * @var ?array<GetCorporateSubAccountResponseSubAccountsItem> $subAccounts
     */
    #[JsonProperty('subAccounts'), ArrayType([GetCorporateSubAccountResponseSubAccountsItem::class])]
    public ?array $subAccounts;

    /**
     * @param array{
     *   count?: ?int,
     *   subAccounts?: ?array<GetCorporateSubAccountResponseSubAccountsItem>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->count = $values['count'] ?? null;
        $this->subAccounts = $values['subAccounts'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
