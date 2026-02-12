<?php

namespace Brevo\Account\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetAccountActivityResponseLogsItem extends JsonSerializableType
{
    /**
     * @var string $action Type of activity in the account.
     */
    #[JsonProperty('action')]
    public string $action;

    /**
     * @var string $date Time of the activity.
     */
    #[JsonProperty('date')]
    public string $date;

    /**
     * @var string $userAgent Browser details of the user who performed the activity.
     */
    #[JsonProperty('user_agent')]
    public string $userAgent;

    /**
     * Email address of the user who performed activity in the
     * account.
     *
     * @var string $userEmail
     */
    #[JsonProperty('user_email')]
    public string $userEmail;

    /**
     * IP address of the user who performed activity in the
     * account.
     *
     * @var string $userIp
     */
    #[JsonProperty('user_ip')]
    public string $userIp;

    /**
     * @param array{
     *   action: string,
     *   date: string,
     *   userAgent: string,
     *   userEmail: string,
     *   userIp: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->action = $values['action'];
        $this->date = $values['date'];
        $this->userAgent = $values['userAgent'];
        $this->userEmail = $values['userEmail'];
        $this->userIp = $values['userIp'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
