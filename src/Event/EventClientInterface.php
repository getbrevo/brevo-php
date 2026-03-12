<?php

namespace Brevo\Event;

use Brevo\Event\Requests\CreateEventRequest;
use Brevo\Event\Types\CreateBatchEventsRequestItem;

interface EventClientInterface
{
    /**
     * Create an event to track a contact's interaction.
     *
     * @param CreateEventRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function createEvent(CreateEventRequest $request, ?array $options = null): void;

    /**
     * Create multiple events to track contacts' interactions in a single request.
     *
     * @param array<CreateBatchEventsRequestItem> $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function createBatchEvents(array $request, ?array $options = null): void;
}
