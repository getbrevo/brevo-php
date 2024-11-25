# # GetExtendedCampaignStats

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**globalStats** | [**\Brevo\Client\Models\GetCampaignStats**](GetCampaignStats.md) | Overall statistics of the campaign |
**campaignStats** | [**GetCampaignStats[]**](GetCampaignStats.md) | List-wise statistics of the campaign. |
**mirrorClick** | **int** | Number of clicks on mirror link |
**remaining** | **int** | Number of remaning emails to send |
**linksStats** | **object** | Statistics about the number of clicks for the links |
**statsByDomain** | [**array<string,\Brevo\Client\Models\GetCampaignStats>**](GetCampaignStats.md) |  |
**statsByDevice** | [**\Brevo\Client\Models\GetStatsByDevice**](GetStatsByDevice.md) |  |
**statsByBrowser** | [**array<string,\Brevo\Client\Models\GetDeviceBrowserStats>**](GetDeviceBrowserStats.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
