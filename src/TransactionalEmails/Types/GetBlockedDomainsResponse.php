<?php

namespace Brevo\TransactionalEmails\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetBlockedDomainsResponse extends JsonSerializableType
{
    /**
     * @var array<string> $domains List of all blocked domains
     */
    #[JsonProperty('domains'), ArrayType(['string'])]
    public array $domains;

    /**
     * @param array{
     *   domains: array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->domains = $values['domains'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
