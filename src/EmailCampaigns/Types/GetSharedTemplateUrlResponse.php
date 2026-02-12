<?php

namespace Brevo\EmailCampaigns\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;

class GetSharedTemplateUrlResponse extends JsonSerializableType
{
    /**
     * @var string $sharedUrl A unique URL for the email campaign or transactional template. This URL can be shared with other Brevo users.
     */
    #[JsonProperty('sharedUrl')]
    public string $sharedUrl;

    /**
     * @param array{
     *   sharedUrl: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->sharedUrl = $values['sharedUrl'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
