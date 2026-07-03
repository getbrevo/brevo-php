<?php

namespace Brevo\ConsentGroups\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\ConsentGroups\Types\UpdateConsentGroupRequestSignupMode;

class UpdateConsentGroupRequest extends JsonSerializableType
{
    /**
     * @var ?string $name New name for the consent group (max 255 characters)
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $description New description (max 500 characters)
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?value-of<UpdateConsentGroupRequestSignupMode> $signupMode New signup mode
     */
    #[JsonProperty('signupMode')]
    public ?string $signupMode;

    /**
     * @param array{
     *   name?: ?string,
     *   description?: ?string,
     *   signupMode?: ?value-of<UpdateConsentGroupRequestSignupMode>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->name = $values['name'] ?? null;
        $this->description = $values['description'] ?? null;
        $this->signupMode = $values['signupMode'] ?? null;
    }
}
