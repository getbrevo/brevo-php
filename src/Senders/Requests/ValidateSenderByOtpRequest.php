<?php

namespace Brevo\Senders\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class ValidateSenderByOtpRequest extends JsonSerializableType
{
    /**
     * @var int $otp 6 digit OTP received on email
     */
    #[JsonProperty('otp')]
    public int $otp;

    /**
     * @param array{
     *   otp: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->otp = $values['otp'];
    }
}
