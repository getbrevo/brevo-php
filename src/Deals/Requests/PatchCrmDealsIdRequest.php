<?php

namespace Brevo\Deals\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class PatchCrmDealsIdRequest extends JsonSerializableType
{
    /**
     * @var ?array<string, mixed> $attributes Attributes for deal update To assign owner of a Deal you can send attributes.deal_owner and utilize the account email or ID. If you wish to update the pipeline of a deal you need to provide the `pipeline` and the `deal_stage` Pipeline and deal_stage are ids you can fetch using this endpoint `/crm/pipeline/details/{pipelineID}`
     */
    #[JsonProperty('attributes'), ArrayType(['string' => 'mixed'])]
    public ?array $attributes;

    /**
     * @var ?array<string> $linkedCompaniesIds Warning - Using PATCH on linkedCompaniesIds replaces the list of linked contacts. Omitted IDs will be removed.
     */
    #[JsonProperty('linkedCompaniesIds'), ArrayType(['string'])]
    public ?array $linkedCompaniesIds;

    /**
     * @var ?array<int> $linkedContactsIds Warning - Using PATCH on linkedContactIds replaces the list of linked contacts. Omitted IDs will be removed.
     */
    #[JsonProperty('linkedContactsIds'), ArrayType(['integer'])]
    public ?array $linkedContactsIds;

    /**
     * @var ?string $name Name of deal
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @param array{
     *   attributes?: ?array<string, mixed>,
     *   linkedCompaniesIds?: ?array<string>,
     *   linkedContactsIds?: ?array<int>,
     *   name?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->attributes = $values['attributes'] ?? null;
        $this->linkedCompaniesIds = $values['linkedCompaniesIds'] ?? null;
        $this->linkedContactsIds = $values['linkedContactsIds'] ?? null;
        $this->name = $values['name'] ?? null;
    }
}
