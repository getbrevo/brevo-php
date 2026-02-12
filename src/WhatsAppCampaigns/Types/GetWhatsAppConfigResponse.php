<?php

namespace Brevo\WhatsAppCampaigns\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetWhatsAppConfigResponse extends JsonSerializableType
{
    /**
     * @var ?string $businessStatus Verification status information of the Business account
     */
    #[JsonProperty('businessStatus')]
    public ?string $businessStatus;

    /**
     * @var ?value-of<GetWhatsAppConfigResponsePhoneNumberNameStatus> $phoneNumberNameStatus Status of the name associated with WhatsApp Phone number
     */
    #[JsonProperty('phoneNumberNameStatus')]
    public ?string $phoneNumberNameStatus;

    /**
     * @var ?value-of<GetWhatsAppConfigResponsePhoneNumberQuality> $phoneNumberQuality Quality status of phone number associated with WhatsApp account. There are three quality ratings. example - **High (GREEN) , Medium (YELLOW) and Low(RED)**
     */
    #[JsonProperty('phoneNumberQuality')]
    public ?string $phoneNumberQuality;

    /**
     * @var ?string $sendingLimit Sending limit of the WhatsApp account
     */
    #[JsonProperty('sendingLimit')]
    public ?string $sendingLimit;

    /**
     * @var ?string $whatsappBusinessAccountId Id of the WhatsApp business account
     */
    #[JsonProperty('whatsappBusinessAccountId')]
    public ?string $whatsappBusinessAccountId;

    /**
     * @var ?value-of<GetWhatsAppConfigResponseWhatsappBusinessAccountStatus> $whatsappBusinessAccountStatus Status information related to WhatsApp Api account
     */
    #[JsonProperty('whatsappBusinessAccountStatus')]
    public ?string $whatsappBusinessAccountStatus;

    /**
     * @param array{
     *   businessStatus?: ?string,
     *   phoneNumberNameStatus?: ?value-of<GetWhatsAppConfigResponsePhoneNumberNameStatus>,
     *   phoneNumberQuality?: ?value-of<GetWhatsAppConfigResponsePhoneNumberQuality>,
     *   sendingLimit?: ?string,
     *   whatsappBusinessAccountId?: ?string,
     *   whatsappBusinessAccountStatus?: ?value-of<GetWhatsAppConfigResponseWhatsappBusinessAccountStatus>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->businessStatus = $values['businessStatus'] ?? null;
        $this->phoneNumberNameStatus = $values['phoneNumberNameStatus'] ?? null;
        $this->phoneNumberQuality = $values['phoneNumberQuality'] ?? null;
        $this->sendingLimit = $values['sendingLimit'] ?? null;
        $this->whatsappBusinessAccountId = $values['whatsappBusinessAccountId'] ?? null;
        $this->whatsappBusinessAccountStatus = $values['whatsappBusinessAccountStatus'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
