<?php

namespace Brevo\SmsCampaigns\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Types\UpdateCampaignStatus;

class UpdateSmsCampaignStatusRequest extends JsonSerializableType
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
