<?php

namespace Brevo\Deals\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class PostCrmDealsRequest extends JsonSerializableType
{
    /**
     * @var ?array<string, mixed> $attributes Attributes for deal creation To assign owner of a Deal you can send attributes.deal_owner and utilize the account email or ID. If you want to create a deal on a specific pipeline and stage you can use the following attributes `pipeline` and `deal_stage`. Pipeline and deal_stage are ids you can fetch using this endpoint `/crm/pipeline/details/{pipelineID}`
     */
    #[JsonProperty('attributes'), ArrayType(['string' => 'mixed'])]
    public ?array $attributes;

    /**
     * @var ?array<string> $linkedCompaniesIds Company ids to be linked with deal
     */
    #[JsonProperty('linkedCompaniesIds'), ArrayType(['string'])]
    public ?array $linkedCompaniesIds;

    /**
     * @var ?array<int> $linkedContactsIds Contact ids to be linked with deal
     */
    #[JsonProperty('linkedContactsIds'), ArrayType(['integer'])]
    public ?array $linkedContactsIds;

    /**
     * @var string $name Name of deal
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @param array{
     *   name: string,
     *   attributes?: ?array<string, mixed>,
     *   linkedCompaniesIds?: ?array<string>,
     *   linkedContactsIds?: ?array<int>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->attributes = $values['attributes'] ?? null;
        $this->linkedCompaniesIds = $values['linkedCompaniesIds'] ?? null;
        $this->linkedContactsIds = $values['linkedContactsIds'] ?? null;
        $this->name = $values['name'];
    }
}
