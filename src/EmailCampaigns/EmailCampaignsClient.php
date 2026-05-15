<?php

namespace Brevo\EmailCampaigns;

use Psr\Http\Client\ClientInterface;
use Brevo\Core\Client\RawClient;
use Brevo\EmailCampaigns\Requests\GetEmailCampaignsRequest;
use Brevo\EmailCampaigns\Types\GetEmailCampaignsResponse;
use Brevo\Exceptions\BrevoException;
use Brevo\Exceptions\BrevoApiException;
use Brevo\Core\Json\JsonApiRequest;
use Brevo\Environments;
use Brevo\Core\Client\HttpMethod;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use Brevo\EmailCampaigns\Requests\CreateEmailCampaignRequest;
use Brevo\EmailCampaigns\Types\CreateEmailCampaignResponse;
use Brevo\EmailCampaigns\Requests\UploadImageToGalleryRequest;
use Brevo\EmailCampaigns\Types\UploadImageToGalleryResponse;
use Brevo\EmailCampaigns\Requests\GetEmailCampaignRequest;
use Brevo\EmailCampaigns\Types\GetEmailCampaignResponse;
use Brevo\EmailCampaigns\Requests\UpdateEmailCampaignRequest;
use Brevo\EmailCampaigns\Types\GetAbTestCampaignResultResponse;
use Brevo\EmailCampaigns\Requests\EmailExportRecipientsRequest;
use Brevo\EmailCampaigns\Types\EmailExportRecipientsResponse;
use Brevo\EmailCampaigns\Requests\SendReportRequest;
use Brevo\EmailCampaigns\Requests\SendTestEmailRequest;
use Brevo\EmailCampaigns\Types\GetSharedTemplateUrlResponse;
use Brevo\EmailCampaigns\Requests\UpdateCampaignStatusRequest;

class EmailCampaignsClient implements EmailCampaignsClientInterface
{
    /**
     * @var array{
     *   baseUrl?: string,
     *   client?: ClientInterface,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     * } $options @phpstan-ignore-next-line Property is used in endpoint methods via HttpEndpointGenerator
     */
    private array $options;

    /**
     * @var RawClient $client
     */
    private RawClient $client;

    /**
     * @param RawClient $client
     * @param ?array{
     *   baseUrl?: string,
     *   client?: ClientInterface,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     * } $options
     */
    public function __construct(
        RawClient $client,
        ?array $options = null,
    ) {
        $this->client = $client;
        $this->options = $options ?? [];
    }

    /**
     * <Note>The response payload for this endpoint has changed
     * You now need to specify which type of statistics you would like to retrieve. For more information visit [this page](https://developers.brevo.com/changelog/2023/2/7).</Note>
     *
     * @param GetEmailCampaignsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetEmailCampaignsResponse
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function getEmailCampaigns(GetEmailCampaignsRequest $request = new GetEmailCampaignsRequest(), ?array $options = null): ?GetEmailCampaignsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        if ($request->type != null) {
            $query['type'] = $request->type;
        }
        if ($request->status != null) {
            $query['status'] = $request->status;
        }
        if ($request->statistics != null) {
            $query['statistics'] = $request->statistics;
        }
        if ($request->startDate != null) {
            $query['startDate'] = $request->startDate;
        }
        if ($request->endDate != null) {
            $query['endDate'] = $request->endDate;
        }
        if ($request->limit != null) {
            $query['limit'] = $request->limit;
        }
        if ($request->offset != null) {
            $query['offset'] = $request->offset;
        }
        if ($request->sort != null) {
            $query['sort'] = $request->sort;
        }
        if ($request->excludeHtmlContent != null) {
            $query['excludeHtmlContent'] = $request->excludeHtmlContent;
        }
        if ($request->excludePdfAttachment != null) {
            $query['excludePdfAttachment'] = $request->excludePdfAttachment;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "emailCampaigns",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return GetEmailCampaignsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new BrevoException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new BrevoException(message: $e->getMessage(), previous: $e);
        }
        throw new BrevoApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Create a new email campaign. The campaign requires at minimum a name and sender details, and is created in draft status by default. You must provide email content via one of three mutually exclusive options: htmlContent (inline HTML), htmlUrl (remote URL), or templateId (existing template); additionally, A/B testing can be enabled by setting abTesting to true with subjectA and subjectB, but this is incompatible with sendAtBestTime.
     *
     * @param CreateEmailCampaignRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?CreateEmailCampaignResponse
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function createEmailCampaign(CreateEmailCampaignRequest $request, ?array $options = null): ?CreateEmailCampaignResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "emailCampaigns",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return CreateEmailCampaignResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new BrevoException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new BrevoException(message: $e->getMessage(), previous: $e);
        }
        throw new BrevoApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Upload an image to your account''s image gallery by providing an absolute URL to the image. The maximum allowed image size is 2MB and supported formats are jpeg, jpg, png, bmp, and gif; local file uploads are not supported.
     *
     * @param UploadImageToGalleryRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?UploadImageToGalleryResponse
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function uploadImageToGallery(UploadImageToGalleryRequest $request, ?array $options = null): ?UploadImageToGalleryResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "emailCampaigns/images",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return UploadImageToGalleryResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new BrevoException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new BrevoException(message: $e->getMessage(), previous: $e);
        }
        throw new BrevoApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Retrieve detailed information about a specific email campaign by its ID, including recipients, statistics, and HTML content. Use the statistics query parameter to select which statistics to include (globalStats, linksStats, statsByDomain, statsByDevice, or statsByBrowser); statsByDevice and statsByBrowser are only available on this single-campaign endpoint. You can exclude HTML content from the response by setting excludeHtmlContent to true.
     *
     * @param int $campaignId Id of the campaign
     * @param GetEmailCampaignRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetEmailCampaignResponse
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function getEmailCampaign(int $campaignId, GetEmailCampaignRequest $request = new GetEmailCampaignRequest(), ?array $options = null): ?GetEmailCampaignResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        if ($request->statistics != null) {
            $query['statistics'] = $request->statistics;
        }
        if ($request->excludeHtmlContent != null) {
            $query['excludeHtmlContent'] = $request->excludeHtmlContent;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "emailCampaigns/{$campaignId}",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return GetEmailCampaignResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new BrevoException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new BrevoException(message: $e->getMessage(), previous: $e);
        }
        throw new BrevoApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Update an existing email campaign''s properties such as name, subject, content, sender, recipients, schedule, and A/B testing configuration. The campaign must exist and the request body must contain at least one valid field to update. Only draft or scheduled campaigns can be modified; if sendAtBestTime is enabled, IP warmup will be automatically disabled.
     *
     * @param int $campaignId Id of the campaign
     * @param UpdateEmailCampaignRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function updateEmailCampaign(int $campaignId, UpdateEmailCampaignRequest $request = new UpdateEmailCampaignRequest(), ?array $options = null): void
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "emailCampaigns/{$campaignId}",
                    method: HttpMethod::PUT,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                return;
            }
        } catch (ClientExceptionInterface $e) {
            throw new BrevoException(message: $e->getMessage(), previous: $e);
        }
        throw new BrevoApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Delete an email campaign by its campaign ID. Only campaigns that have not been scheduled can be deleted; attempting to delete a campaign that has already been scheduled will return a 403 permission denied error. Related data in templates, newsletter builder, and schedule collections is also cleaned up.
     *
     * @param int $campaignId id of the campaign
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function deleteEmailCampaign(int $campaignId, ?array $options = null): void
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "emailCampaigns/{$campaignId}",
                    method: HttpMethod::DELETE,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                return;
            }
        } catch (ClientExceptionInterface $e) {
            throw new BrevoException(message: $e->getMessage(), previous: $e);
        }
        throw new BrevoApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Obtain winning version of an A/B test email campaign
     *
     * @param int $campaignId Id of the A/B test campaign
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetAbTestCampaignResultResponse
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function getAbTestCampaignResult(int $campaignId, ?array $options = null): ?GetAbTestCampaignResultResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "emailCampaigns/{$campaignId}/abTestCampaignResult",
                    method: HttpMethod::GET,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return GetAbTestCampaignResultResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new BrevoException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new BrevoException(message: $e->getMessage(), previous: $e);
        }
        throw new BrevoApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Export the recipients of a sent email campaign as an asynchronous process, filtered by recipient type (e.g. openers, clickers, hardBounces). The recipientsType field is required and determines which subset of recipients to export. An optional notifyURL webhook will be called once the export is complete, and the response returns a processId to track the export status.
     *
     * @param int $campaignId Id of the campaign
     * @param EmailExportRecipientsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?EmailExportRecipientsResponse
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function emailExportRecipients(int $campaignId, EmailExportRecipientsRequest $request, ?array $options = null): ?EmailExportRecipientsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "emailCampaigns/{$campaignId}/exportRecipients",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return EmailExportRecipientsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new BrevoException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new BrevoException(message: $e->getMessage(), previous: $e);
        }
        throw new BrevoApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Send an existing email campaign immediately by scheduling it for the current time. The campaign must have valid recipients and content configured before sending. The system verifies your account''s send limit and credit balance before dispatching; if credits are insufficient, a 402 error is returned.
     *
     * @param int $campaignId Id of the campaign
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function sendEmailCampaignNow(int $campaignId, ?array $options = null): void
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "emailCampaigns/{$campaignId}/sendNow",
                    method: HttpMethod::POST,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                return;
            }
        } catch (ClientExceptionInterface $e) {
            throw new BrevoException(message: $e->getMessage(), previous: $e);
        }
        throw new BrevoApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * A PDF will be sent to the specified email addresses
     *
     * @param int $campaignId Id of the campaign
     * @param SendReportRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function sendReport(int $campaignId, SendReportRequest $request, ?array $options = null): void
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "emailCampaigns/{$campaignId}/sendReport",
                    method: HttpMethod::POST,
                    body: $request->body,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                return;
            }
        } catch (ClientExceptionInterface $e) {
            throw new BrevoException(message: $e->getMessage(), previous: $e);
        }
        throw new BrevoApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Send a test version of an email campaign to specified email addresses or your entire test list. If the emailTo array is left empty, the test mail will be sent to all addresses in your test list. You can send a maximum of 50 test emails per day.
     *
     * @param int $campaignId Id of the campaign
     * @param SendTestEmailRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function sendTestEmail(int $campaignId, SendTestEmailRequest $request, ?array $options = null): void
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "emailCampaigns/{$campaignId}/sendTest",
                    method: HttpMethod::POST,
                    body: $request->body,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                return;
            }
        } catch (ClientExceptionInterface $e) {
            throw new BrevoException(message: $e->getMessage(), previous: $e);
        }
        throw new BrevoApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Get a unique URL to share & import an email template from one Brevo account to another.
     *
     * @param int $campaignId Id of the campaign or template
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GetSharedTemplateUrlResponse
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function getSharedTemplateUrl(int $campaignId, ?array $options = null): ?GetSharedTemplateUrlResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "emailCampaigns/{$campaignId}/sharedUrl",
                    method: HttpMethod::GET,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return GetSharedTemplateUrlResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new BrevoException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new BrevoException(message: $e->getMessage(), previous: $e);
        }
        throw new BrevoApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Update the status of an email campaign, such as suspending, archiving, or replicating it. Available status values include suspended, archive, darchive, sent, queued, replicate, replicateTemplate, cancel, and draft. Note that the replicateTemplate status is only available for template type campaigns.
     *
     * @param int $campaignId Id of the campaign
     * @param UpdateCampaignStatusRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @throws BrevoException
     * @throws BrevoApiException
     */
    public function updateCampaignStatus(int $campaignId, UpdateCampaignStatusRequest $request, ?array $options = null): void
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "emailCampaigns/{$campaignId}/status",
                    method: HttpMethod::PUT,
                    body: $request->body,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                return;
            }
        } catch (ClientExceptionInterface $e) {
            throw new BrevoException(message: $e->getMessage(), previous: $e);
        }
        throw new BrevoApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }
}
