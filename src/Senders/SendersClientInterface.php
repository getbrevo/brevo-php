<?php

namespace Brevo\Senders;

use Brevo\Senders\Requests\GetSendersRequest;
use Brevo\Senders\Types\GetSendersResponse;
use Brevo\Senders\Requests\CreateSenderRequest;
use Brevo\Senders\Types\CreateSenderResponse;
use Brevo\Senders\Types\GetIpsResponse;
use Brevo\Senders\Requests\UpdateSenderRequest;
use Brevo\Senders\Types\GetIpsFromSenderResponse;
use Brevo\Senders\Requests\ValidateSenderByOtpRequest;

interface SendersClientInterface
{
    /**
     * Retrieves a list of all email senders from your Brevo account with optional filtering.
     *
     * **Use this to:**
     * - Get all available senders for email campaign setup
     * - Find sender details including ID, name, and email address
     * - Filter senders by IP address for dedicated IP users
     * - Filter senders by domain for domain-specific configurations
     * - Monitor sender configuration and status
     *
     * **Key information returned:**
     * - Sender details (ID, name, email address)
     * - Sender status and verification information
     * - Associated IP addresses and domains (for dedicated IP accounts)
     * - Sender configuration settings
     *
     * **Important considerations:**
     * - Standard accounts show empty IP arrays, dedicated IP accounts show IP assignments
     * - Filtering by IP only available for accounts with dedicated IPs
     * - Domain filtering helps organize senders by business units or brands
     * - Sender status indicates if sender is active and ready for campaign use
     * - Email verification required before sender can be used in campaigns
     *
     * @param GetSendersRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetSendersResponse
     */
    public function getSenders(GetSendersRequest $request = new GetSendersRequest(), ?array $options = null): GetSendersResponse;

    /**
     * Creates a new email sender in your Brevo account.
     *
     * **Use this to:**
     * - Add new senders for email campaigns
     * - Configure sender identity (name and email)
     * - Associate dedicated IPs with the sender (for dedicated IP accounts)
     * - Set up domain-based sender configurations
     *
     * **Key information returned:**
     * - Created sender ID
     * - DKIM and SPF configuration status
     * - Success confirmation
     *
     * **Important considerations:**
     * - Verification email sent to specified sender address
     * - DKIM and SPF configuration affects deliverability
     * - Dedicated IP accounts require IP association during creation
     * - IP weights must sum to 100 when specified
     * - Sender must be verified before use in campaigns
     *
     * @param CreateSenderRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return CreateSenderResponse
     */
    public function createSender(CreateSenderRequest $request, ?array $options = null): CreateSenderResponse;

    /**
     * Retrieves all dedicated IPs associated with your Brevo account.
     *
     * Use this to:
     * - List all your dedicated IPs
     * - Check the status of your dedicated IPs (active/inactive)
     * - Find IP addresses and associated domains for configuration purposes
     * - Monitor your IP reputation and deliverability
     * - Verify available IPs for sender configuration
     *
     * Key information returned:
     * - IP ID and address
     * - Associated domain
     * - Active status
     * - IP configuration details
     *
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetIpsResponse
     */
    public function getIps(?array $options = null): GetIpsResponse;

    /**
     * Updates an existing email sender's configuration.
     *
     * Use this to:
     * - Modify sender display name or email address
     * - Update dedicated IP associations
     * - Change sender configuration settings
     * - Correct sender information
     *
     * Key information returned:
     * - Success confirmation
     * - Updated sender details
     *
     * @param int $senderId Id of the sender
     * @param UpdateSenderRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function updateSender(int $senderId, UpdateSenderRequest $request = new UpdateSenderRequest(), ?array $options = null): void;

    /**
     * Deletes an email sender from your Brevo account.
     *
     * Use this to:
     * - Remove senders that are no longer needed
     * - Clean up sender configurations
     * - Remove duplicate or test senders
     *
     * Key information returned:
     * - Success confirmation message
     *
     * @param int $senderId Id of the sender
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function deleteSender(int $senderId, ?array $options = null): void;

    /**
     * Retrieves the dedicated IPs associated with a specific sender.
     *
     * Use this to:
     * - Check IP configuration for a sender
     * - Verify dedicated IP associations
     * - Get IP details for troubleshooting
     * - Monitor sender IP configuration
     *
     * Key information returned:
     * - List of associated dedicated IPs
     * - IP addresses and domain configurations
     * - IP status and settings
     *
     * @param int $senderId Id of the sender
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetIpsFromSenderResponse
     */
    public function getIpsFromSender(int $senderId, ?array $options = null): GetIpsFromSenderResponse;

    /**
     * Validates a sender using the OTP (One-Time Password) received via email.
     *
     * Use this to:
     * - Complete sender verification process
     * - Activate a newly created sender
     * - Verify ownership of the sender email address
     * - Enable the sender for use in email campaigns
     *
     * Key information returned:
     * - Success confirmation of sender verification
     * - Sender activation status
     *
     * @param int $senderId Id of the sender
     * @param ValidateSenderByOtpRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function validateSenderByOtp(int $senderId, ValidateSenderByOtpRequest $request, ?array $options = null): void;
}
