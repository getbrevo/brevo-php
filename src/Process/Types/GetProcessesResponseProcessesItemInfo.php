<?php

namespace Brevo\Process\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * Additional process information, only returned for completed IMPORTUSER processes. Contains URLs to CSV files with details about problematic records.
 */
class GetProcessesResponseProcessesItemInfo extends JsonSerializableType
{
    /**
     * @var ?GetProcessesResponseProcessesItemInfoImport $import Import process details with URLs to CSV reports
     */
    #[JsonProperty('import')]
    public ?GetProcessesResponseProcessesItemInfoImport $import;

    /**
     * @param array{
     *   import?: ?GetProcessesResponseProcessesItemInfoImport,
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
