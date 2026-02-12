<?php

namespace Brevo\Contacts\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Types\CreateUpdateFolder;

class UpdateFolderRequest extends JsonSerializableType
{
    /**
     * @var CreateUpdateFolder $body
     */
    public CreateUpdateFolder $body;

    /**
     * @param array{
     *   body: CreateUpdateFolder,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->body = $values['body'];
    }
}
