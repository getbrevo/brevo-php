<?php

namespace Brevo\Account\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetAccountResponse extends JsonSerializableType
{
    /**
     * @var string $organizationId Unique identifier for the organization
     */
    #[JsonProperty('organization_id')]
    public string $organizationId;

    /**
     * @var int $userId Unique identifier for the user
     */
    #[JsonProperty('user_id')]
    public int $userId;

    /**
     * @var bool $enterprise Indicates if the account has enterprise features
     */
    #[JsonProperty('enterprise')]
    public bool $enterprise;

    /**
     * @var string $companyName Name of the company
     */
    #[JsonProperty('companyName')]
    public string $companyName;

    /**
     * @var string $email Login Email
     */
    #[JsonProperty('email')]
    public string $email;

    /**
     * @var string $firstName First Name
     */
    #[JsonProperty('firstName')]
    public string $firstName;

    /**
     * @var string $lastName Last Name
     */
    #[JsonProperty('lastName')]
    public string $lastName;

    /**
     * @var GetAccountResponseAddress $address Address informations
     */
    #[JsonProperty('address')]
    public GetAccountResponseAddress $address;

    /**
     * @var GetAccountResponseDateTimePreferences $dateTimePreferences User's date and time preferences
     */
    #[JsonProperty('dateTimePreferences')]
    public GetAccountResponseDateTimePreferences $dateTimePreferences;

    /**
     * @var ?GetAccountResponseMarketingAutomation $marketingAutomation
     */
    #[JsonProperty('marketingAutomation')]
    public ?GetAccountResponseMarketingAutomation $marketingAutomation;

    /**
     * @var array<GetAccountResponsePlanItem> $plan Information about your plans and credits
     */
    #[JsonProperty('plan'), ArrayType([GetAccountResponsePlanItem::class])]
    public array $plan;

    /**
     * @var ?array<GetAccountResponsePlanVerticalsItem> $planVerticals Detailed information about different plan categories
     */
    #[JsonProperty('planVerticals'), ArrayType([GetAccountResponsePlanVerticalsItem::class])]
    public ?array $planVerticals;

    /**
     * @var GetAccountResponseRelay $relay Information about your transactional email account
     */
    #[JsonProperty('relay')]
    public GetAccountResponseRelay $relay;

    /**
     * @param array{
     *   organizationId: string,
     *   userId: int,
     *   enterprise: bool,
     *   companyName: string,
     *   email: string,
     *   firstName: string,
     *   lastName: string,
     *   address: GetAccountResponseAddress,
     *   dateTimePreferences: GetAccountResponseDateTimePreferences,
     *   plan: array<GetAccountResponsePlanItem>,
     *   relay: GetAccountResponseRelay,
     *   marketingAutomation?: ?GetAccountResponseMarketingAutomation,
     *   planVerticals?: ?array<GetAccountResponsePlanVerticalsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->organizationId = $values['organizationId'];
        $this->userId = $values['userId'];
        $this->enterprise = $values['enterprise'];
        $this->companyName = $values['companyName'];
        $this->email = $values['email'];
        $this->firstName = $values['firstName'];
        $this->lastName = $values['lastName'];
        $this->address = $values['address'];
        $this->dateTimePreferences = $values['dateTimePreferences'];
        $this->marketingAutomation = $values['marketingAutomation'] ?? null;
        $this->plan = $values['plan'];
        $this->planVerticals = $values['planVerticals'] ?? null;
        $this->relay = $values['relay'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
