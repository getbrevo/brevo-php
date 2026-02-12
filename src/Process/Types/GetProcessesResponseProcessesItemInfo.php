<?php

namespace Brevo\Process\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * Additional process information (for completed processes)
 */
class GetProcessesResponseProcessesItemInfo extends JsonSerializableType
{
    /**
     * @var ?GetProcessesResponseProcessesItemInfoImport $import Import process details
     */
    #[JsonProperty('import')]
    public ?GetProcessesResponseProcessesItemInfoImport $import;

    /**
     * @var ?GetProcessesResponseProcessesItemInfoExport $export Export process details
     */
    #[JsonProperty('export')]
    public ?GetProcessesResponseProcessesItemInfoExport $export;

    /**
     * @param array{
     *   import?: ?GetProcessesResponseProcessesItemInfoImport,
     *   export?: ?GetProcessesResponseProcessesItemInfoExport,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->import = $values['import'] ?? null;
        $this->export = $values['export'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
