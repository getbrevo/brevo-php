<?php

namespace Brevo\TransactionalEmails\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetTransacEmailsListResponse extends JsonSerializableType
{
    /**
     * @var ?int $count Total number of transactional emails available on your account according to the passed filter
     */
    #[JsonProperty('count')]
    public ?int $count;

    /**
     * @var ?array<GetTransacEmailsListResponseTransactionalEmailsItem> $transactionalEmails
     */
    #[JsonProperty('transactionalEmails'), ArrayType([GetTransacEmailsListResponseTransactionalEmailsItem::class])]
    public ?array $transactionalEmails;

    /**
     * @param array{
     *   count?: ?int,
     *   transactionalEmails?: ?array<GetTransacEmailsListResponseTransactionalEmailsItem>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->count = $values['count'] ?? null;
        $this->transactionalEmails = $values['transactionalEmails'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
