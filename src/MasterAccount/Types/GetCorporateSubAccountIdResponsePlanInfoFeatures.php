<?php

namespace Brevo\MasterAccount\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * Features available on the sub-account
 */
class GetCorporateSubAccountIdResponsePlanInfoFeatures extends JsonSerializableType
{
    /**
     * @var ?GetCorporateSubAccountIdResponsePlanInfoFeaturesInbox $inbox Inbox details / Not applicable on ENTv2
     */
    #[JsonProperty('inbox')]
    public ?GetCorporateSubAccountIdResponsePlanInfoFeaturesInbox $inbox;

    /**
     * @var ?GetCorporateSubAccountIdResponsePlanInfoFeaturesLandingPage $landingPage Landing page details / Not applicable on ENTv2
     */
    #[JsonProperty('landingPage')]
    public ?GetCorporateSubAccountIdResponsePlanInfoFeaturesLandingPage $landingPage;

    /**
     * Sales and service users to use phone, sales and
     * conversations
     *
     * @var ?GetCorporateSubAccountIdResponsePlanInfoFeaturesSalesUsers $salesUsers
     */
    #[JsonProperty('salesUsers')]
    public ?GetCorporateSubAccountIdResponsePlanInfoFeaturesSalesUsers $salesUsers;

    /**
     * @var ?GetCorporateSubAccountIdResponsePlanInfoFeaturesUsers $users Marketing users to manage the marketing channels
     */
    #[JsonProperty('users')]
    public ?GetCorporateSubAccountIdResponsePlanInfoFeaturesUsers $users;

    /**
     * @param array{
     *   inbox?: ?GetCorporateSubAccountIdResponsePlanInfoFeaturesInbox,
     *   landingPage?: ?GetCorporateSubAccountIdResponsePlanInfoFeaturesLandingPage,
     *   salesUsers?: ?GetCorporateSubAccountIdResponsePlanInfoFeaturesSalesUsers,
     *   users?: ?GetCorporateSubAccountIdResponsePlanInfoFeaturesUsers,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->inbox = $values['inbox'] ?? null;
        $this->landingPage = $values['landingPage'] ?? null;
        $this->salesUsers = $values['salesUsers'] ?? null;
        $this->users = $values['users'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
