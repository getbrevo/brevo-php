<?php

namespace Brevo\Account\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetAccountResponsePlanVerticalsItem extends JsonSerializableType
{
    /**
     * @var value-of<GetAccountResponsePlanVerticalsItemPlanCategory> $planCategory Category of the plan
     */
    #[JsonProperty('planCategory')]
    public string $planCategory;

    /**
     * @var string $planType Type of plan within the category
     */
    #[JsonProperty('planType')]
    public string $planType;

    /**
     * @var string $name Name of the plan
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var value-of<GetAccountResponsePlanVerticalsItemStatus> $status Current status of the plan
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var string $startDate Plan start date (Unix timestamp)
     */
    #[JsonProperty('startDate')]
    public string $startDate;

    /**
     * @var string $endDate Plan end date (Unix timestamp)
     */
    #[JsonProperty('endDate')]
    public string $endDate;

    /**
     * @var GetAccountResponsePlanVerticalsItemUsers $users User seat information for the plan
     */
    #[JsonProperty('users')]
    public GetAccountResponsePlanVerticalsItemUsers $users;

    /**
     * @var ?string $credits Credits allocated for this plan category (optional, may not be present for all plan categories)
     */
    #[JsonProperty('credits')]
    public ?string $credits;

    /**
     * @param array{
     *   planCategory: value-of<GetAccountResponsePlanVerticalsItemPlanCategory>,
     *   planType: string,
     *   name: string,
     *   status: value-of<GetAccountResponsePlanVerticalsItemStatus>,
     *   startDate: string,
     *   endDate: string,
     *   users: GetAccountResponsePlanVerticalsItemUsers,
     *   credits?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->planCategory = $values['planCategory'];
        $this->planType = $values['planType'];
        $this->name = $values['name'];
        $this->status = $values['status'];
        $this->startDate = $values['startDate'];
        $this->endDate = $values['endDate'];
        $this->users = $values['users'];
        $this->credits = $values['credits'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
