<?php

namespace Brevo\TransactionalEmails\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Types\SendTestEmail;

class SendTestTemplateRequest extends JsonSerializableType
{
    /**
     * @var SendTestEmail $body
     */
    public SendTestEmail $body;

    /**
     * @param array{
     *   body: SendTestEmail,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->body = $values['body'];
    }
}
