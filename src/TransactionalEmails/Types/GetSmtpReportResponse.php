<?php

namespace Brevo\TransactionalEmails\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetSmtpReportResponse extends JsonSerializableType
{
    /**
     * @var ?array<GetSmtpReportResponseReportsItem> $reports
     */
    #[JsonProperty('reports'), ArrayType([GetSmtpReportResponseReportsItem::class])]
    public ?array $reports;

    /**
     * @param array{
     *   reports?: ?array<GetSmtpReportResponseReportsItem>,
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
