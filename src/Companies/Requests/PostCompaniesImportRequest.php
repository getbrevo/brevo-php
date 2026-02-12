<?php

namespace Brevo\Companies\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Utils\File;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class PostCompaniesImportRequest extends JsonSerializableType
{
    /**
     * @var ?File $file
     */
    public ?File $file;

    /**
     * The mapping options in JSON format. Here is an example of the JSON structure: ```json {
     *   "link_entities": true, // Determines whether to link related entities during the import process
     *   "unlink_entities": false, // Determines whether to unlink related entities during the import process
     *   "update_existing_records": true, // Determines whether to update based on company ID or treat every row as create
     *   "unset_empty_attributes": false // Determines whether to unset a specific attribute during update if the values input is blank
     * } ```
     *
     * @var ?array<string, mixed> $mapping
     */
    #[JsonProperty('mapping'), ArrayType(['string' => 'mixed'])]
    public ?array $mapping;

    /**
     * @param array{
     *   file?: ?File,
     *   mapping?: ?array<string, mixed>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->file = $values['file'] ?? null;
        $this->mapping = $values['mapping'] ?? null;
    }
}
