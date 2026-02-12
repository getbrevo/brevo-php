<?php

namespace Brevo\MasterAccount\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;
use Brevo\MasterAccount\Types\PostCorporateSubAccountRequestLanguage;

class PostCorporateSubAccountRequest extends JsonSerializableType
{
    /**
     * @var string $companyName Set the name of the sub-account company
     */
    #[JsonProperty('companyName')]
    public string $companyName;

    /**
     * @var string $email Email address for the organization
     */
    #[JsonProperty('email')]
    public string $email;

    /**
     * @var ?array<string> $groupIds Set the group(s) for the sub-account
     */
    #[JsonProperty('groupIds'), ArrayType(['string'])]
    public ?array $groupIds;

    /**
     * @var ?value-of<PostCorporateSubAccountRequestLanguage> $language Set the language of the sub-account
     */
    #[JsonProperty('language')]
    public ?string $language;

    /**
     * @var ?string $timezone Set the timezone of the sub-account
     */
    #[JsonProperty('timezone')]
    public ?string $timezone;

    /**
     * @param array{
     *   companyName: string,
     *   email: string,
     *   groupIds?: ?array<string>,
     *   language?: ?value-of<PostCorporateSubAccountRequestLanguage>,
     *   timezone?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->companyName = $values['companyName'];
        $this->email = $values['email'];
        $this->groupIds = $values['groupIds'] ?? null;
        $this->language = $values['language'] ?? null;
        $this->timezone = $values['timezone'] ?? null;
    }
}
