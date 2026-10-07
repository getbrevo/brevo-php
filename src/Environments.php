<?php

namespace Brevo;

/**
 * Represents the available environments for the API with multiple base URLs.
 */
class Environments
{
    /**
     * @var string $base
     */
    public readonly string $base;

    /**
     * @var string $oAuth
     */
    public readonly string $oAuth;

    /**
     * @param string $base The base base URL
     * @param string $oAuth The oAuth base URL
     */
    private function __construct(
        string $base,
        string $oAuth,
    ) {
        $this->base = $base;
        $this->oAuth = $oAuth;
    }

    /**
     * Default_ environment
     *
     * @return Environments
     */
    public static function Default_(): Environments
    {
        return new self(
            base: 'https://api.brevo.com/v3',
            oAuth: 'https://oauth.brevo.com/realms/partner'
        );
    }

    /**
     * Create a custom environment with your own URLs
     *
     * @param string $base The base base URL
     * @param string $oAuth The oAuth base URL
     * @return Environments
     */
    public static function custom(string $base, string $oAuth): Environments
    {
        return new self(
            base: $base,
            oAuth: $oAuth
        );
    }
}
