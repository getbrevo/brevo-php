## 4.0.12 - 2026-03-12
* fix: improve JSON serialization and test configuration
* Fix boolean type handling in JSON serialization and deserialization by adding explicit checks for bool values, since PHP's gettype() returns "boolean" instead of "bool". Also improve property default value detection using hasDefaultValue() check to avoid potential warnings. Update test configuration to support external WireMock orchestration via WIREMOCK_URL environment variable.
* Key changes:
* Add special case handling for bool types in JsonSerializer and JsonDeserializer
* Use hasDefaultValue() check before calling getDefaultValue() in JsonSerializableType
* Make test suite configurable with WIREMOCK_URL environment variable
* Support dynamic port discovery for WireMock container in bootstrap
* 🌿 Generated with Fern

## 4.0.11 - 2026-03-12
* SDK regeneration
* Unable to analyze changes with AI, incrementing PATCH version.

## 4.0.6 - 2026-02-24
* chore: update Fern CLI version to 3.85.3
* Update the Fern CLI version from 3.82.0 to 3.85.3 to incorporate latest tooling improvements and bug fixes.
* Key changes:
* Update cliVersion in .fern/metadata.json from 3.82.0 to 3.85.3
* Maintain existing generator configuration settings
* 🌿 Generated with Fern

## 4.0.2 - 2026-02-23
* chore: downgrade Fern CLI version and update wiremock test data
* Update Fern CLI from version 3.82.0 to 3.76.0 and simplify wiremock test data by removing nested records structure from association objects.
* Key changes:
* Downgrade Fern CLI version from 3.82.0 to 3.76.0 in metadata.json
* Simplify association object structure in wiremock mappings
* Remove nested "records" array from garage association test data
* 🌿 Generated with Fern

