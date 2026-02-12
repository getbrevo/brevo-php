<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

/**
 * Privileges given to the user
 */
class InviteuserPrivilegesItem extends JsonSerializableType
{
    /**
     * @var ?value-of<InviteuserPrivilegesItemFeature> $feature Feature name
     */
    #[JsonProperty('feature')]
    public ?string $feature;

    /**
     * @var ?array<value-of<InviteuserPrivilegesItemPermissionsItem>> $permissions Permissions for a given feature
     */
    #[JsonProperty('permissions'), ArrayType(['string'])]
    public ?array $permissions;

    /**
     * @param array{
     *   feature?: ?value-of<InviteuserPrivilegesItemFeature>,
     *   permissions?: ?array<value-of<InviteuserPrivilegesItemPermissionsItem>>,
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
