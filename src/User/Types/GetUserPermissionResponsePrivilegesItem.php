<?php

namespace Brevo\User\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetUserPermissionResponsePrivilegesItem extends JsonSerializableType
{
    /**
     * @var string $feature
     */
    #[JsonProperty('feature')]
    public string $feature;

    /**
     * @var array<string> $permissions
     */
    #[JsonProperty('permissions'), ArrayType(['string'])]
    public array $permissions;

    /**
     * @param array{
     *   feature: string,
     *   permissions: array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->feature = $values['feature'];
        $this->permissions = $values['permissions'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
