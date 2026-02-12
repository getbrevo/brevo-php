<?php

namespace Brevo\EmailCampaigns\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Types\UpdateCampaignStatus;

class UpdateCampaignStatusRequest extends JsonSerializableType
{
    /**
     * @var UpdateCampaignStatus $body
     */
    public UpdateCampaignStatus $body;

    /**
     * @param array{
     *   body: UpdateCampaignStatus,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->body = $values['body'];
    }
}
