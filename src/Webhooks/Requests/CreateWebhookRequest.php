<?php

namespace Brevo\Webhooks\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Webhooks\Types\CreateWebhookRequestAuth;
use Brevo\Core\Json\JsonProperty;
use Brevo\Webhooks\Types\CreateWebhookRequestChannel;
use Brevo\Webhooks\Types\CreateWebhookRequestEventsItem;
use Brevo\Core\Types\ArrayType;
use Brevo\Webhooks\Types\CreateWebhookRequestHeadersItem;
use Brevo\Webhooks\Types\CreateWebhookRequestType;

class CreateWebhookRequest extends JsonSerializableType
{
    /**
     * @var ?CreateWebhookRequestAuth $auth Add authentication on webhook url
     */
    #[JsonProperty('auth')]
    public ?CreateWebhookRequestAuth $auth;

    /**
     * @var ?bool $batched To send batched webhooks
     */
    #[JsonProperty('batched')]
    public ?bool $batched;

    /**
     * @var ?value-of<CreateWebhookRequestChannel> $channel channel of webhook
     */
    #[JsonProperty('channel')]
    public ?string $channel;

    /**
     * @var ?string $description Description of the webhook
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * Inbound domain of webhook, required in case of event type
     * `inbound`
     *
     * @var ?string $domain
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
     * for **Inbound** type webhook: #### `inboundEmailProcessed` -
     * Possible values for type **Transactional** and channel **SMS**
     * ####
     * `accepted`,`delivered`,`softBounce`,`hardBounce`,`unsubscribe`,`reply`,
     * `subscribe`,`sent`,`blacklisted`,`skip` - Possible values for
     * type **Marketing**  channel **SMS** ####
     * `sent`,`delivered`,`softBounce`,`hardBounce`,`unsubscribe`,`reply`,
     * `subscribe`,`skip`
     *
     * @var array<value-of<CreateWebhookRequestEventsItem>> $events
     */
    #[JsonProperty('events'), ArrayType(['string'])]
    public array $events;

    /**
     * @var ?array<CreateWebhookRequestHeadersItem> $headers Custom headers to be send with webhooks
     */
    #[JsonProperty('headers'), ArrayType([CreateWebhookRequestHeadersItem::class])]
    public ?array $headers;

    /**
     * @var ?value-of<CreateWebhookRequestType> $type Type of the webhook
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @var string $url URL of the webhook
     */
    #[JsonProperty('url')]
    public string $url;

    /**
     * @param array{
     *   events: array<value-of<CreateWebhookRequestEventsItem>>,
     *   url: string,
     *   auth?: ?CreateWebhookRequestAuth,
     *   batched?: ?bool,
     *   channel?: ?value-of<CreateWebhookRequestChannel>,
     *   description?: ?string,
     *   domain?: ?string,
     *   headers?: ?array<CreateWebhookRequestHeadersItem>,
     *   type?: ?value-of<CreateWebhookRequestType>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->auth = $values['auth'] ?? null;
        $this->batched = $values['batched'] ?? null;
        $this->channel = $values['channel'] ?? null;
        $this->description = $values['description'] ?? null;
        $this->domain = $values['domain'] ?? null;
        $this->events = $values['events'];
        $this->headers = $values['headers'] ?? null;
        $this->type = $values['type'] ?? null;
        $this->url = $values['url'];
    }
}
