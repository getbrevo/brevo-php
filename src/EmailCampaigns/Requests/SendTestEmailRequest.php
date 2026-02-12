<?php

namespace Brevo\EmailCampaigns\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Types\SendTestEmail;

class SendTestEmailRequest extends JsonSerializableType
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
