<?php

namespace Brevo\Event;

use Brevo\Event\Requests\CreateEventRequest;

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
}
