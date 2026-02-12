<?php

namespace Brevo\Account\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetAccountActivityResponse extends JsonSerializableType
{
    /**
     * @var ?array<GetAccountActivityResponseLogsItem> $logs Get user activity logs
     */
    #[JsonProperty('logs'), ArrayType([GetAccountActivityResponseLogsItem::class])]
    public ?array $logs;

    /**
     * @param array{
     *   logs?: ?array<GetAccountActivityResponseLogsItem>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->logs = $values['logs'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
