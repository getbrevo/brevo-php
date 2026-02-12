<?php

namespace Brevo\MasterAccount\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

/**
 * Permission on features
 */
class PutCorporateUserEmailPermissionsRequestPrivilegesItem extends JsonSerializableType
{
    /**
     * @var ?value-of<PutCorporateUserEmailPermissionsRequestPrivilegesItemFeature> $feature feature name
     */
    #[JsonProperty('feature')]
    public ?string $feature;

    /**
     * @var ?array<value-of<PutCorporateUserEmailPermissionsRequestPrivilegesItemPermissionsItem>> $permissions Permission for the feature
     */
    #[JsonProperty('permissions'), ArrayType(['string'])]
    public ?array $permissions;

    /**
     * @param array{
     *   feature?: ?value-of<PutCorporateUserEmailPermissionsRequestPrivilegesItemFeature>,
     *   permissions?: ?array<value-of<PutCorporateUserEmailPermissionsRequestPrivilegesItemPermissionsItem>>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->feature = $values['feature'] ?? null;
        $this->permissions = $values['permissions'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
