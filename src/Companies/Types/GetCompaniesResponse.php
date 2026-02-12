<?php

namespace Brevo\Companies\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Types\Company;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

/**
 * List of companies
 */
class GetCompaniesResponse extends JsonSerializableType
{
    /**
     * @var ?array<Company> $items List of companies
     */
    #[JsonProperty('items'), ArrayType([Company::class])]
    public ?array $items;

    /**
     * @param array{
     *   items?: ?array<Company>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->items = $values['items'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
