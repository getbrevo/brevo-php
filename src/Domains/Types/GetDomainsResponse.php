<?php

namespace Brevo\Domains\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetDomainsResponse extends JsonSerializableType
{
    /**
     * @var array<GetDomainsResponseDomainsItem> $domains List of the domains available in your account
     */
    #[JsonProperty('domains'), ArrayType([GetDomainsResponseDomainsItem::class])]
    public array $domains;

    /**
     * @var int $count Total number of domains
     */
    #[JsonProperty('count')]
    public int $count;

    /**
     * @var int $currentPage Current page number
     */
    #[JsonProperty('current_page')]
    public int $currentPage;

    /**
     * @var int $totalPages Total number of pages
     */
    #[JsonProperty('total_pages')]
    public int $totalPages;

    /**
     * @param array{
     *   domains: array<GetDomainsResponseDomainsItem>,
     *   count: int,
     *   currentPage: int,
     *   totalPages: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->domains = $values['domains'];
        $this->count = $values['count'];
        $this->currentPage = $values['currentPage'];
        $this->totalPages = $values['totalPages'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
