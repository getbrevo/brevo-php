<?php

namespace Brevo\Conversations\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class PutConversationsPushedMessagesIdRequest extends JsonSerializableType
{
    /**
     * @var string $text edited message text
     */
    #[JsonProperty('text')]
    public string $text;

    /**
     * @param array{
     *   text: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->text = $values['text'];
    }
}
