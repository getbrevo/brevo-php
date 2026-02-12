<?php

namespace Brevo\Process\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * Export process details
 */
class GetProcessResponseInfoExport extends JsonSerializableType
{
    /**
     * @var ?int $totalRecords Total number of exported records
     */
    #[JsonProperty('total_records')]
    public ?int $totalRecords;

    /**
     * @var ?int $fileSize Size of exported file in bytes
     */
    #[JsonProperty('file_size')]
    public ?int $fileSize;

    /**
     * @param array{
     *   totalRecords?: ?int,
     *   fileSize?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->totalRecords = $values['totalRecords'] ?? null;
        $this->fileSize = $values['fileSize'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
