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
     * @var ?bool $contactPixelTrackingConsent Consent of the DOI recipient for open (pixel) and click tracking in the double opt-in confirmation email, resolved by the sender at send time. Considered only if the per-contact pixel tracking consent feature is enabled for your account. Pass `true` if this recipient has consented to open and click tracking, in which case the open pixel and tracked links identify the recipient. Pass `false` to anonymise the open and click events (counted in aggregate statistics only). If it is not passed, the recipient is treated as unknown consent status and the email is still sent (the open and click are anonymised unless your account tracks unknown-consent contacts). A value other than `true`/`false` is rejected. Ignored when the feature is not enabled for your account.
     */
    #[JsonProperty('contactPixelTrackingConsent')]
    public ?bool $contactPixelTrackingConsent;

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
     *   contactPixelTrackingConsent?: ?bool,
     *   excludeListIds?: ?array<int>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->attributes = $values['attributes'] ?? null;
        $this->contactPixelTrackingConsent = $values['contactPixelTrackingConsent'] ?? null;
        $this->email = $values['email'];
        $this->excludeListIds = $values['excludeListIds'] ?? null;
        $this->includeListIds = $values['includeListIds'];
        $this->redirectionUrl = $values['redirectionUrl'];
        $this->templateId = $values['templateId'];
    }
}
