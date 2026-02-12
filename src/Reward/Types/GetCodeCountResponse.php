<?php

namespace Brevo\Reward\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetCodeCountResponse extends JsonSerializableType
{
    /**
     * @var ?int $count Number of codes
     */
    #[JsonProperty('count')]
    public ?int $count;

    /**
     * @param array{
     *   count?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->count = $values['count'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
