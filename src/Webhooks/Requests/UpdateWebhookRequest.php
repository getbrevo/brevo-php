<?php

namespace Brevo\Webhooks\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Webhooks\Types\UpdateWebhookRequestAuth;
use Brevo\Core\Json\JsonProperty;
use Brevo\Webhooks\Types\UpdateWebhookRequestEventsItem;
use Brevo\Core\Types\ArrayType;
use Brevo\Webhooks\Types\UpdateWebhookRequestHeadersItem;

class UpdateWebhookRequest extends JsonSerializableType
{
    /**
     * @var ?UpdateWebhookRequestAuth $auth Add authentication on webhook url
     */
    #[JsonProperty('auth')]
    public ?UpdateWebhookRequestAuth $auth;

    /**
     * @var ?bool $batched To send batched webhooks
     */
    #[JsonProperty('batched')]
    public ?bool $batched;

    /**
     * @var ?string $description Description of the webhook
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?string $domain Inbound domain of webhook, used in case of event type `inbound`
     */
    #[JsonProperty('domain')]
    public ?string $domain;

    /**
     * - Events triggering the webhook. Possible values for
     * **Transactional** type webhook: #### `sent` OR `request`,
     * `delivered`, `hardBounce`, `softBounce`, `blocked`, `spam`,
     * `invalid`, `deferred`, `click`, `opened`, `uniqueOpened` and
     * `unsubscribed` - Possible values for **Marketing** type webhook:
     * #### `spam`, `opened`, `click`, `hardBounce`, `softBounce`,
     * `unsubscribed`, `listAddition` & `delivered` - Possible values
     * for **Inbound** type webhook: #### `inboundEmailProcessed`
     *
     * @var ?array<value-of<UpdateWebhookRequestEventsItem>> $events
     */
    #[JsonProperty('events'), ArrayType(['string'])]
    public ?array $events;

    /**
     * @var ?array<UpdateWebhookRequestHeadersItem> $headers Custom headers to be send with webhooks
     */
    #[JsonProperty('headers'), ArrayType([UpdateWebhookRequestHeadersItem::class])]
    public ?array $headers;

    /**
     * @var ?string $url URL of the webhook
     */
    #[JsonProperty('url')]
    public ?string $url;

    /**
     * @param array{
     *   auth?: ?UpdateWebhookRequestAuth,
     *   batched?: ?bool,
     *   description?: ?string,
     *   domain?: ?string,
     *   events?: ?array<value-of<UpdateWebhookRequestEventsItem>>,
     *   headers?: ?array<UpdateWebhookRequestHeadersItem>,
     *   url?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->auth = $values['auth'] ?? null;
        $this->batched = $values['batched'] ?? null;
        $this->description = $values['description'] ?? null;
        $this->domain = $values['domain'] ?? null;
        $this->events = $values['events'] ?? null;
        $this->headers = $values['headers'] ?? null;
        $this->url = $values['url'] ?? null;
    }
}
