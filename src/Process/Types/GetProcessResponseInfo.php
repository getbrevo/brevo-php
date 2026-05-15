<?php

namespace Brevo\Process\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * Additional process information, only returned for completed IMPORTUSER processes. Contains URLs to CSV files with details about problematic records.
 */
class GetProcessResponseInfo extends JsonSerializableType
{
    /**
     * @var ?GetProcessResponseInfoImport $import Import process details with URLs to CSV reports
     */
    #[JsonProperty('import')]
    public ?GetProcessResponseInfoImport $import;

    /**
     * @param array{
     *   import?: ?GetProcessResponseInfoImport,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->import = $values['import'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
