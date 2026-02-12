<?php

namespace Brevo\Account\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetAccountResponsePlanItem extends JsonSerializableType
{
    /**
     * @var float $credits Remaining credits of the user
     */
    #[JsonProperty('credits')]
    public float $credits;

    /**
     * This is the type of the credit, "Send Limit" is one
     * of the possible types of credit of a user. "Send
     * Limit" implies the total number of emails you can
     * send to the subscribers in your account.
     *
     * @var 'sendLimit' $creditsType
     */
    #[JsonProperty('creditsType')]
    public string $creditsType;

    /**
     * Date of the period from which the plan will end
     * (Unix timestamp format)
     *
     * @var ?string $endDate
     */
    #[JsonProperty('endDate')]
    public ?string $endDate;

    /**
     * Date of the period from which the plan will start
     * (Unix timestamp format)
     *
     * @var ?string $startDate
     */
    #[JsonProperty('startDate')]
    public ?string $startDate;

    /**
     * @var value-of<GetAccountResponsePlanItemType> $type Displays the plan type of the user
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @param array{
     *   credits: float,
     *   creditsType: 'sendLimit',
     *   type: value-of<GetAccountResponsePlanItemType>,
     *   endDate?: ?string,
     *   startDate?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->credits = $values['credits'];
        $this->creditsType = $values['creditsType'];
        $this->endDate = $values['endDate'] ?? null;
        $this->startDate = $values['startDate'] ?? null;
        $this->type = $values['type'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
