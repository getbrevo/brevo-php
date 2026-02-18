<?php

namespace Brevo\InboundParsing;

use Brevo\InboundParsing\Requests\GetInboundEmailEventsRequest;
use Brevo\InboundParsing\Types\GetInboundEmailEventsResponse;
use Brevo\InboundParsing\Types\GetInboundEmailEventsByUuidResponse;

interface InboundParsingClientInterface
{
    /**
     * This endpoint will show the list of all the events for the received emails.
     *
     * @param GetInboundEmailEventsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetInboundEmailEventsResponse
     */
    public function getInboundEmailEvents(GetInboundEmailEventsRequest $request = new GetInboundEmailEventsRequest(), ?array $options = null): GetInboundEmailEventsResponse;

    /**
     * This endpoint will show the list of all events history for one particular received email.
     *
     * @param string $uuid UUID to fetch events specific to received email
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetInboundEmailEventsByUuidResponse
     */
    public function getInboundEmailEventsByUuid(string $uuid, ?array $options = null): GetInboundEmailEventsByUuidResponse;

    /**
     * This endpoint will retrieve inbound attachment with download token.
     *
     * @param string $downloadToken Token to fetch a particular attachment
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return string
     */
    public function getInboundEmailAttachment(string $downloadToken, ?array $options = null): string;
}
