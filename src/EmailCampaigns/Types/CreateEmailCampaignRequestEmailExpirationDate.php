<?php

namespace Brevo\EmailCampaigns\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * To reduce your carbon footprint, set an expiration date for your email. If supported, it will be automatically deleted from the recipient’s inbox, saving storage space and energy. Learn more about setting an email expiration date. For reference , ``https://help.brevo.com/hc/en-us/articles/4413566705298-Create-an-email-campaign``
 */
class CreateEmailCampaignRequestEmailExpirationDate extends JsonSerializableType
{
    /**
     * @var ?int $duration Duration of the email expiry. maximum duration can be 3600 days or 480 weeks or 120 months.
     */
    #[JsonProperty('duration')]
    public ?int $duration;

    /**
     * @var ?value-of<CreateEmailCampaignRequestEmailExpirationDateUnit> $unit unit of the duration
     */
    #[JsonProperty('unit')]
    public ?string $unit;

    /**
     * @param array{
     *   duration?: ?int,
     *   unit?: ?value-of<CreateEmailCampaignRequestEmailExpirationDateUnit>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->duration = $values['duration'] ?? null;
        $this->unit = $values['unit'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
