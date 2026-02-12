<?php

namespace Brevo\TransactionalSms\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class SendAsyncTransactionalSmsResponse extends JsonSerializableType
{
    /**
     * @var int $messageId
     */
    #[JsonProperty('messageId')]
    public int $messageId;

    /**
     * @param array{
     *   messageId: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->messageId = $values['messageId'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
