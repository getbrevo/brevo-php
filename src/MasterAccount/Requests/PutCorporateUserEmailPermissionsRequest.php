<?php

namespace Brevo\MasterAccount\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\MasterAccount\Types\PutCorporateUserEmailPermissionsRequestPrivilegesItem;
use Brevo\Core\Types\ArrayType;

class PutCorporateUserEmailPermissionsRequest extends JsonSerializableType
{
    /**
     * @var bool $allFeaturesAccess All access to the features
     */
    #[JsonProperty('all_features_access')]
    public bool $allFeaturesAccess;

    /**
     * @var array<PutCorporateUserEmailPermissionsRequestPrivilegesItem> $privileges
     */
    #[JsonProperty('privileges'), ArrayType([PutCorporateUserEmailPermissionsRequestPrivilegesItem::class])]
    public array $privileges;

    /**
     * @param array{
     *   allFeaturesAccess: bool,
     *   privileges: array<PutCorporateUserEmailPermissionsRequestPrivilegesItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->allFeaturesAccess = $values['allFeaturesAccess'];
        $this->privileges = $values['privileges'];
    }
}
