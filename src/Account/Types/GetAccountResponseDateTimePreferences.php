<?php

namespace Brevo\Account\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

/**
 * User's date and time preferences
 */
class GetAccountResponseDateTimePreferences extends JsonSerializableType
{
    /**
     * @var string $timezone User's timezone setting
     */
    #[JsonProperty('timezone')]
    public string $timezone;

    /**
     * @var string $timeFormat Preferred time format (12 or 24 hour)
     */
    #[JsonProperty('timeFormat')]
    public string $timeFormat;

    /**
     * @var string $dateFormat Preferred date format
     */
    #[JsonProperty('dateFormat')]
    public string $dateFormat;

    /**
     * @param array{
     *   timezone: string,
     *   timeFormat: string,
     *   dateFormat: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->timezone = $values['timezone'];
        $this->timeFormat = $values['timeFormat'];
        $this->dateFormat = $values['dateFormat'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
