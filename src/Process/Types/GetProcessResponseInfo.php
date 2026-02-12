<?php

namespace Brevo\Process\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * Additional process information (for completed processes)
 */
class GetProcessResponseInfo extends JsonSerializableType
{
    /**
     * @var ?GetProcessResponseInfoImport $import Import process details
     */
    #[JsonProperty('import')]
    public ?GetProcessResponseInfoImport $import;

    /**
     * @var ?GetProcessResponseInfoExport $export Export process details
     */
    #[JsonProperty('export')]
    public ?GetProcessResponseInfoExport $export;

    /**
     * @param array{
     *   import?: ?GetProcessResponseInfoImport,
     *   export?: ?GetProcessResponseInfoExport,
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
