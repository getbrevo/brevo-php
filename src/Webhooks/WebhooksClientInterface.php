<?php

namespace Brevo\Webhooks;

use Brevo\Webhooks\Requests\GetWebhooksRequest;
use Brevo\Webhooks\Types\GetWebhooksResponse;
use Brevo\Webhooks\Requests\CreateWebhookRequest;
use Brevo\Webhooks\Types\CreateWebhookResponse;
use Brevo\Webhooks\Requests\ExportWebhooksHistoryRequest;
use Brevo\Webhooks\Types\ExportWebhooksHistoryResponse;
use Brevo\Types\GetWebhook;
use Brevo\Webhooks\Requests\UpdateWebhookRequest;

interface WebhooksClientInterface
{
    /**
     * Retrieves all webhooks from your Brevo account with filtering and sorting options.
     *
     * Use this to:
     * - Monitor webhook configurations and event handling
     * - List webhooks by type (transactional, marketing, inbound)
     * - Review webhook endpoints and authentication
     * - Track webhook creation and modification history
     * - Audit webhook event subscriptions
     *
     * Key information returned:
     * - Complete webhook details and configuration
     * - Event types and channel subscriptions
     * - Authentication and security settings
     * - Webhook URLs and custom headers
     * - Creation and modification timestamps
     *
     * @param GetWebhooksRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetWebhooksResponse
     */
    public function getWebhooks(GetWebhooksRequest $request = new GetWebhooksRequest(), ?array $options = null): ?GetWebhooksResponse;

    /**
     * Creates a new webhook to receive real-time notifications for specified events.
     *
     * Use this to:
     * - Set up event notifications for transactional or marketing emails
     * - Configure webhook endpoints for campaign tracking
     * - Enable real-time monitoring of email delivery status
     * - Subscribe to contact list changes and updates
     * - Implement custom event handling and automation
     *
     * Key information returned:
     * - Created webhook ID and configuration
     * - Success confirmation and setup details
     *
     * @param CreateWebhookRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?CreateWebhookResponse
     */
    public function createWebhook(CreateWebhookRequest $request, ?array $options = null): ?CreateWebhookResponse;

    /**
     * <Note>
     * This is an enterprise feature. Contact us to activate it for your account.
     * </Note>
     *
     * Submits a request to export webhook event history as a CSV file. The download link is sent to the `notifyURL` you provide in the request body.
     *
     * Use this endpoint to:
     * - Export webhook event history filtered by date range, event type, or email address
     * - Generate reports for compliance, auditing, or performance analysis
     * - Track delivery patterns and webhook reliability over time
     *
     * @param ExportWebhooksHistoryRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?ExportWebhooksHistoryResponse
     */
    public function exportWebhooksHistory(ExportWebhooksHistoryRequest $request, ?array $options = null): ?ExportWebhooksHistoryResponse;

    /**
     * Retrieves detailed information about a specific webhook configuration.
     *
     * Use this to:
     * - Get complete webhook configuration and settings
     * - Check webhook event subscriptions and triggers
     * - Review authentication and security settings
     * - Verify webhook URL and custom headers
     * - Access webhook creation and modification history
     *
     * Key information returned:
     * - Complete webhook details and configuration
     * - Event types and channel subscriptions
     * - Authentication credentials and methods
     * - Custom headers and request settings
     * - Webhook status and activity information
     *
     * @param int $webhookId Id of the webhook
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetWebhook
     */
    public function getWebhook(int $webhookId, ?array $options = null): ?GetWebhook;

    /**
     * Updates an existing webhook configuration and event subscriptions.
     *
     * Use this to:
     * - Modify webhook event subscriptions and triggers
     * - Update webhook URL and endpoint configuration
     * - Change authentication settings and credentials
     * - Adjust custom headers and request parameters
     * - Enable or disable specific webhook events
     *
     * Key information returned:
     * - Success confirmation of webhook updates
     *
     * @param int $webhookId Id of the webhook
     * @param UpdateWebhookRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function updateWebhook(int $webhookId, UpdateWebhookRequest $request = new UpdateWebhookRequest(), ?array $options = null): void;

    /**
     * Permanently deletes a webhook and stops all event notifications.
     *
     * Use this to:
     * - Remove unused or obsolete webhook configurations
     * - Clean up webhook endpoints and subscriptions
     * - Stop event notifications to specific URLs
     * - Maintain organized webhook management
     *
     * Key information returned:
     * - Success confirmation of webhook deletion
     *
     * @param int $webhookId Id of the webhook
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function deleteWebhook(int $webhookId, ?array $options = null): void;
}
