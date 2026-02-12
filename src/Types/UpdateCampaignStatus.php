<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * Status of the campaign
 */
class UpdateCampaignStatus extends JsonSerializableType
{
    /**
     * @var ?value-of<UpdateCampaignStatusStatus> $status Note:- **replicateTemplate** status will be available **only for template type campaigns.**
     */
    #[JsonProperty('status')]
    public ?string $status;

    /**
     * @param array{
     *   status?: ?value-of<UpdateCampaignStatusStatus>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->status = $values['status'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
