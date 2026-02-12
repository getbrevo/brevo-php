<?php

namespace Brevo\Domains;

use Brevo\Domains\Types\GetDomainsResponse;
use Brevo\Domains\Requests\CreateDomainRequest;
use Brevo\Domains\Types\CreateDomainResponse;
use Brevo\Domains\Types\GetDomainConfigurationResponse;
use Brevo\Domains\Types\AuthenticateDomainResponse;

interface DomainsClientInterface
{
    /**
     * Retrieves all domains associated with the account.
     *
     * Use this to:
     * - List all domains
     * - Verify domain existence
     * - Check domain authentication and verification status
     * - Monitor domain configuration and provider information
     * - Review domain creation history and ownership
     *
     * Key information returned:
     * - Domain details (ID, name, authentication status)
     * - Verification and authentication states
     * - Associated IP addresses and DNS providers
     * - Creator information and creation timestamps
     * - Pagination information for large domain lists
     *
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetDomainsResponse
     */
    public function getDomains(?array $options = null): GetDomainsResponse;

    /**
     * Creates a new domain in Brevo.
     *
     * Use this to:
     * - Add new domains for sending emails
     * - Set up domain authentication for better deliverability
     * - Configure DNS records for email authentication
     * - Establish domain-based sender identities
     *
     * Key information returned:
     * - Created domain ID and configuration
     * - Required DNS records for authentication
     * - Domain provider detection results
     * - Setup instructions and next steps
     *
     * @param CreateDomainRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return CreateDomainResponse
     */
    public function createDomain(CreateDomainRequest $request, ?array $options = null): CreateDomainResponse;

    /**
     * Retrieves configuration of a specific domain, to know if the domain is valid or not.
     *
     * Use this to:
     * - Check domain configuration
     * - Validate a domain configuration
     * - Monitor DNS record status
     * - Troubleshoot authentication issues
     *
     * Key information returned:
     * - Domain verification and authentication status
     * - DNS records configuration and validation status
     * - Detailed authentication requirements
     *
     * @param string $domainName Domain name
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetDomainConfigurationResponse
     */
    public function getDomainConfiguration(string $domainName, ?array $options = null): GetDomainConfigurationResponse;

    /**
     * Deletes a domain from Brevo.
     *
     * Use this to:
     * - Remove existing domains
     * - Clean up unused domain configurations
     * - Remove test domains
     *
     * Key information returned:
     * - Success confirmation message
     *
     * @param string $domainName Domain name
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function deleteDomain(string $domainName, ?array $options = null): void;

    /**
     * Authenticates a specific domain.
     *
     * Use this to:
     * - Authenticate a domain
     * - Verify DNS record configuration
     * - Complete domain setup for sending
     * - Enable domain for email authentication
     *
     * Key information returned:
     * - Authentication success confirmation
     * - Domain readiness status for email sending
     *
     * @param string $domainName Domain name
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return AuthenticateDomainResponse
     */
    public function authenticateDomain(string $domainName, ?array $options = null): AuthenticateDomainResponse;
}
