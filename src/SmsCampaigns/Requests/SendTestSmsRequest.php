<?php

namespace Brevo\SmsCampaigns\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class SendTestSmsRequest extends JsonSerializableType
{
    /**
     * @var ?string $phoneNumber Mobile number of the recipient with the country code. This number **must belong to one of your contacts in Brevo account and must not be blacklisted**
     */
    #[JsonProperty('phoneNumber')]
    public ?string $phoneNumber;

    /**
     * @param array{
     *   phoneNumber?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->phoneNumber = $values['phoneNumber'] ?? null;
    }
}
