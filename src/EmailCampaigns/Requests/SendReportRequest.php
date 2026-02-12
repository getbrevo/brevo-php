<?php

namespace Brevo\EmailCampaigns\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Types\SendReport;

class SendReportRequest extends JsonSerializableType
{
    /**
     * @var SendReport $body
     */
    public SendReport $body;

    /**
     * @param array{
     *   body: SendReport,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->body = $values['body'];
    }
}
