<?php

namespace Brevo\MasterAccount\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * Credits quota and remaining credits on the sub-account
 */
class GetCorporateSubAccountIdResponsePlanInfoCredits extends JsonSerializableType
{
    /**
     * @var ?GetCorporateSubAccountIdResponsePlanInfoCreditsEmails $emails Email credits remaining on the sub-account
     */
    #[JsonProperty('emails')]
    public ?GetCorporateSubAccountIdResponsePlanInfoCreditsEmails $emails;

    /**
     * @var ?GetCorporateSubAccountIdResponsePlanInfoCreditsExternalFeeds $externalFeeds externalFeeds credits remaining on the sub-account
     */
    #[JsonProperty('externalFeeds')]
    public ?GetCorporateSubAccountIdResponsePlanInfoCreditsExternalFeeds $externalFeeds;

    /**
     * @var ?GetCorporateSubAccountIdResponsePlanInfoCreditsSms $sms SMS credits remaining on the sub-account
     */
    #[JsonProperty('sms')]
    public ?GetCorporateSubAccountIdResponsePlanInfoCreditsSms $sms;

    /**
     * @var ?GetCorporateSubAccountIdResponsePlanInfoCreditsWhatsapp $whatsapp Whatsapp credits remaining on the sub-account
     */
    #[JsonProperty('whatsapp')]
    public ?GetCorporateSubAccountIdResponsePlanInfoCreditsWhatsapp $whatsapp;

    /**
     * @var ?GetCorporateSubAccountIdResponsePlanInfoCreditsWpSubscribers $wpSubscribers Push credits remaining on the sub-account
     */
    #[JsonProperty('wpSubscribers')]
    public ?GetCorporateSubAccountIdResponsePlanInfoCreditsWpSubscribers $wpSubscribers;

    /**
     * @param array{
     *   emails?: ?GetCorporateSubAccountIdResponsePlanInfoCreditsEmails,
     *   externalFeeds?: ?GetCorporateSubAccountIdResponsePlanInfoCreditsExternalFeeds,
     *   sms?: ?GetCorporateSubAccountIdResponsePlanInfoCreditsSms,
     *   whatsapp?: ?GetCorporateSubAccountIdResponsePlanInfoCreditsWhatsapp,
     *   wpSubscribers?: ?GetCorporateSubAccountIdResponsePlanInfoCreditsWpSubscribers,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->emails = $values['emails'] ?? null;
        $this->externalFeeds = $values['externalFeeds'] ?? null;
        $this->sms = $values['sms'] ?? null;
        $this->whatsapp = $values['whatsapp'] ?? null;
        $this->wpSubscribers = $values['wpSubscribers'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
