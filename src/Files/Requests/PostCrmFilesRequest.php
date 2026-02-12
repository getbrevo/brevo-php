<?php

namespace Brevo\Files\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Utils\File;

class PostCrmFilesRequest extends JsonSerializableType
{
    /**
     * @var ?string $companyId
     */
    #[JsonProperty('companyId')]
    public ?string $companyId;

    /**
     * @var ?int $contactId
     */
    #[JsonProperty('contactId')]
    public ?int $contactId;

    /**
     * @var ?string $dealId
     */
    #[JsonProperty('dealId')]
    public ?string $dealId;

    /**
     * @var File $file
     */
    public File $file;

    /**
     * @param array{
     *   file: File,
     *   companyId?: ?string,
     *   contactId?: ?int,
     *   dealId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->companyId = $values['companyId'] ?? null;
        $this->contactId = $values['contactId'] ?? null;
        $this->dealId = $values['dealId'] ?? null;
        $this->file = $values['file'];
    }
}
