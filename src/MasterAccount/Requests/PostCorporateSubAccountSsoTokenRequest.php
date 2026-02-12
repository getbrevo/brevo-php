<?php

namespace Brevo\MasterAccount\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\MasterAccount\Types\PostCorporateSubAccountSsoTokenRequestTarget;

class PostCorporateSubAccountSsoTokenRequest extends JsonSerializableType
{
    /**
     * @var ?string $email User email of sub-account organization
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var int $id Id of the sub-account organization
     */
    #[JsonProperty('id')]
    public int $id;

    /**
     * **Set target after login success** * **automation** - Redirect
     * to Automation after login * **email_campaign** - Redirect to
     * Email Campaign after login * **contacts** - Redirect to Contacts
     * after login * **landing_pages** - Redirect to Landing Pages
     * after login * **email_transactional** - Redirect to Email
     * Transactional after login * **senders** - Redirect to Senders
     * after login * **sms_campaign** - Redirect to Sms Campaign after
     * login * **sms_transactional** - Redirect to Sms Transactional
     * after login
     *
     * @var ?value-of<PostCorporateSubAccountSsoTokenRequestTarget> $target
     */
    #[JsonProperty('target')]
    public ?string $target;

    /**
     * Set the full target URL after login success. The user will land
     * directly on this target URL after login
     *
     * @var ?string $url
     */
    #[JsonProperty('url')]
    public ?string $url;

    /**
     * @param array{
     *   id: int,
     *   email?: ?string,
     *   target?: ?value-of<PostCorporateSubAccountSsoTokenRequestTarget>,
     *   url?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->email = $values['email'] ?? null;
        $this->id = $values['id'];
        $this->target = $values['target'] ?? null;
        $this->url = $values['url'] ?? null;
    }
}
