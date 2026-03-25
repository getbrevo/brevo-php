<?php

namespace Brevo\Event;

use Brevo\Event\Requests\GetEventsRequest;
use Brevo\Types\GetEventsList;
use Brevo\Event\Requests\CreateEventRequest;
use Brevo\Event\Types\CreateBatchEventsRequestItem;
use Brevo\Types\BatchAcceptedResponse;

interface EventClientInterface
{
    /**
     * <Note>
     * This endpoint currently only supports custom events.
     * </Note>
     *
     * Retrieve a list of events filtered by various criteria.
     *
     * @param GetEventsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetEventsList
     */
    public function getEvents(GetEventsRequest $request = new GetEventsRequest(), ?array $options = null): ?GetEventsList;

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
     * @return ?BatchAcceptedResponse
     */
    public function createBatchEvents(array $request, ?array $options = null): ?BatchAcceptedResponse;
}
