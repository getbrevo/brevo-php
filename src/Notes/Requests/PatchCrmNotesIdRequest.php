<?php

namespace Brevo\Notes\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Types\NoteData;

class PatchCrmNotesIdRequest extends JsonSerializableType
{
    /**
     * @var NoteData $body
     */
    public NoteData $body;

    /**
     * @param array{
     *   body: NoteData,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->body = $values['body'];
    }
}
