<?php

namespace Brevo\Contacts\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;
use Brevo\Core\Types\Union;

class CreateDoiContactRequest extends JsonSerializableType
{
    /**
     * @var ?array<string, (
     *    float
     *   |string
     *   |bool
     *   |array<string>
     * )> $attributes Pass the set of attributes and their values. **These attributes must be present in your Brevo account**. For eg. **{'FNAME':'Elly', 'LNAME':'Roger', 'COUNTRIES': ['India','China']}**
     */
    #[JsonProperty('attributes'), ArrayType(['string' => new Union('float', 'string', 'bool', ['string'])])]
    public ?array $attributes;

    /**
     * @var string $email Email address where the confirmation email will be sent. This email address will be the identifier for all other contact attributes.
     */
    #[JsonProperty('email')]
    public string $email;

    /**
     * @var ?array<int> $excludeListIds Lists under user account where contact should not be added
     */
    #[JsonProperty('excludeListIds'), ArrayType(['integer'])]
    public ?array $excludeListIds;

    /**
     * @var array<int> $includeListIds Lists under user account where contact should be added
     */
    #[JsonProperty('includeListIds'), ArrayType(['integer'])]
    public array $includeListIds;

    /**
     * @var string $redirectionUrl URL of the web page that user will be redirected to after clicking on the double opt in URL. When editing your DOI template you can reference this URL by using the tag **{{ params.DOIurl }}**.
     */
    #[JsonProperty('redirectionUrl')]
    public string $redirectionUrl;

    /**
     * @var int $templateId Id of the Double opt-in (DOI) template
     */
    #[JsonProperty('templateId')]
    public int $templateId;

    /**
     * @param array{
     *   email: string,
     *   includeListIds: array<int>,
     *   redirectionUrl: string,
     *   templateId: int,
     *   attributes?: ?array<string, (
     *    float
     *   |string
     *   |bool
     *   |array<string>
     * )>,
     *   excludeListIds?: ?array<int>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->attributes = $values['attributes'] ?? null;
        $this->email = $values['email'];
        $this->excludeListIds = $values['excludeListIds'] ?? null;
        $this->includeListIds = $values['includeListIds'];
        $this->redirectionUrl = $values['redirectionUrl'];
        $this->templateId = $values['templateId'];
    }
}
