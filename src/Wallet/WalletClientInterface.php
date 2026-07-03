<?php

namespace Brevo\Wallet;

use Brevo\Types\WalletPassInstallUrl;

interface WalletClientInterface
{
    /**
     * Generate a wallet installation URL for a specific contact. The returned URL points to the pass installation page and encodes the pass, contact and organization identifiers as an encrypted token, so it can be shared with the contact (email, SMS, QR code, ...) to add the pass to their Apple Wallet or Google Wallet.
     *
     * @param string $passId Pass ID. The unique identifier of the wallet pass for which to generate an installation URL.
     * @param int $contactId The Brevo contact ID the installation URL is generated for.
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?WalletPassInstallUrl
     */
    public function getWalletPassInstallUrl(string $passId, int $contactId, ?array $options = null): ?WalletPassInstallUrl;
}
