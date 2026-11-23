# AGENTS.md: brevo-php

Instructions for AI coding agents working in, or with, this repository. For human-oriented docs see [README.md](README.md).

## What this is

`getbrevo/brevo-php` is the official PHP SDK for the [Brevo API](https://developers.brevo.com). It is **generated** from Brevo's OpenAPI definition with [Fern](https://buildwithfern.com). Most of `src/` is generated and is overwritten on every regeneration.

- Package: `getbrevo/brevo-php` on Packagist; namespace `Brevo\`
- Main class: `Brevo\Brevo`
- Authentication: API key (`apiKey`) or OAuth 2.0 machine-to-machine (`clientId` and `clientSecret`)
- Base URL: `https://api.brevo.com/v3`
- Runtime: PHP ^8.1 and a PSR-18 HTTP client, such as Guzzle

## Using the SDK (for code that depends on it)

- **Install an HTTP client.** The package does not bundle one. Without one installed, calls fail with `No PSR-18 clients found`. For example: `composer require guzzlehttp/guzzle`. The SDK finds an installed client automatically.
- Create the client with `new Brevo(apiKey: '...')`. Read the key from your own environment, for example `getenv('BREVO_API_KEY')`; the SDK does not read an API key variable itself.
- For OAuth 2.0 M2M, pass `clientId` and `clientSecret`, or set `BREVO_CLIENT_ID` and `BREVO_CLIENT_SECRET`. Use one authentication method per client.
- Resources are properties on the client: `$client->contacts`, `$client->transactionalEmails`, `$client->emailCampaigns`, and so on. Methods take a request object: `$client->transactionalEmails->sendTransacEmail(new SendTransacEmailRequest([...]))`. See [reference.md](reference.md) for every method and its types.
- Failed calls throw `Brevo\Exceptions\BrevoApiException`; `getCode()` is the HTTP status.
- Defaults: 2 retries on `408`, `429` and `5xx`, and no default timeout. Set `options: ['timeout' => 30.0]` on the client, or per call with `options`.
- Never hard-code API keys.

Machine-readable docs: <https://developers.brevo.com/llms.txt> (append `.md` to any docs page URL for clean Markdown).

## Repository layout

```
src/Brevo.php, BrevoInterface.php   the client (generated)
src/<Resource>/                     one folder per API area, with its client, Requests and Types (generated)
src/Core/                           HTTP client, retries, serialization (generated)
src/Exceptions/                     exception classes (generated)
tests/                              tests (generated)
wiremock/                           WireMock stubs for the wire tests
reference.md                        method reference (generated)
composer.json                       package definition (generated)
README.md                           hand-written
AGENTS.md                           hand-written
changelog.md                        hand-written
banner.png                          hand-written
.fernignore                         lists the files Fern must not overwrite
```

## Working in this repo

**Do not edit generated files** (everything under `src/` and `tests/`, `reference.md`, `composer.json`, `.github/`). Changes there are overwritten by the next regeneration. If generated code is wrong, open an issue; the fix belongs in the generator configuration.

Files listed in `.fernignore` are maintained by hand and survive regeneration. This includes `wiremock/wiremock-mappings.json`, which carries a manual fix; see the comments in `.fernignore` before touching it. If you add another hand-written file, add it to `.fernignore`.

Commands:

```sh
composer install    # install dependencies
composer test       # run the tests (phpunit)
composer analyze    # static analysis (phpstan)
composer build      # syntax check (php -l)
```

## Releasing

Releases are cut by tagging a version such as `v6.0.0`. Do not create tags or releases unless a maintainer asks you to.

## Boundaries

- Do not commit secrets, tokens or API keys.
- Do not make breaking changes to generated code by hand.
- Do not change `.github/workflows/` by hand; it is generated.
