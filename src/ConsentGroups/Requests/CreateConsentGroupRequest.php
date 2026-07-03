<?php

namespace Brevo\ConsentGroups\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\ConsentGroups\Types\CreateConsentGroupRequestSignupMode;
use Brevo\Core\Types\ArrayType;

class CreateConsentGroupRequest extends JsonSerializableType
{
    /**
     * @var string $name Unique name for the consent group (max 255 characters)
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $description Optional description (max 500 characters)
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var value-of<CreateConsentGroupRequestSignupMode> $signupMode Controls how contacts are added to the group. `manual` — contacts are added explicitly via the API. `automatic` — contacts are added automatically at signup.
     */
    #[JsonProperty('signupMode')]
    public string $signupMode;

    /**
     * @var ?array<int> $listIds Optional list of contact list IDs. Contacts from these lists will be copied once into this consent group at creation time.
     */
    #[JsonProperty('listIds'), ArrayType(['integer'])]
    public ?array $listIds;

    /**
     * @param array{
     *   name: string,
     *   signupMode: value-of<CreateConsentGroupRequestSignupMode>,
     *   description?: ?string,
     *   listIds?: ?array<int>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->description = $values['description'] ?? null;
        $this->signupMode = $values['signupMode'];
        $this->listIds = $values['listIds'] ?? null;
    }
}
