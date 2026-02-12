<?php

namespace Brevo\TransactionalSms\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetTransacSmsReportResponse extends JsonSerializableType
{
    /**
     * @var ?array<GetTransacSmsReportResponseReportsItem> $reports
     */
    #[JsonProperty('reports'), ArrayType([GetTransacSmsReportResponseReportsItem::class])]
    public ?array $reports;

    /**
     * @param array{
     *   reports?: ?array<GetTransacSmsReportResponseReportsItem>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->reports = $values['reports'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
