<?php

namespace Brevo\Reward\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class ValidateRewardResponse extends JsonSerializableType
{
    /**
     * @var ?bool $authorize Boolean value to authorize a reward or not
     */
    #[JsonProperty('authorize')]
    public ?bool $authorize;

    /**
     * @param array{
     *   authorize?: ?bool,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->authorize = $values['authorize'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
