<?php

namespace Brevo\Types;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Core\Types\ArrayType;

class GetWebhook extends JsonSerializableType
{
    /**
     * @var ?array<string, mixed> $auth Authentication header to be send with the webhook requests
     */
    #[JsonProperty('auth'), ArrayType(['string' => 'mixed'])]
    public ?array $auth;

    /**
     * Batching configuration of the webhook, we send batched webhooks if its
     * true
     *
     * @var ?bool $batched
     */
    #[JsonProperty('batched')]
    public ?bool $batched;

    /**
     * @var string $createdAt Creation UTC date-time of the webhook (YYYY-MM-DDTHH:mm:ss.SSSZ)
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var string $description Description of the webhook
     */
    #[JsonProperty('description')]
    public string $description;

    /**
     * @var array<string> $events
     */
    #[JsonProperty('events'), ArrayType(['string'])]
    public array $events;

    /**
     * @var ?array<array<string, mixed>> $headers
     */
    #[JsonProperty('headers'), ArrayType([['string' => 'mixed']])]
    public ?array $headers;

    /**
     * @var int $id ID of the webhook
     */
    #[JsonProperty('id')]
    public int $id;

    /**
     * @var string $modifiedAt Last modification UTC date-time of the webhook (YYYY-MM-DDTHH:mm:ss.SSSZ)
     */
    #[JsonProperty('modifiedAt')]
    public string $modifiedAt;

    /**
     * @var value-of<GetWebhookType> $type Type of webhook (marketing, transactional, or inbound)
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var ?string $domain Inbound domain of the webhook, only returned for inbound type webhooks
     */
    #[JsonProperty('domain')]
    public ?string $domain;

    /**
     * @var string $url URL of the webhook
     */
    #[JsonProperty('url')]
    public string $url;

    /**
     * @param array{
     *   createdAt: string,
     *   description: string,
     *   events: array<string>,
     *   id: int,
     *   modifiedAt: string,
     *   type: value-of<GetWebhookType>,
     *   url: string,
     *   auth?: ?array<string, mixed>,
     *   batched?: ?bool,
     *   headers?: ?array<array<string, mixed>>,
     *   domain?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->auth = $values['auth'] ?? null;
        $this->batched = $values['batched'] ?? null;
        $this->createdAt = $values['createdAt'];
        $this->description = $values['description'];
        $this->events = $values['events'];
        $this->headers = $values['headers'] ?? null;
        $this->id = $values['id'];
        $this->modifiedAt = $values['modifiedAt'];
        $this->type = $values['type'];
        $this->domain = $values['domain'] ?? null;
        $this->url = $values['url'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
