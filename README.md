# Brevo&#39;s API v3 Php Library

Brevo provide a RESTFul API that can be used with any languages. With this API, you will be able to :
  - Manage your campaigns and get the statistics
  - Manage your contacts
  - Send transactional Emails and SMS
  - and much more...

You can download our wrappers at https://github.com/orgs/brevo

**Possible responses**
  | Code | Message |
  | :-------------: | ------------- |
  | 200  | OK. Successful Request  |
  | 201  | OK. Successful Creation |
  | 202  | OK. Request accepted |
  | 204  | OK. Successful Update/Deletion  |
  | 400  | Error. Bad Request  |
  | 401  | Error. Authentication Needed  |
  | 402  | Error. Not enough credit, plan upgrade needed  |
  | 403  | Error. Permission denied  |
  | 404  | Error. Object does not exist |
  | 405  | Error. Method not allowed  |
  | 406  | Error. Not Acceptable  |
  | 422  | Error. Unprocessable Entity |


For more information, please visit [https://account.brevo.com/support](https://account.brevo.com/support).

Brevo's API matches the [OpenAPI v2 definition](https://www.openapis.org/). The specification can be downloaded [here](https://api.brevo.com/v3/swagger_definition.yml).


## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "require": {
    "getbrevo/brevo-php": "*"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/Brevo\Client/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: api-key
$config = Brevo\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Brevo\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

// Configure API key authorization: partner-key
$config = Brevo\Client\Configuration::getDefaultConfiguration()->setApiKey('partner-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Brevo\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('partner-key', 'Bearer');


$apiInstance = new Brevo\Client\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAccount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getAccount: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.brevo.com/v3*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountApi* | [**getAccount**](docs/Api/AccountApi.md#getaccount) | **GET** /account | Get your account information, plan and credits details
*AccountApi* | [**getAccountActivity**](docs/Api/AccountApi.md#getaccountactivity) | **GET** /organization/activities | Get user activity logs
*BalanceApi* | [**beginTransaction**](docs/Api/BalanceApi.md#begintransaction) | **POST** /loyalty/balance/programs/{loyaltyProgramId}/transactions | Create new transaction
*BalanceApi* | [**cancelTransaction**](docs/Api/BalanceApi.md#canceltransaction) | **POST** /loyalty/balance/programs/{loyaltyProgramId}/transactions/{transactionId}/cancel | Cancel transaction
*BalanceApi* | [**completeTransaction**](docs/Api/BalanceApi.md#completetransaction) | **POST** /loyalty/balance/programs/{loyaltyProgramId}/transactions/{transactionId}/complete | Complete transaction
*BalanceApi* | [**createBalanceOrder**](docs/Api/BalanceApi.md#createbalanceorder) | **POST** /loyalty/balance/programs/{loyaltyProgramId}/create-order | Create balance order
*BalanceApi* | [**getBalanceDefinitionList**](docs/Api/BalanceApi.md#getbalancedefinitionlist) | **GET** /loyalty/balance/programs/{loyaltyProgramId}/balance-definitions | Get balance definition list
*BalanceApi* | [**getContactBalances**](docs/Api/BalanceApi.md#getcontactbalances) | **GET** /loyalty/balance/programs/{loyaltyProgramId}/contact-balances | Get balance list
*BalanceApi* | [**getSubscriptionBalances**](docs/Api/BalanceApi.md#getsubscriptionbalances) | **GET** /loyalty/balance/programs/{loyaltyProgramId}/subscriptions/{contactId}/balances | Get subscription balances
*BalanceApi* | [**loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsBalanceDefinitionIdDelete**](docs/Api/BalanceApi.md#loyaltybalanceprogramsloyaltyprogramidbalancedefinitionsbalancedefinitioniddelete) | **DELETE** /loyalty/balance/programs/{loyaltyProgramId}/balance-definitions/{balanceDefinitionId} | Delete balance definition
*BalanceApi* | [**loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsBalanceDefinitionIdGet**](docs/Api/BalanceApi.md#loyaltybalanceprogramsloyaltyprogramidbalancedefinitionsbalancedefinitionidget) | **GET** /loyalty/balance/programs/{loyaltyProgramId}/balance-definitions/{balanceDefinitionId} | Get balance definition
*BalanceApi* | [**loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsBalanceDefinitionIdLimitsBalanceLimitIdDelete**](docs/Api/BalanceApi.md#loyaltybalanceprogramsloyaltyprogramidbalancedefinitionsbalancedefinitionidlimitsbalancelimitiddelete) | **DELETE** /loyalty/balance/programs/{loyaltyProgramId}/balance-definitions/{balanceDefinitionId}/limits/{balanceLimitId} | Delete balance limit
*BalanceApi* | [**loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsBalanceDefinitionIdLimitsBalanceLimitIdGet**](docs/Api/BalanceApi.md#loyaltybalanceprogramsloyaltyprogramidbalancedefinitionsbalancedefinitionidlimitsbalancelimitidget) | **GET** /loyalty/balance/programs/{loyaltyProgramId}/balance-definitions/{balanceDefinitionId}/limits/{balanceLimitId} | Get balance limits
*BalanceApi* | [**loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsBalanceDefinitionIdLimitsBalanceLimitIdPut**](docs/Api/BalanceApi.md#loyaltybalanceprogramsloyaltyprogramidbalancedefinitionsbalancedefinitionidlimitsbalancelimitidput) | **PUT** /loyalty/balance/programs/{loyaltyProgramId}/balance-definitions/{balanceDefinitionId}/limits/{balanceLimitId} | Updates balance limit
*BalanceApi* | [**loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsBalanceDefinitionIdLimitsPost**](docs/Api/BalanceApi.md#loyaltybalanceprogramsloyaltyprogramidbalancedefinitionsbalancedefinitionidlimitspost) | **POST** /loyalty/balance/programs/{loyaltyProgramId}/balance-definitions/{balanceDefinitionId}/limits | Create balance limits
*BalanceApi* | [**loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsBalanceDefinitionIdPut**](docs/Api/BalanceApi.md#loyaltybalanceprogramsloyaltyprogramidbalancedefinitionsbalancedefinitionidput) | **PUT** /loyalty/balance/programs/{loyaltyProgramId}/balance-definitions/{balanceDefinitionId} | Update balance definition
*BalanceApi* | [**loyaltyBalanceProgramsLoyaltyProgramIdBalanceDefinitionsPost**](docs/Api/BalanceApi.md#loyaltybalanceprogramsloyaltyprogramidbalancedefinitionspost) | **POST** /loyalty/balance/programs/{loyaltyProgramId}/balance-definitions | Create balance definition
*CompaniesApi* | [**companiesAttributesGet**](docs/Api/CompaniesApi.md#companiesattributesget) | **GET** /companies/attributes | Get company attributes
*CompaniesApi* | [**companiesGet**](docs/Api/CompaniesApi.md#companiesget) | **GET** /companies | Get all Companies
*CompaniesApi* | [**companiesIdDelete**](docs/Api/CompaniesApi.md#companiesiddelete) | **DELETE** /companies/{id} | Delete a company
*CompaniesApi* | [**companiesIdGet**](docs/Api/CompaniesApi.md#companiesidget) | **GET** /companies/{id} | Get a company
*CompaniesApi* | [**companiesIdPatch**](docs/Api/CompaniesApi.md#companiesidpatch) | **PATCH** /companies/{id} | Update a company
*CompaniesApi* | [**companiesImportPost**](docs/Api/CompaniesApi.md#companiesimportpost) | **POST** /companies/import | Import companies(creation and updation)
*CompaniesApi* | [**companiesLinkUnlinkIdPatch**](docs/Api/CompaniesApi.md#companieslinkunlinkidpatch) | **PATCH** /companies/link-unlink/{id} | Link and Unlink company with contact and deal
*CompaniesApi* | [**companiesPost**](docs/Api/CompaniesApi.md#companiespost) | **POST** /companies | Create a company
*ContactsApi* | [**addContactToList**](docs/Api/ContactsApi.md#addcontacttolist) | **POST** /contacts/lists/{listId}/contacts/add | Add existing contacts to a list
*ContactsApi* | [**createAttribute**](docs/Api/ContactsApi.md#createattribute) | **POST** /contacts/attributes/{attributeCategory}/{attributeName} | Create contact attribute
*ContactsApi* | [**createContact**](docs/Api/ContactsApi.md#createcontact) | **POST** /contacts | Create a contact
*ContactsApi* | [**createDoiContact**](docs/Api/ContactsApi.md#createdoicontact) | **POST** /contacts/doubleOptinConfirmation | Create Contact via DOI (Double-Opt-In) Flow
*ContactsApi* | [**createFolder**](docs/Api/ContactsApi.md#createfolder) | **POST** /contacts/folders | Create a folder
*ContactsApi* | [**createList**](docs/Api/ContactsApi.md#createlist) | **POST** /contacts/lists | Create a list
*ContactsApi* | [**deleteAttribute**](docs/Api/ContactsApi.md#deleteattribute) | **DELETE** /contacts/attributes/{attributeCategory}/{attributeName} | Delete an attribute
*ContactsApi* | [**deleteContact**](docs/Api/ContactsApi.md#deletecontact) | **DELETE** /contacts/{identifier} | Delete a contact
*ContactsApi* | [**deleteFolder**](docs/Api/ContactsApi.md#deletefolder) | **DELETE** /contacts/folders/{folderId} | Delete a folder (and all its lists)
*ContactsApi* | [**deleteList**](docs/Api/ContactsApi.md#deletelist) | **DELETE** /contacts/lists/{listId} | Delete a list
*ContactsApi* | [**deleteMultiAttributeOptions**](docs/Api/ContactsApi.md#deletemultiattributeoptions) | **DELETE** /contacts/attributes/{attributeType}/{multipleChoiceAttribute}/{multipleChoiceAttributeOption} | Delete a multiple-choice attribute option
*ContactsApi* | [**getAttributes**](docs/Api/ContactsApi.md#getattributes) | **GET** /contacts/attributes | List all attributes
*ContactsApi* | [**getContactInfo**](docs/Api/ContactsApi.md#getcontactinfo) | **GET** /contacts/{identifier} | Get a contact&#39;s details
*ContactsApi* | [**getContactStats**](docs/Api/ContactsApi.md#getcontactstats) | **GET** /contacts/{identifier}/campaignStats | Get email campaigns&#39; statistics for a contact
*ContactsApi* | [**getContacts**](docs/Api/ContactsApi.md#getcontacts) | **GET** /contacts | Get all the contacts
*ContactsApi* | [**getContactsFromList**](docs/Api/ContactsApi.md#getcontactsfromlist) | **GET** /contacts/lists/{listId}/contacts | Get contacts in a list
*ContactsApi* | [**getFolder**](docs/Api/ContactsApi.md#getfolder) | **GET** /contacts/folders/{folderId} | Returns a folder&#39;s details
*ContactsApi* | [**getFolderLists**](docs/Api/ContactsApi.md#getfolderlists) | **GET** /contacts/folders/{folderId}/lists | Get lists in a folder
*ContactsApi* | [**getFolders**](docs/Api/ContactsApi.md#getfolders) | **GET** /contacts/folders | Get all folders
*ContactsApi* | [**getList**](docs/Api/ContactsApi.md#getlist) | **GET** /contacts/lists/{listId} | Get a list&#39;s details
*ContactsApi* | [**getLists**](docs/Api/ContactsApi.md#getlists) | **GET** /contacts/lists | Get all the lists
*ContactsApi* | [**getSegments**](docs/Api/ContactsApi.md#getsegments) | **GET** /contacts/segments | Get all the segments
*ContactsApi* | [**importContacts**](docs/Api/ContactsApi.md#importcontacts) | **POST** /contacts/import | Import contacts
*ContactsApi* | [**removeContactFromList**](docs/Api/ContactsApi.md#removecontactfromlist) | **POST** /contacts/lists/{listId}/contacts/remove | Delete a contact from a list
*ContactsApi* | [**requestContactExport**](docs/Api/ContactsApi.md#requestcontactexport) | **POST** /contacts/export | Export contacts
*ContactsApi* | [**updateAttribute**](docs/Api/ContactsApi.md#updateattribute) | **PUT** /contacts/attributes/{attributeCategory}/{attributeName} | Update contact attribute
*ContactsApi* | [**updateBatchContacts**](docs/Api/ContactsApi.md#updatebatchcontacts) | **POST** /contacts/batch | Update multiple contacts
*ContactsApi* | [**updateContact**](docs/Api/ContactsApi.md#updatecontact) | **PUT** /contacts/{identifier} | Update a contact
*ContactsApi* | [**updateFolder**](docs/Api/ContactsApi.md#updatefolder) | **PUT** /contacts/folders/{folderId} | Update a folder
*ContactsApi* | [**updateList**](docs/Api/ContactsApi.md#updatelist) | **PUT** /contacts/lists/{listId} | Update a list
*ConversationsApi* | [**conversationsAgentOnlinePingPost**](docs/Api/ConversationsApi.md#conversationsagentonlinepingpost) | **POST** /conversations/agentOnlinePing | Sets agent’s status to online for 2-3 minutes
*ConversationsApi* | [**conversationsMessagesIdDelete**](docs/Api/ConversationsApi.md#conversationsmessagesiddelete) | **DELETE** /conversations/messages/{id} | Delete a message sent by an agent
*ConversationsApi* | [**conversationsMessagesIdGet**](docs/Api/ConversationsApi.md#conversationsmessagesidget) | **GET** /conversations/messages/{id} | Get a message
*ConversationsApi* | [**conversationsMessagesIdPut**](docs/Api/ConversationsApi.md#conversationsmessagesidput) | **PUT** /conversations/messages/{id} | Update a message sent by an agent
*ConversationsApi* | [**conversationsMessagesPost**](docs/Api/ConversationsApi.md#conversationsmessagespost) | **POST** /conversations/messages | Send a message as an agent
*ConversationsApi* | [**conversationsPushedMessagesIdDelete**](docs/Api/ConversationsApi.md#conversationspushedmessagesiddelete) | **DELETE** /conversations/pushedMessages/{id} | Delete an automated message
*ConversationsApi* | [**conversationsPushedMessagesIdGet**](docs/Api/ConversationsApi.md#conversationspushedmessagesidget) | **GET** /conversations/pushedMessages/{id} | Get an automated message
*ConversationsApi* | [**conversationsPushedMessagesIdPut**](docs/Api/ConversationsApi.md#conversationspushedmessagesidput) | **PUT** /conversations/pushedMessages/{id} | Update an automated message
*ConversationsApi* | [**conversationsPushedMessagesPost**](docs/Api/ConversationsApi.md#conversationspushedmessagespost) | **POST** /conversations/pushedMessages | Send an automated message to a visitor
*CouponsApi* | [**createCouponCollection**](docs/Api/CouponsApi.md#createcouponcollection) | **POST** /couponCollections | Create а coupon collection
*CouponsApi* | [**createCoupons**](docs/Api/CouponsApi.md#createcoupons) | **POST** /coupons | Create coupons for a coupon collection
*CouponsApi* | [**getCouponCollection**](docs/Api/CouponsApi.md#getcouponcollection) | **GET** /couponCollections/{id} | Get a coupon collection by id
*CouponsApi* | [**getCouponCollections**](docs/Api/CouponsApi.md#getcouponcollections) | **GET** /couponCollections | Get all your coupon collections
*CouponsApi* | [**updateCouponCollection**](docs/Api/CouponsApi.md#updatecouponcollection) | **PATCH** /couponCollections/{id} | Update a coupon collection by id
*DealsApi* | [**crmAttributesDealsGet**](docs/Api/DealsApi.md#crmattributesdealsget) | **GET** /crm/attributes/deals | Get deal attributes
*DealsApi* | [**crmDealsGet**](docs/Api/DealsApi.md#crmdealsget) | **GET** /crm/deals | Get all deals
*DealsApi* | [**crmDealsIdDelete**](docs/Api/DealsApi.md#crmdealsiddelete) | **DELETE** /crm/deals/{id} | Delete a deal
*DealsApi* | [**crmDealsIdGet**](docs/Api/DealsApi.md#crmdealsidget) | **GET** /crm/deals/{id} | Get a deal
*DealsApi* | [**crmDealsIdPatch**](docs/Api/DealsApi.md#crmdealsidpatch) | **PATCH** /crm/deals/{id} | Update a deal
*DealsApi* | [**crmDealsImportPost**](docs/Api/DealsApi.md#crmdealsimportpost) | **POST** /crm/deals/import | Import deals(creation and updation)
*DealsApi* | [**crmDealsLinkUnlinkIdPatch**](docs/Api/DealsApi.md#crmdealslinkunlinkidpatch) | **PATCH** /crm/deals/link-unlink/{id} | Link and Unlink a deal with contacts and companies
*DealsApi* | [**crmDealsPost**](docs/Api/DealsApi.md#crmdealspost) | **POST** /crm/deals | Create a deal
*DealsApi* | [**crmPipelineDetailsAllGet**](docs/Api/DealsApi.md#crmpipelinedetailsallget) | **GET** /crm/pipeline/details/all | Get all pipelines
*DealsApi* | [**crmPipelineDetailsGet**](docs/Api/DealsApi.md#crmpipelinedetailsget) | **GET** /crm/pipeline/details | Get pipeline stages
*DealsApi* | [**crmPipelineDetailsPipelineIDGet**](docs/Api/DealsApi.md#crmpipelinedetailspipelineidget) | **GET** /crm/pipeline/details/{pipelineID} | Get a pipeline
*DomainsApi* | [**authenticateDomain**](docs/Api/DomainsApi.md#authenticatedomain) | **PUT** /senders/domains/{domainName}/authenticate | Authenticate a domain
*DomainsApi* | [**createDomain**](docs/Api/DomainsApi.md#createdomain) | **POST** /senders/domains | Create a new domain
*DomainsApi* | [**deleteDomain**](docs/Api/DomainsApi.md#deletedomain) | **DELETE** /senders/domains/{domainName} | Delete a domain
*DomainsApi* | [**getDomainConfiguration**](docs/Api/DomainsApi.md#getdomainconfiguration) | **GET** /senders/domains/{domainName} | Validate domain configuration
*DomainsApi* | [**getDomains**](docs/Api/DomainsApi.md#getdomains) | **GET** /senders/domains | Get the list of all your domains
*EcommerceApi* | [**createBatchOrder**](docs/Api/EcommerceApi.md#createbatchorder) | **POST** /orders/status/batch | Create orders in batch
*EcommerceApi* | [**createOrder**](docs/Api/EcommerceApi.md#createorder) | **POST** /orders/status | Managing the status of the order
*EcommerceApi* | [**createUpdateBatchCategory**](docs/Api/EcommerceApi.md#createupdatebatchcategory) | **POST** /categories/batch | Create categories in batch
*EcommerceApi* | [**createUpdateBatchProducts**](docs/Api/EcommerceApi.md#createupdatebatchproducts) | **POST** /products/batch | Create products in batch
*EcommerceApi* | [**createUpdateCategory**](docs/Api/EcommerceApi.md#createupdatecategory) | **POST** /categories | Create/Update a category
*EcommerceApi* | [**createUpdateProduct**](docs/Api/EcommerceApi.md#createupdateproduct) | **POST** /products | Create/Update a product
*EcommerceApi* | [**ecommerceActivatePost**](docs/Api/EcommerceApi.md#ecommerceactivatepost) | **POST** /ecommerce/activate | Activate the eCommerce app
*EcommerceApi* | [**ecommerceAttributionMetricsConversionSourceConversionSourceIdGet**](docs/Api/EcommerceApi.md#ecommerceattributionmetricsconversionsourceconversionsourceidget) | **GET** /ecommerce/attribution/metrics/{conversionSource}/{conversionSourceId} | Get detailed attribution metrics for a single Brevo campaign
*EcommerceApi* | [**ecommerceAttributionMetricsGet**](docs/Api/EcommerceApi.md#ecommerceattributionmetricsget) | **GET** /ecommerce/attribution/metrics | Get attribution metrics for one or more Brevo campaigns
*EcommerceApi* | [**ecommerceAttributionProductsConversionSourceConversionSourceIdGet**](docs/Api/EcommerceApi.md#ecommerceattributionproductsconversionsourceconversionsourceidget) | **GET** /ecommerce/attribution/products/{conversionSource}/{conversionSourceId} | Get attributed product sales for a single Brevo campaign
*EcommerceApi* | [**ecommerceConfigDisplayCurrencyGet**](docs/Api/EcommerceApi.md#ecommerceconfigdisplaycurrencyget) | **GET** /ecommerce/config/displayCurrency | Get the ISO 4217 compliant display currency code for your Brevo account
*EcommerceApi* | [**getCategories**](docs/Api/EcommerceApi.md#getcategories) | **GET** /categories | Return all your categories
*EcommerceApi* | [**getCategoryInfo**](docs/Api/EcommerceApi.md#getcategoryinfo) | **GET** /categories/{id} | Get a category details
*EcommerceApi* | [**getOrders**](docs/Api/EcommerceApi.md#getorders) | **GET** /orders | Get order details
*EcommerceApi* | [**getProductInfo**](docs/Api/EcommerceApi.md#getproductinfo) | **GET** /products/{id} | Get a product&#39;s details
*EcommerceApi* | [**getProducts**](docs/Api/EcommerceApi.md#getproducts) | **GET** /products | Return all your products
*EcommerceApi* | [**setConfigDisplayCurrency**](docs/Api/EcommerceApi.md#setconfigdisplaycurrency) | **POST** /ecommerce/config/displayCurrency | Set the ISO 4217 compliant display currency code for your Brevo account
*EmailCampaignsApi* | [**createEmailCampaign**](docs/Api/EmailCampaignsApi.md#createemailcampaign) | **POST** /emailCampaigns | Create an email campaign
*EmailCampaignsApi* | [**deleteEmailCampaign**](docs/Api/EmailCampaignsApi.md#deleteemailcampaign) | **DELETE** /emailCampaigns/{campaignId} | Delete an email campaign
*EmailCampaignsApi* | [**emailExportRecipients**](docs/Api/EmailCampaignsApi.md#emailexportrecipients) | **POST** /emailCampaigns/{campaignId}/exportRecipients | Export the recipients of an email campaign
*EmailCampaignsApi* | [**getAbTestCampaignResult**](docs/Api/EmailCampaignsApi.md#getabtestcampaignresult) | **GET** /emailCampaigns/{campaignId}/abTestCampaignResult | Get an A/B test email campaign results
*EmailCampaignsApi* | [**getEmailCampaign**](docs/Api/EmailCampaignsApi.md#getemailcampaign) | **GET** /emailCampaigns/{campaignId} | Get an email campaign report
*EmailCampaignsApi* | [**getEmailCampaigns**](docs/Api/EmailCampaignsApi.md#getemailcampaigns) | **GET** /emailCampaigns | Return all your created email campaigns
*EmailCampaignsApi* | [**getSharedTemplateUrl**](docs/Api/EmailCampaignsApi.md#getsharedtemplateurl) | **GET** /emailCampaigns/{campaignId}/sharedUrl | Get a shared template url
*EmailCampaignsApi* | [**sendEmailCampaignNow**](docs/Api/EmailCampaignsApi.md#sendemailcampaignnow) | **POST** /emailCampaigns/{campaignId}/sendNow | Send an email campaign immediately, based on campaignId
*EmailCampaignsApi* | [**sendReport**](docs/Api/EmailCampaignsApi.md#sendreport) | **POST** /emailCampaigns/{campaignId}/sendReport | Send the report of a campaign
*EmailCampaignsApi* | [**sendTestEmail**](docs/Api/EmailCampaignsApi.md#sendtestemail) | **POST** /emailCampaigns/{campaignId}/sendTest | Send an email campaign to your test list
*EmailCampaignsApi* | [**updateCampaignStatus**](docs/Api/EmailCampaignsApi.md#updatecampaignstatus) | **PUT** /emailCampaigns/{campaignId}/status | Update an email campaign status
*EmailCampaignsApi* | [**updateEmailCampaign**](docs/Api/EmailCampaignsApi.md#updateemailcampaign) | **PUT** /emailCampaigns/{campaignId} | Update an email campaign
*EmailCampaignsApi* | [**uploadImageToGallery**](docs/Api/EmailCampaignsApi.md#uploadimagetogallery) | **POST** /emailCampaigns/images | Upload an image to your account&#39;s image gallery
*EventApi* | [**createEvent**](docs/Api/EventApi.md#createevent) | **POST** /events | Create an event
*ExternalFeedsApi* | [**createExternalFeed**](docs/Api/ExternalFeedsApi.md#createexternalfeed) | **POST** /feeds | Create an external feed
*ExternalFeedsApi* | [**deleteExternalFeed**](docs/Api/ExternalFeedsApi.md#deleteexternalfeed) | **DELETE** /feeds/{uuid} | Delete an external feed
*ExternalFeedsApi* | [**getAllExternalFeeds**](docs/Api/ExternalFeedsApi.md#getallexternalfeeds) | **GET** /feeds | Fetch all external feeds
*ExternalFeedsApi* | [**getExternalFeedByUUID**](docs/Api/ExternalFeedsApi.md#getexternalfeedbyuuid) | **GET** /feeds/{uuid} | Get an external feed by UUID
*ExternalFeedsApi* | [**updateExternalFeed**](docs/Api/ExternalFeedsApi.md#updateexternalfeed) | **PUT** /feeds/{uuid} | Update an external feed
*FilesApi* | [**crmFilesGet**](docs/Api/FilesApi.md#crmfilesget) | **GET** /crm/files | Get all files
*FilesApi* | [**crmFilesIdDataGet**](docs/Api/FilesApi.md#crmfilesiddataget) | **GET** /crm/files/{id}/data | Get file details
*FilesApi* | [**crmFilesIdDelete**](docs/Api/FilesApi.md#crmfilesiddelete) | **DELETE** /crm/files/{id} | Delete a file
*FilesApi* | [**crmFilesIdGet**](docs/Api/FilesApi.md#crmfilesidget) | **GET** /crm/files/{id} | Download a file
*FilesApi* | [**crmFilesPost**](docs/Api/FilesApi.md#crmfilespost) | **POST** /crm/files | Upload a file
*InboundParsingApi* | [**getInboundEmailAttachment**](docs/Api/InboundParsingApi.md#getinboundemailattachment) | **GET** /inbound/attachments/{downloadToken} | Retrieve inbound attachment with download token.
*InboundParsingApi* | [**getInboundEmailEvents**](docs/Api/InboundParsingApi.md#getinboundemailevents) | **GET** /inbound/events | Get the list of all the events for the received emails.
*InboundParsingApi* | [**getInboundEmailEventsByUuid**](docs/Api/InboundParsingApi.md#getinboundemaileventsbyuuid) | **GET** /inbound/events/{uuid} | Fetch all events history for one particular received email.
*MasterAccountApi* | [**corporateGroupIdDelete**](docs/Api/MasterAccountApi.md#corporategroupiddelete) | **DELETE** /corporate/group/{id} | Delete a group
*MasterAccountApi* | [**corporateGroupIdGet**](docs/Api/MasterAccountApi.md#corporategroupidget) | **GET** /corporate/group/{id} | GET a group details
*MasterAccountApi* | [**corporateGroupIdPut**](docs/Api/MasterAccountApi.md#corporategroupidput) | **PUT** /corporate/group/{id} | Update a group of sub-accounts
*MasterAccountApi* | [**corporateGroupPost**](docs/Api/MasterAccountApi.md#corporategrouppost) | **POST** /corporate/group | Create a group of sub-accounts
*MasterAccountApi* | [**corporateGroupUnlinkGroupIdSubAccountsPut**](docs/Api/MasterAccountApi.md#corporategroupunlinkgroupidsubaccountsput) | **PUT** /corporate/group/unlink/{groupId}/subAccounts | Delete sub-account from group
*MasterAccountApi* | [**corporateIpGet**](docs/Api/MasterAccountApi.md#corporateipget) | **GET** /corporate/ip | List of all IPs
*MasterAccountApi* | [**corporateMasterAccountGet**](docs/Api/MasterAccountApi.md#corporatemasteraccountget) | **GET** /corporate/masterAccount | Get the details of requested master account
*MasterAccountApi* | [**corporateSsoTokenPost**](docs/Api/MasterAccountApi.md#corporatessotokenpost) | **POST** /corporate/ssoToken | Generate SSO token to access admin account
*MasterAccountApi* | [**corporateSubAccountGet**](docs/Api/MasterAccountApi.md#corporatesubaccountget) | **GET** /corporate/subAccount | Get the list of all the sub-accounts of the master account.
*MasterAccountApi* | [**corporateSubAccountIdApplicationsTogglePut**](docs/Api/MasterAccountApi.md#corporatesubaccountidapplicationstoggleput) | **PUT** /corporate/subAccount/{id}/applications/toggle | Enable/disable sub-account application(s)
*MasterAccountApi* | [**corporateSubAccountIdDelete**](docs/Api/MasterAccountApi.md#corporatesubaccountiddelete) | **DELETE** /corporate/subAccount/{id} | Delete a sub-account
*MasterAccountApi* | [**corporateSubAccountIdGet**](docs/Api/MasterAccountApi.md#corporatesubaccountidget) | **GET** /corporate/subAccount/{id} | Get sub-account details
*MasterAccountApi* | [**corporateSubAccountIdPlanPut**](docs/Api/MasterAccountApi.md#corporatesubaccountidplanput) | **PUT** /corporate/subAccount/{id}/plan | Update sub-account plan
*MasterAccountApi* | [**corporateSubAccountIpAssociatePost**](docs/Api/MasterAccountApi.md#corporatesubaccountipassociatepost) | **POST** /corporate/subAccount/ip/associate | Associate an IP to sub-accounts
*MasterAccountApi* | [**corporateSubAccountIpDissociatePut**](docs/Api/MasterAccountApi.md#corporatesubaccountipdissociateput) | **PUT** /corporate/subAccount/ip/dissociate | Dissociate an IP to sub-accounts
*MasterAccountApi* | [**corporateSubAccountKeyPost**](docs/Api/MasterAccountApi.md#corporatesubaccountkeypost) | **POST** /corporate/subAccount/key | Create an API key for a sub-account
*MasterAccountApi* | [**corporateSubAccountPost**](docs/Api/MasterAccountApi.md#corporatesubaccountpost) | **POST** /corporate/subAccount | Create a new sub-account under a master account.
*MasterAccountApi* | [**corporateSubAccountSsoTokenPost**](docs/Api/MasterAccountApi.md#corporatesubaccountssotokenpost) | **POST** /corporate/subAccount/ssoToken | Generate SSO token to access sub-account
*MasterAccountApi* | [**corporateUserEmailPermissionsPut**](docs/Api/MasterAccountApi.md#corporateuseremailpermissionsput) | **PUT** /corporate/user/{email}/permissions | Change admin user permissions
*MasterAccountApi* | [**corporateUserInvitationActionEmailPut**](docs/Api/MasterAccountApi.md#corporateuserinvitationactionemailput) | **PUT** /corporate/user/invitation/{action}/{email} | Resend / cancel admin user invitation
*MasterAccountApi* | [**corporateUserRevokeEmailDelete**](docs/Api/MasterAccountApi.md#corporateuserrevokeemaildelete) | **DELETE** /corporate/user/revoke/{email} | Revoke an admin user
*MasterAccountApi* | [**getAccountActivity_0**](docs/Api/MasterAccountApi.md#getaccountactivity_0) | **GET** /organization/activities | Get user activity logs
*MasterAccountApi* | [**getCorporateInvitedUsersList**](docs/Api/MasterAccountApi.md#getcorporateinviteduserslist) | **GET** /corporate/invited/users | Get the list of all admin users
*MasterAccountApi* | [**getCorporateUserPermission**](docs/Api/MasterAccountApi.md#getcorporateuserpermission) | **GET** /corporate/user/{email}/permissions | Check admin user permissions
*MasterAccountApi* | [**getSubAccountGroups**](docs/Api/MasterAccountApi.md#getsubaccountgroups) | **GET** /corporate/groups | Get the list of groups
*MasterAccountApi* | [**inviteAdminUser**](docs/Api/MasterAccountApi.md#inviteadminuser) | **POST** /corporate/user/invitation/send | Send invitation to an admin user
*NotesApi* | [**crmNotesGet**](docs/Api/NotesApi.md#crmnotesget) | **GET** /crm/notes | Get all notes
*NotesApi* | [**crmNotesIdDelete**](docs/Api/NotesApi.md#crmnotesiddelete) | **DELETE** /crm/notes/{id} | Delete a note
*NotesApi* | [**crmNotesIdGet**](docs/Api/NotesApi.md#crmnotesidget) | **GET** /crm/notes/{id} | Get a note
*NotesApi* | [**crmNotesIdPatch**](docs/Api/NotesApi.md#crmnotesidpatch) | **PATCH** /crm/notes/{id} | Update a note
*NotesApi* | [**crmNotesPost**](docs/Api/NotesApi.md#crmnotespost) | **POST** /crm/notes | Create a note
*PaymentsApi* | [**createPaymentRequest**](docs/Api/PaymentsApi.md#createpaymentrequest) | **POST** /payments/requests | Create a payment request
*PaymentsApi* | [**deletePaymentRequest**](docs/Api/PaymentsApi.md#deletepaymentrequest) | **DELETE** /payments/requests/{id} | Delete a payment request.
*PaymentsApi* | [**getPaymentRequest**](docs/Api/PaymentsApi.md#getpaymentrequest) | **GET** /payments/requests/{id} | Get payment request details
*ProcessApi* | [**getProcess**](docs/Api/ProcessApi.md#getprocess) | **GET** /processes/{processId} | Return the informations for a process
*ProcessApi* | [**getProcesses**](docs/Api/ProcessApi.md#getprocesses) | **GET** /processes | Return all the processes for your account
*ProgramApi* | [**createNewLP**](docs/Api/ProgramApi.md#createnewlp) | **POST** /loyalty/config/programs | Create loyalty program
*ProgramApi* | [**deleteContactMembers**](docs/Api/ProgramApi.md#deletecontactmembers) | **DELETE** /loyalty/config/programs/{loyaltyProgramId}/subscriptions-members | Delete subscription member
*ProgramApi* | [**deleteLoyaltyProgram**](docs/Api/ProgramApi.md#deleteloyaltyprogram) | **DELETE** /loyalty/config/programs/{loyaltyProgramId} | Delete Loyalty Program
*ProgramApi* | [**deleteSubscriptionMember**](docs/Api/ProgramApi.md#deletesubscriptionmember) | **DELETE** /loyalty/config/programs/{loyaltyProgramId}/contact/{contactId} | Delete subscription
*ProgramApi* | [**getLPList**](docs/Api/ProgramApi.md#getlplist) | **GET** /loyalty/config/programs | Get loyalty program list
*ProgramApi* | [**getLoyaltyProgramInfo**](docs/Api/ProgramApi.md#getloyaltyprograminfo) | **GET** /loyalty/config/programs/{loyaltyProgramId} | Get loyalty program Info
*ProgramApi* | [**getParameterSubscriptionInfo**](docs/Api/ProgramApi.md#getparametersubscriptioninfo) | **GET** /loyalty/config/programs/{loyaltyProgramId}/account-info | Get Subscription Data
*ProgramApi* | [**getSubscriptionMember**](docs/Api/ProgramApi.md#getsubscriptionmember) | **GET** /loyalty/config/programs/{loyaltyProgramId}/contact/{contactId} | Get subscription info
*ProgramApi* | [**partiallyUpdateLoyaltyProgram**](docs/Api/ProgramApi.md#partiallyupdateloyaltyprogram) | **PATCH** /loyalty/config/programs/{loyaltyProgramId} | Partially update loyalty program
*ProgramApi* | [**publishLoyaltyProgram**](docs/Api/ProgramApi.md#publishloyaltyprogram) | **POST** /loyalty/config/programs/{loyaltyProgramId}/publish | Publish loyalty program
*ProgramApi* | [**subscribeMemberToASubscription**](docs/Api/ProgramApi.md#subscribemembertoasubscription) | **POST** /loyalty/config/programs/{loyaltyProgramId}/subscriptions-members | Create subscription member
*ProgramApi* | [**subscribeToLoyaltyProgram**](docs/Api/ProgramApi.md#subscribetoloyaltyprogram) | **POST** /loyalty/config/programs/{loyaltyProgramId}/subscriptions | Create subscription
*ProgramApi* | [**updateLoyaltyProgram**](docs/Api/ProgramApi.md#updateloyaltyprogram) | **PUT** /loyalty/config/programs/{loyaltyProgramId} | Update loyalty program
*RewardsApi* | [**attributeReward**](docs/Api/RewardsApi.md#attributereward) | **POST** /loyalty/offer/programs/{loyaltyProgramId}/rewards/attribute | Attribute reward to a contact
*RewardsApi* | [**getOffersList**](docs/Api/RewardsApi.md#getofferslist) | **GET** /loyalty/offer/programs/{loyaltyProgramId}/offers | Get Reward list
*RewardsApi* | [**redeemReward**](docs/Api/RewardsApi.md#redeemreward) | **POST** /loyalty/offer/programs/{loyaltyProgramId}/rewards/redeem | Redeem reward
*RewardsApi* | [**revokeReward**](docs/Api/RewardsApi.md#revokereward) | **DELETE** /loyalty/offer/programs/{loyaltyProgramId}/rewards/revoke | Revoke reward
*RewardsApi* | [**validateReward**](docs/Api/RewardsApi.md#validatereward) | **POST** /loyalty/offer/programs/{loyaltyProgramId}/rewards/validate | Validates a voucher
*SMSCampaignsApi* | [**createSmsCampaign**](docs/Api/SMSCampaignsApi.md#createsmscampaign) | **POST** /smsCampaigns | Creates an SMS campaign
*SMSCampaignsApi* | [**deleteSmsCampaign**](docs/Api/SMSCampaignsApi.md#deletesmscampaign) | **DELETE** /smsCampaigns/{campaignId} | Delete an SMS campaign
*SMSCampaignsApi* | [**getSmsCampaign**](docs/Api/SMSCampaignsApi.md#getsmscampaign) | **GET** /smsCampaigns/{campaignId} | Get an SMS campaign
*SMSCampaignsApi* | [**getSmsCampaigns**](docs/Api/SMSCampaignsApi.md#getsmscampaigns) | **GET** /smsCampaigns | Returns the information for all your created SMS campaigns
*SMSCampaignsApi* | [**requestSmsRecipientExport**](docs/Api/SMSCampaignsApi.md#requestsmsrecipientexport) | **POST** /smsCampaigns/{campaignId}/exportRecipients | Export an SMS campaign&#39;s recipients
*SMSCampaignsApi* | [**sendSmsCampaignNow**](docs/Api/SMSCampaignsApi.md#sendsmscampaignnow) | **POST** /smsCampaigns/{campaignId}/sendNow | Send your SMS campaign immediately
*SMSCampaignsApi* | [**sendSmsReport**](docs/Api/SMSCampaignsApi.md#sendsmsreport) | **POST** /smsCampaigns/{campaignId}/sendReport | Send an SMS campaign&#39;s report
*SMSCampaignsApi* | [**sendTestSms**](docs/Api/SMSCampaignsApi.md#sendtestsms) | **POST** /smsCampaigns/{campaignId}/sendTest | Send a test SMS campaign
*SMSCampaignsApi* | [**updateSmsCampaign**](docs/Api/SMSCampaignsApi.md#updatesmscampaign) | **PUT** /smsCampaigns/{campaignId} | Update an SMS campaign
*SMSCampaignsApi* | [**updateSmsCampaignStatus**](docs/Api/SMSCampaignsApi.md#updatesmscampaignstatus) | **PUT** /smsCampaigns/{campaignId}/status | Update a campaign&#39;s status
*SendersApi* | [**createSender**](docs/Api/SendersApi.md#createsender) | **POST** /senders | Create a new sender
*SendersApi* | [**deleteSender**](docs/Api/SendersApi.md#deletesender) | **DELETE** /senders/{senderId} | Delete a sender
*SendersApi* | [**getIps**](docs/Api/SendersApi.md#getips) | **GET** /senders/ips | Get all the dedicated IPs for your account
*SendersApi* | [**getIpsFromSender**](docs/Api/SendersApi.md#getipsfromsender) | **GET** /senders/{senderId}/ips | Get all the dedicated IPs for a sender
*SendersApi* | [**getSenders**](docs/Api/SendersApi.md#getsenders) | **GET** /senders | Get the list of all your senders
*SendersApi* | [**updateSender**](docs/Api/SendersApi.md#updatesender) | **PUT** /senders/{senderId} | Update a sender
*SendersApi* | [**validateSenderByOTP**](docs/Api/SendersApi.md#validatesenderbyotp) | **PUT** /senders/{senderId}/validate | Validate Sender using OTP
*TasksApi* | [**crmTasksGet**](docs/Api/TasksApi.md#crmtasksget) | **GET** /crm/tasks | Get all tasks
*TasksApi* | [**crmTasksIdDelete**](docs/Api/TasksApi.md#crmtasksiddelete) | **DELETE** /crm/tasks/{id} | Delete a task
*TasksApi* | [**crmTasksIdGet**](docs/Api/TasksApi.md#crmtasksidget) | **GET** /crm/tasks/{id} | Get a task
*TasksApi* | [**crmTasksIdPatch**](docs/Api/TasksApi.md#crmtasksidpatch) | **PATCH** /crm/tasks/{id} | Update a task
*TasksApi* | [**crmTasksPost**](docs/Api/TasksApi.md#crmtaskspost) | **POST** /crm/tasks | Create a task
*TasksApi* | [**crmTasktypesGet**](docs/Api/TasksApi.md#crmtasktypesget) | **GET** /crm/tasktypes | Get all task types
*TierApi* | [**createTierForTierGroup**](docs/Api/TierApi.md#createtierfortiergroup) | **POST** /loyalty/tier/programs/{loyaltyProgramId}/tier-groups/{tierGroupId}/tiers | Create new tier
*TierApi* | [**createTierGroup**](docs/Api/TierApi.md#createtiergroup) | **POST** /loyalty/tier/programs/{loyaltyProgramId}/tier-groups | Create tier group
*TierApi* | [**deleteTierGroup**](docs/Api/TierApi.md#deletetiergroup) | **DELETE** /loyalty/tier/programs/{loyaltyProgramId}/tier-groups/{tierGroupId} | Delete tier group
*TierApi* | [**getListOfTierGroups**](docs/Api/TierApi.md#getlistoftiergroups) | **GET** /loyalty/tier/programs/{loyaltyProgramId}/tier-groups | Get tier group page
*TierApi* | [**getLoyaltyProgramTier**](docs/Api/TierApi.md#getloyaltyprogramtier) | **GET** /loyalty/tier/programs/{loyaltyProgramId}/tiers | Get tier page
*TierApi* | [**getTierGroup**](docs/Api/TierApi.md#gettiergroup) | **GET** /loyalty/tier/programs/{loyaltyProgramId}/tier-groups/{tierGroupId} | Get tier group by Id
*TierApi* | [**loyaltyTierProgramsLoyaltyProgramIdContactsContactIdTiersTierIdPost**](docs/Api/TierApi.md#loyaltytierprogramsloyaltyprogramidcontactscontactidtierstieridpost) | **POST** /loyalty/tier/programs/{loyaltyProgramId}/contacts/{contactId}/tiers/{tierId} | Add subscription to a tier
*TierApi* | [**loyaltyTierProgramsLoyaltyProgramIdTiersTierIdDelete**](docs/Api/TierApi.md#loyaltytierprogramsloyaltyprogramidtierstieriddelete) | **DELETE** /loyalty/tier/programs/{loyaltyProgramId}/tiers/{tierId} | Delete tier
*TierApi* | [**loyaltyTierProgramsLoyaltyProgramIdTiersTierIdPut**](docs/Api/TierApi.md#loyaltytierprogramsloyaltyprogramidtierstieridput) | **PUT** /loyalty/tier/programs/{loyaltyProgramId}/tiers/{tierId} | Update tier
*TierApi* | [**updateTierGroup**](docs/Api/TierApi.md#updatetiergroup) | **PUT** /loyalty/tier/programs/{loyaltyProgramId}/tier-groups/{tierGroupId} | Update tier group
*TransactionalEmailsApi* | [**blockNewDomain**](docs/Api/TransactionalEmailsApi.md#blocknewdomain) | **POST** /smtp/blockedDomains | Add a new domain to the list of blocked domains
*TransactionalEmailsApi* | [**createSmtpTemplate**](docs/Api/TransactionalEmailsApi.md#createsmtptemplate) | **POST** /smtp/templates | Create an email template
*TransactionalEmailsApi* | [**deleteBlockedDomain**](docs/Api/TransactionalEmailsApi.md#deleteblockeddomain) | **DELETE** /smtp/blockedDomains/{domain} | Unblock an existing domain from the list of blocked domains
*TransactionalEmailsApi* | [**deleteHardbounces**](docs/Api/TransactionalEmailsApi.md#deletehardbounces) | **POST** /smtp/deleteHardbounces | Delete hardbounces
*TransactionalEmailsApi* | [**deleteScheduledEmailById**](docs/Api/TransactionalEmailsApi.md#deletescheduledemailbyid) | **DELETE** /smtp/email/{identifier} | Delete scheduled emails by batchId or messageId
*TransactionalEmailsApi* | [**deleteSmtpTemplate**](docs/Api/TransactionalEmailsApi.md#deletesmtptemplate) | **DELETE** /smtp/templates/{templateId} | Delete an inactive email template
*TransactionalEmailsApi* | [**getAggregatedSmtpReport**](docs/Api/TransactionalEmailsApi.md#getaggregatedsmtpreport) | **GET** /smtp/statistics/aggregatedReport | Get your transactional email activity aggregated over a period of time
*TransactionalEmailsApi* | [**getBlockedDomains**](docs/Api/TransactionalEmailsApi.md#getblockeddomains) | **GET** /smtp/blockedDomains | Get the list of blocked domains
*TransactionalEmailsApi* | [**getEmailEventReport**](docs/Api/TransactionalEmailsApi.md#getemaileventreport) | **GET** /smtp/statistics/events | Get all your transactional email activity (unaggregated events)
*TransactionalEmailsApi* | [**getScheduledEmailById**](docs/Api/TransactionalEmailsApi.md#getscheduledemailbyid) | **GET** /smtp/emailStatus/{identifier} | Fetch scheduled emails by batchId or messageId
*TransactionalEmailsApi* | [**getSmtpReport**](docs/Api/TransactionalEmailsApi.md#getsmtpreport) | **GET** /smtp/statistics/reports | Get your transactional email activity aggregated per day
*TransactionalEmailsApi* | [**getSmtpTemplate**](docs/Api/TransactionalEmailsApi.md#getsmtptemplate) | **GET** /smtp/templates/{templateId} | Returns the template information
*TransactionalEmailsApi* | [**getSmtpTemplates**](docs/Api/TransactionalEmailsApi.md#getsmtptemplates) | **GET** /smtp/templates | Get the list of email templates
*TransactionalEmailsApi* | [**getTransacBlockedContacts**](docs/Api/TransactionalEmailsApi.md#gettransacblockedcontacts) | **GET** /smtp/blockedContacts | Get the list of blocked or unsubscribed transactional contacts
*TransactionalEmailsApi* | [**getTransacEmailContent**](docs/Api/TransactionalEmailsApi.md#gettransacemailcontent) | **GET** /smtp/emails/{uuid} | Get the personalized content of a sent transactional email
*TransactionalEmailsApi* | [**getTransacEmailsList**](docs/Api/TransactionalEmailsApi.md#gettransacemailslist) | **GET** /smtp/emails | Get the list of transactional emails on the basis of allowed filters
*TransactionalEmailsApi* | [**sendTestTemplate**](docs/Api/TransactionalEmailsApi.md#sendtesttemplate) | **POST** /smtp/templates/{templateId}/sendTest | Send a template to your test list
*TransactionalEmailsApi* | [**sendTransacEmail**](docs/Api/TransactionalEmailsApi.md#sendtransacemail) | **POST** /smtp/email | Send a transactional email
*TransactionalEmailsApi* | [**smtpBlockedContactsEmailDelete**](docs/Api/TransactionalEmailsApi.md#smtpblockedcontactsemaildelete) | **DELETE** /smtp/blockedContacts/{email} | Unblock or resubscribe a transactional contact
*TransactionalEmailsApi* | [**smtpLogIdentifierDelete**](docs/Api/TransactionalEmailsApi.md#smtplogidentifierdelete) | **DELETE** /smtp/log/{identifier} | Delete an SMTP transactional log
*TransactionalEmailsApi* | [**updateSmtpTemplate**](docs/Api/TransactionalEmailsApi.md#updatesmtptemplate) | **PUT** /smtp/templates/{templateId} | Update an email template
*TransactionalSMSApi* | [**getSmsEvents**](docs/Api/TransactionalSMSApi.md#getsmsevents) | **GET** /transactionalSMS/statistics/events | Get all your SMS activity (unaggregated events)
*TransactionalSMSApi* | [**getTransacAggregatedSmsReport**](docs/Api/TransactionalSMSApi.md#gettransacaggregatedsmsreport) | **GET** /transactionalSMS/statistics/aggregatedReport | Get your SMS activity aggregated over a period of time
*TransactionalSMSApi* | [**getTransacSmsReport**](docs/Api/TransactionalSMSApi.md#gettransacsmsreport) | **GET** /transactionalSMS/statistics/reports | Get your SMS activity aggregated per day
*TransactionalSMSApi* | [**sendTransacSms**](docs/Api/TransactionalSMSApi.md#sendtransacsms) | **POST** /transactionalSMS/sms | Send SMS message to a mobile number
*TransactionalWhatsAppApi* | [**getWhatsappEventReport**](docs/Api/TransactionalWhatsAppApi.md#getwhatsappeventreport) | **GET** /whatsapp/statistics/events | Get all your WhatsApp activity (unaggregated events)
*TransactionalWhatsAppApi* | [**sendWhatsappMessage**](docs/Api/TransactionalWhatsAppApi.md#sendwhatsappmessage) | **POST** /whatsapp/sendMessage | Send a WhatsApp message
*UserApi* | [**editUserPermission**](docs/Api/UserApi.md#edituserpermission) | **POST** /organization/user/update/permissions | Update permission for a user
*UserApi* | [**getInvitedUsersList**](docs/Api/UserApi.md#getinviteduserslist) | **GET** /organization/invited/users | Get the list of all your users
*UserApi* | [**getUserPermission**](docs/Api/UserApi.md#getuserpermission) | **GET** /organization/user/{email}/permissions | Check user permission
*UserApi* | [**inviteuser**](docs/Api/UserApi.md#inviteuser) | **POST** /organization/user/invitation/send | Send invitation to user
*UserApi* | [**putRevokeUserPermission**](docs/Api/UserApi.md#putrevokeuserpermission) | **PUT** /organization/user/invitation/revoke/{email} | Revoke user permission
*UserApi* | [**putresendcancelinvitation**](docs/Api/UserApi.md#putresendcancelinvitation) | **PUT** /organization/user/invitation/{action}/{email} | Resend / Cancel invitation
*WebhooksApi* | [**createWebhook**](docs/Api/WebhooksApi.md#createwebhook) | **POST** /webhooks | Create a webhook
*WebhooksApi* | [**deleteWebhook**](docs/Api/WebhooksApi.md#deletewebhook) | **DELETE** /webhooks/{webhookId} | Delete a webhook
*WebhooksApi* | [**exportWebhooksHistory**](docs/Api/WebhooksApi.md#exportwebhookshistory) | **POST** /webhooks/export | Export all webhook events
*WebhooksApi* | [**getWebhook**](docs/Api/WebhooksApi.md#getwebhook) | **GET** /webhooks/{webhookId} | Get a webhook details
*WebhooksApi* | [**getWebhooks**](docs/Api/WebhooksApi.md#getwebhooks) | **GET** /webhooks | Get all webhooks
*WebhooksApi* | [**updateWebhook**](docs/Api/WebhooksApi.md#updatewebhook) | **PUT** /webhooks/{webhookId} | Update a webhook
*WhatsAppCampaignsApi* | [**createWhatsAppCampaign**](docs/Api/WhatsAppCampaignsApi.md#createwhatsappcampaign) | **POST** /whatsappCampaigns | Create and Send a WhatsApp campaign
*WhatsAppCampaignsApi* | [**createWhatsAppTemplate**](docs/Api/WhatsAppCampaignsApi.md#createwhatsapptemplate) | **POST** /whatsappCampaigns/template | Create a WhatsApp template
*WhatsAppCampaignsApi* | [**deleteWhatsAppCampaign**](docs/Api/WhatsAppCampaignsApi.md#deletewhatsappcampaign) | **DELETE** /whatsappCampaigns/{campaignId} | Delete a WhatsApp campaign
*WhatsAppCampaignsApi* | [**getWhatsAppCampaign**](docs/Api/WhatsAppCampaignsApi.md#getwhatsappcampaign) | **GET** /whatsappCampaigns/{campaignId} | Get a WhatsApp campaign
*WhatsAppCampaignsApi* | [**getWhatsAppCampaigns**](docs/Api/WhatsAppCampaignsApi.md#getwhatsappcampaigns) | **GET** /whatsappCampaigns | Return all your created WhatsApp campaigns
*WhatsAppCampaignsApi* | [**getWhatsAppConfig**](docs/Api/WhatsAppCampaignsApi.md#getwhatsappconfig) | **GET** /whatsappCampaigns/config | Get your WhatsApp API account information
*WhatsAppCampaignsApi* | [**getWhatsAppTemplates**](docs/Api/WhatsAppCampaignsApi.md#getwhatsapptemplates) | **GET** /whatsappCampaigns/template-list | Return all your created WhatsApp templates
*WhatsAppCampaignsApi* | [**sendWhatsAppTemplateApproval**](docs/Api/WhatsAppCampaignsApi.md#sendwhatsapptemplateapproval) | **POST** /whatsappCampaigns/template/approval/{templateId} | Send your WhatsApp template for approval
*WhatsAppCampaignsApi* | [**updateWhatsAppCampaign**](docs/Api/WhatsAppCampaignsApi.md#updatewhatsappcampaign) | **PUT** /whatsappCampaigns/{campaignId} | Update a WhatsApp campaign

## Models

- [AbTestCampaignResult](docs/Model/AbTestCampaignResult.md)
- [AbTestCampaignResultClickedLinks](docs/Model/AbTestCampaignResultClickedLinks.md)
- [AbTestCampaignResultStatistics](docs/Model/AbTestCampaignResultStatistics.md)
- [AbTestVersionClicksInner](docs/Model/AbTestVersionClicksInner.md)
- [AbTestVersionStats](docs/Model/AbTestVersionStats.md)
- [AddContactToListByEmails](docs/Model/AddContactToListByEmails.md)
- [AddContactToListByExtIDs](docs/Model/AddContactToListByExtIDs.md)
- [AddContactToListByIDs](docs/Model/AddContactToListByIDs.md)
- [AddContactToListRequest](docs/Model/AddContactToListRequest.md)
- [AttributeRewardPayload](docs/Model/AttributeRewardPayload.md)
- [AttributedRewardFailedConditionErrorResponse](docs/Model/AttributedRewardFailedConditionErrorResponse.md)
- [AuthenticateDomainModel](docs/Model/AuthenticateDomainModel.md)
- [BadRequestPayload](docs/Model/BadRequestPayload.md)
- [Balance](docs/Model/Balance.md)
- [BalanceBalancesInner](docs/Model/BalanceBalancesInner.md)
- [BalanceDefinition](docs/Model/BalanceDefinition.md)
- [BalanceDefinitionIdDoesNotExist](docs/Model/BalanceDefinitionIdDoesNotExist.md)
- [BalanceDefinitionPage](docs/Model/BalanceDefinitionPage.md)
- [BalanceLimit](docs/Model/BalanceLimit.md)
- [BalanceLimitPayload](docs/Model/BalanceLimitPayload.md)
- [BalancePage](docs/Model/BalancePage.md)
- [BlockDomain](docs/Model/BlockDomain.md)
- [CancelledTransaction](docs/Model/CancelledTransaction.md)
- [Cart](docs/Model/Cart.md)
- [CompaniesIdPatchRequest](docs/Model/CompaniesIdPatchRequest.md)
- [CompaniesImportPost200Response](docs/Model/CompaniesImportPost200Response.md)
- [CompaniesImportPost400Response](docs/Model/CompaniesImportPost400Response.md)
- [CompaniesLinkUnlinkIdPatchRequest](docs/Model/CompaniesLinkUnlinkIdPatchRequest.md)
- [CompaniesList](docs/Model/CompaniesList.md)
- [CompaniesPost200Response](docs/Model/CompaniesPost200Response.md)
- [CompaniesPostRequest](docs/Model/CompaniesPostRequest.md)
- [Company](docs/Model/Company.md)
- [CompanyAttributesInner](docs/Model/CompanyAttributesInner.md)
- [CompleteTransactionPayload](docs/Model/CompleteTransactionPayload.md)
- [CompletedTransaction](docs/Model/CompletedTransaction.md)
- [ComponentItems](docs/Model/ComponentItems.md)
- [Configuration](docs/Model/Configuration.md)
- [ContactBalances](docs/Model/ContactBalances.md)
- [ContactBalancesBalancesInner](docs/Model/ContactBalancesBalancesInner.md)
- [ContactErrorModel](docs/Model/ContactErrorModel.md)
- [ContactIdInvalidResponse](docs/Model/ContactIdInvalidResponse.md)
- [ConversationsAgentOnlinePingPostRequest](docs/Model/ConversationsAgentOnlinePingPostRequest.md)
- [ConversationsMessage](docs/Model/ConversationsMessage.md)
- [ConversationsMessageFile](docs/Model/ConversationsMessageFile.md)
- [ConversationsMessageFileImageInfo](docs/Model/ConversationsMessageFileImageInfo.md)
- [ConversationsMessagesIdPutRequest](docs/Model/ConversationsMessagesIdPutRequest.md)
- [ConversationsMessagesPostRequest](docs/Model/ConversationsMessagesPostRequest.md)
- [ConversationsPushedMessagesPostRequest](docs/Model/ConversationsPushedMessagesPostRequest.md)
- [ConversionSourceMetrics](docs/Model/ConversionSourceMetrics.md)
- [ConversionSourceProduct](docs/Model/ConversionSourceProduct.md)
- [CorporateGroupDetailsResponse](docs/Model/CorporateGroupDetailsResponse.md)
- [CorporateGroupDetailsResponseGroup](docs/Model/CorporateGroupDetailsResponseGroup.md)
- [CorporateGroupDetailsResponseSubAccountsInner](docs/Model/CorporateGroupDetailsResponseSubAccountsInner.md)
- [CorporateGroupDetailsResponseUsersInner](docs/Model/CorporateGroupDetailsResponseUsersInner.md)
- [CorporateGroupIdPutRequest](docs/Model/CorporateGroupIdPutRequest.md)
- [CorporateGroupPost201Response](docs/Model/CorporateGroupPost201Response.md)
- [CorporateGroupPostRequest](docs/Model/CorporateGroupPostRequest.md)
- [CorporateGroupUnlinkGroupIdSubAccountsPutRequest](docs/Model/CorporateGroupUnlinkGroupIdSubAccountsPutRequest.md)
- [CorporateIpGet200ResponseInner](docs/Model/CorporateIpGet200ResponseInner.md)
- [CorporateSsoTokenPostRequest](docs/Model/CorporateSsoTokenPostRequest.md)
- [CorporateSubAccountIpAssociatePostRequest](docs/Model/CorporateSubAccountIpAssociatePostRequest.md)
- [CorporateSubAccountIpDissociatePutRequest](docs/Model/CorporateSubAccountIpDissociatePutRequest.md)
- [CorporateSubAccountKeyPostRequest](docs/Model/CorporateSubAccountKeyPostRequest.md)
- [CorporateSubAccountSsoTokenPostRequest](docs/Model/CorporateSubAccountSsoTokenPostRequest.md)
- [CorporateUserEmailPermissionsPutRequest](docs/Model/CorporateUserEmailPermissionsPutRequest.md)
- [CorporateUserEmailPermissionsPutRequestPrivilegesInner](docs/Model/CorporateUserEmailPermissionsPutRequestPrivilegesInner.md)
- [CorporateUserInvitationActionEmailPut200Response](docs/Model/CorporateUserInvitationActionEmailPut200Response.md)
- [CreateApiKeyResponse](docs/Model/CreateApiKeyResponse.md)
- [CreateAttribute](docs/Model/CreateAttribute.md)
- [CreateAttributeEnumerationInner](docs/Model/CreateAttributeEnumerationInner.md)
- [CreateBalanceDefinitionPayload](docs/Model/CreateBalanceDefinitionPayload.md)
- [CreateCategoryModel](docs/Model/CreateCategoryModel.md)
- [CreateContact](docs/Model/CreateContact.md)
- [CreateCouponCollection201Response](docs/Model/CreateCouponCollection201Response.md)
- [CreateCouponCollectionRequest](docs/Model/CreateCouponCollectionRequest.md)
- [CreateCouponsRequest](docs/Model/CreateCouponsRequest.md)
- [CreateDoiContact](docs/Model/CreateDoiContact.md)
- [CreateDoiContactAttributesValue](docs/Model/CreateDoiContactAttributesValue.md)
- [CreateDomain](docs/Model/CreateDomain.md)
- [CreateDomainModel](docs/Model/CreateDomainModel.md)
- [CreateDomainModelDnsRecords](docs/Model/CreateDomainModelDnsRecords.md)
- [CreateDomainModelDnsRecordsDkimRecord](docs/Model/CreateDomainModelDnsRecordsDkimRecord.md)
- [CreateEmailCampaign](docs/Model/CreateEmailCampaign.md)
- [CreateEmailCampaignEmailExpirationDate](docs/Model/CreateEmailCampaignEmailExpirationDate.md)
- [CreateEmailCampaignRecipients](docs/Model/CreateEmailCampaignRecipients.md)
- [CreateEmailCampaignSender](docs/Model/CreateEmailCampaignSender.md)
- [CreateExternalFeed](docs/Model/CreateExternalFeed.md)
- [CreateExternalFeed201Response](docs/Model/CreateExternalFeed201Response.md)
- [CreateList](docs/Model/CreateList.md)
- [CreateLoyaltyProgramPayload](docs/Model/CreateLoyaltyProgramPayload.md)
- [CreateModel](docs/Model/CreateModel.md)
- [CreateOrderPayload](docs/Model/CreateOrderPayload.md)
- [CreatePaymentRequest](docs/Model/CreatePaymentRequest.md)
- [CreatePaymentResponse](docs/Model/CreatePaymentResponse.md)
- [CreateProductModel](docs/Model/CreateProductModel.md)
- [CreateSender](docs/Model/CreateSender.md)
- [CreateSenderIpsInner](docs/Model/CreateSenderIpsInner.md)
- [CreateSenderModel](docs/Model/CreateSenderModel.md)
- [CreateSmsCampaign](docs/Model/CreateSmsCampaign.md)
- [CreateSmsCampaignRecipients](docs/Model/CreateSmsCampaignRecipients.md)
- [CreateSmtpEmail](docs/Model/CreateSmtpEmail.md)
- [CreateSmtpTemplate](docs/Model/CreateSmtpTemplate.md)
- [CreateSmtpTemplateSender](docs/Model/CreateSmtpTemplateSender.md)
- [CreateSubAccount](docs/Model/CreateSubAccount.md)
- [CreateSubAccountResponse](docs/Model/CreateSubAccountResponse.md)
- [CreateSubscriptionMemberPayload](docs/Model/CreateSubscriptionMemberPayload.md)
- [CreateSubscriptionMemberResponse](docs/Model/CreateSubscriptionMemberResponse.md)
- [CreateSubscriptionPayload](docs/Model/CreateSubscriptionPayload.md)
- [CreateSubscriptionResponse](docs/Model/CreateSubscriptionResponse.md)
- [CreateTierGroupRequest](docs/Model/CreateTierGroupRequest.md)
- [CreateTransactionPayload](docs/Model/CreateTransactionPayload.md)
- [CreateUpdateBatchCategory](docs/Model/CreateUpdateBatchCategory.md)
- [CreateUpdateBatchCategoryModel](docs/Model/CreateUpdateBatchCategoryModel.md)
- [CreateUpdateBatchProducts](docs/Model/CreateUpdateBatchProducts.md)
- [CreateUpdateBatchProductsModel](docs/Model/CreateUpdateBatchProductsModel.md)
- [CreateUpdateCategories](docs/Model/CreateUpdateCategories.md)
- [CreateUpdateCategory](docs/Model/CreateUpdateCategory.md)
- [CreateUpdateContactModel](docs/Model/CreateUpdateContactModel.md)
- [CreateUpdateFolder](docs/Model/CreateUpdateFolder.md)
- [CreateUpdateProduct](docs/Model/CreateUpdateProduct.md)
- [CreateUpdateProducts](docs/Model/CreateUpdateProducts.md)
- [CreateWebhook](docs/Model/CreateWebhook.md)
- [CreateWhatsAppCampaign](docs/Model/CreateWhatsAppCampaign.md)
- [CreateWhatsAppCampaignRecipients](docs/Model/CreateWhatsAppCampaignRecipients.md)
- [CreateWhatsAppTemplate](docs/Model/CreateWhatsAppTemplate.md)
- [CreatedBatchId](docs/Model/CreatedBatchId.md)
- [CreatedProcessId](docs/Model/CreatedProcessId.md)
- [CrmDealsIdPatchRequest](docs/Model/CrmDealsIdPatchRequest.md)
- [CrmDealsLinkUnlinkIdPatchRequest](docs/Model/CrmDealsLinkUnlinkIdPatchRequest.md)
- [CrmDealsPost201Response](docs/Model/CrmDealsPost201Response.md)
- [CrmDealsPostRequest](docs/Model/CrmDealsPostRequest.md)
- [CrmTasksIdPatchRequest](docs/Model/CrmTasksIdPatchRequest.md)
- [CrmTasksPost201Response](docs/Model/CrmTasksPost201Response.md)
- [CrmTasksPostRequest](docs/Model/CrmTasksPostRequest.md)
- [Deal](docs/Model/Deal.md)
- [DealAttributesInner](docs/Model/DealAttributesInner.md)
- [DealsList](docs/Model/DealsList.md)
- [DeleteHardbounces](docs/Model/DeleteHardbounces.md)
- [DeleteSubscriptionMemberPayload](docs/Model/DeleteSubscriptionMemberPayload.md)
- [EcommerceAttributionMetricsConversionSourceConversionSourceIdGet200Response](docs/Model/EcommerceAttributionMetricsConversionSourceConversionSourceIdGet200Response.md)
- [EcommerceAttributionMetricsGet200Response](docs/Model/EcommerceAttributionMetricsGet200Response.md)
- [EcommerceAttributionMetricsGet200ResponseTotals](docs/Model/EcommerceAttributionMetricsGet200ResponseTotals.md)
- [EcommerceAttributionProductsConversionSourceConversionSourceIdGet200Response](docs/Model/EcommerceAttributionProductsConversionSourceConversionSourceIdGet200Response.md)
- [EcommerceConfigDisplayCurrencyGet200Response](docs/Model/EcommerceConfigDisplayCurrencyGet200Response.md)
- [EmailExportRecipients](docs/Model/EmailExportRecipients.md)
- [ErrorModel](docs/Model/ErrorModel.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [Event](docs/Model/Event.md)
- [EventContactPropertiesValue](docs/Model/EventContactPropertiesValue.md)
- [EventEventPropertiesValue](docs/Model/EventEventPropertiesValue.md)
- [EventIdentifiers](docs/Model/EventIdentifiers.md)
- [ExportWebhooksHistory](docs/Model/ExportWebhooksHistory.md)
- [ExportWebhooksHistoryRequest](docs/Model/ExportWebhooksHistoryRequest.md)
- [FileData](docs/Model/FileData.md)
- [FileDownloadableLink](docs/Model/FileDownloadableLink.md)
- [GetAccount](docs/Model/GetAccount.md)
- [GetAccountActivity](docs/Model/GetAccountActivity.md)
- [GetAccountActivityLogsInner](docs/Model/GetAccountActivityLogsInner.md)
- [GetAccountAllOfMarketingAutomation](docs/Model/GetAccountAllOfMarketingAutomation.md)
- [GetAccountAllOfPlan](docs/Model/GetAccountAllOfPlan.md)
- [GetAccountAllOfRelay](docs/Model/GetAccountAllOfRelay.md)
- [GetAccountAllOfRelayData](docs/Model/GetAccountAllOfRelayData.md)
- [GetAggregatedReport](docs/Model/GetAggregatedReport.md)
- [GetAllExternalFeeds](docs/Model/GetAllExternalFeeds.md)
- [GetAllExternalFeedsFeedsInner](docs/Model/GetAllExternalFeedsFeedsInner.md)
- [GetAttributes](docs/Model/GetAttributes.md)
- [GetAttributesAttributesInner](docs/Model/GetAttributesAttributesInner.md)
- [GetAttributesAttributesInnerEnumerationInner](docs/Model/GetAttributesAttributesInnerEnumerationInner.md)
- [GetBlockedDomains](docs/Model/GetBlockedDomains.md)
- [GetCampaignOverview](docs/Model/GetCampaignOverview.md)
- [GetCampaignRecipients](docs/Model/GetCampaignRecipients.md)
- [GetCampaignStats](docs/Model/GetCampaignStats.md)
- [GetCategories](docs/Model/GetCategories.md)
- [GetCategoryDetails](docs/Model/GetCategoryDetails.md)
- [GetClient](docs/Model/GetClient.md)
- [GetContactCampaignStats](docs/Model/GetContactCampaignStats.md)
- [GetContactCampaignStatsClickedInner](docs/Model/GetContactCampaignStatsClickedInner.md)
- [GetContactCampaignStatsOpenedInner](docs/Model/GetContactCampaignStatsOpenedInner.md)
- [GetContactCampaignStatsTransacAttributesInner](docs/Model/GetContactCampaignStatsTransacAttributesInner.md)
- [GetContactCampaignStatsUnsubscriptions](docs/Model/GetContactCampaignStatsUnsubscriptions.md)
- [GetContactDetails](docs/Model/GetContactDetails.md)
- [GetContactInfoIdentifierParameter](docs/Model/GetContactInfoIdentifierParameter.md)
- [GetContacts](docs/Model/GetContacts.md)
- [GetCorporateInvitedUsersList](docs/Model/GetCorporateInvitedUsersList.md)
- [GetCorporateInvitedUsersListUsersInner](docs/Model/GetCorporateInvitedUsersListUsersInner.md)
- [GetCorporateInvitedUsersListUsersInnerFeatureAccess](docs/Model/GetCorporateInvitedUsersListUsersInnerFeatureAccess.md)
- [GetCorporateInvitedUsersListUsersInnerGroups](docs/Model/GetCorporateInvitedUsersListUsersInnerGroups.md)
- [GetCorporateUserPermission](docs/Model/GetCorporateUserPermission.md)
- [GetCorporateUserPermissionFeatureAccess](docs/Model/GetCorporateUserPermissionFeatureAccess.md)
- [GetCorporateUserPermissionGroupsInner](docs/Model/GetCorporateUserPermissionGroupsInner.md)
- [GetCouponCollection](docs/Model/GetCouponCollection.md)
- [GetDeviceBrowserStats](docs/Model/GetDeviceBrowserStats.md)
- [GetDomainConfigurationModel](docs/Model/GetDomainConfigurationModel.md)
- [GetDomainsList](docs/Model/GetDomainsList.md)
- [GetDomainsListDomainsInner](docs/Model/GetDomainsListDomainsInner.md)
- [GetEmailCampaign](docs/Model/GetEmailCampaign.md)
- [GetEmailCampaigns](docs/Model/GetEmailCampaigns.md)
- [GetEmailCampaignsCampaignsInner](docs/Model/GetEmailCampaignsCampaignsInner.md)
- [GetEmailEventReport](docs/Model/GetEmailEventReport.md)
- [GetEmailEventReportEventsInner](docs/Model/GetEmailEventReportEventsInner.md)
- [GetExtendedCampaignOverview](docs/Model/GetExtendedCampaignOverview.md)
- [GetExtendedCampaignOverviewAllOfSender](docs/Model/GetExtendedCampaignOverviewAllOfSender.md)
- [GetExtendedCampaignStats](docs/Model/GetExtendedCampaignStats.md)
- [GetExtendedClient](docs/Model/GetExtendedClient.md)
- [GetExtendedClientAllOfAddress](docs/Model/GetExtendedClientAllOfAddress.md)
- [GetExtendedContactDetails](docs/Model/GetExtendedContactDetails.md)
- [GetExtendedContactDetailsAllOfStatistics](docs/Model/GetExtendedContactDetailsAllOfStatistics.md)
- [GetExtendedContactDetailsAllOfStatisticsClicked](docs/Model/GetExtendedContactDetailsAllOfStatisticsClicked.md)
- [GetExtendedContactDetailsAllOfStatisticsLinks](docs/Model/GetExtendedContactDetailsAllOfStatisticsLinks.md)
- [GetExtendedContactDetailsAllOfStatisticsMessagesSent](docs/Model/GetExtendedContactDetailsAllOfStatisticsMessagesSent.md)
- [GetExtendedContactDetailsAllOfStatisticsOpened](docs/Model/GetExtendedContactDetailsAllOfStatisticsOpened.md)
- [GetExtendedContactDetailsAllOfStatisticsUnsubscriptions](docs/Model/GetExtendedContactDetailsAllOfStatisticsUnsubscriptions.md)
- [GetExtendedContactDetailsAllOfStatisticsUnsubscriptionsAdminUnsubscription](docs/Model/GetExtendedContactDetailsAllOfStatisticsUnsubscriptionsAdminUnsubscription.md)
- [GetExtendedContactDetailsAllOfStatisticsUnsubscriptionsUserUnsubscription](docs/Model/GetExtendedContactDetailsAllOfStatisticsUnsubscriptionsUserUnsubscription.md)
- [GetExtendedList](docs/Model/GetExtendedList.md)
- [GetExtendedListAllOfCampaignStats](docs/Model/GetExtendedListAllOfCampaignStats.md)
- [GetExternalFeedByUUID](docs/Model/GetExternalFeedByUUID.md)
- [GetExternalFeedByUUIDHeadersInner](docs/Model/GetExternalFeedByUUIDHeadersInner.md)
- [GetFolder](docs/Model/GetFolder.md)
- [GetFolderLists](docs/Model/GetFolderLists.md)
- [GetFolders](docs/Model/GetFolders.md)
- [GetInboundEmailEvents](docs/Model/GetInboundEmailEvents.md)
- [GetInboundEmailEventsByUuid](docs/Model/GetInboundEmailEventsByUuid.md)
- [GetInboundEmailEventsByUuidAttachmentsInner](docs/Model/GetInboundEmailEventsByUuidAttachmentsInner.md)
- [GetInboundEmailEventsByUuidLogsInner](docs/Model/GetInboundEmailEventsByUuidLogsInner.md)
- [GetInboundEmailEventsEventsInner](docs/Model/GetInboundEmailEventsEventsInner.md)
- [GetInvitedUsersList](docs/Model/GetInvitedUsersList.md)
- [GetInvitedUsersListUsersInner](docs/Model/GetInvitedUsersListUsersInner.md)
- [GetInvitedUsersListUsersInnerFeatureAccess](docs/Model/GetInvitedUsersListUsersInnerFeatureAccess.md)
- [GetIp](docs/Model/GetIp.md)
- [GetIpFromSender](docs/Model/GetIpFromSender.md)
- [GetIps](docs/Model/GetIps.md)
- [GetIpsFromSender](docs/Model/GetIpsFromSender.md)
- [GetList](docs/Model/GetList.md)
- [GetLists](docs/Model/GetLists.md)
- [GetListsListsInner](docs/Model/GetListsListsInner.md)
- [GetPaymentRequest](docs/Model/GetPaymentRequest.md)
- [GetProcess](docs/Model/GetProcess.md)
- [GetProcesses](docs/Model/GetProcesses.md)
- [GetProductDetails](docs/Model/GetProductDetails.md)
- [GetProducts](docs/Model/GetProducts.md)
- [GetReports](docs/Model/GetReports.md)
- [GetReportsReportsInner](docs/Model/GetReportsReportsInner.md)
- [GetScheduledEmailByBatchId](docs/Model/GetScheduledEmailByBatchId.md)
- [GetScheduledEmailByBatchIdBatchesInner](docs/Model/GetScheduledEmailByBatchIdBatchesInner.md)
- [GetScheduledEmailById200Response](docs/Model/GetScheduledEmailById200Response.md)
- [GetScheduledEmailByMessageId](docs/Model/GetScheduledEmailByMessageId.md)
- [GetSegments](docs/Model/GetSegments.md)
- [GetSendersList](docs/Model/GetSendersList.md)
- [GetSendersListSendersInner](docs/Model/GetSendersListSendersInner.md)
- [GetSendersListSendersInnerIpsInner](docs/Model/GetSendersListSendersInnerIpsInner.md)
- [GetSharedTemplateUrl](docs/Model/GetSharedTemplateUrl.md)
- [GetSmsCampaign](docs/Model/GetSmsCampaign.md)
- [GetSmsCampaignOverview](docs/Model/GetSmsCampaignOverview.md)
- [GetSmsCampaignStats](docs/Model/GetSmsCampaignStats.md)
- [GetSmsCampaigns](docs/Model/GetSmsCampaigns.md)
- [GetSmsCampaignsCampaignsInner](docs/Model/GetSmsCampaignsCampaignsInner.md)
- [GetSmsEventReport](docs/Model/GetSmsEventReport.md)
- [GetSmsEventReportEventsInner](docs/Model/GetSmsEventReportEventsInner.md)
- [GetSmtpTemplateOverview](docs/Model/GetSmtpTemplateOverview.md)
- [GetSmtpTemplateOverviewSender](docs/Model/GetSmtpTemplateOverviewSender.md)
- [GetSmtpTemplates](docs/Model/GetSmtpTemplates.md)
- [GetSsoToken](docs/Model/GetSsoToken.md)
- [GetStatsByDevice](docs/Model/GetStatsByDevice.md)
- [GetSubAccountGroups200ResponseInner](docs/Model/GetSubAccountGroups200ResponseInner.md)
- [GetSubscriptionInfoResponse](docs/Model/GetSubscriptionInfoResponse.md)
- [GetSubscriptionInfoResponseBalance](docs/Model/GetSubscriptionInfoResponseBalance.md)
- [GetSubscriptionInfoResponseBalanceBalancesInner](docs/Model/GetSubscriptionInfoResponseBalanceBalancesInner.md)
- [GetSubscriptionInfoResponseMembersInner](docs/Model/GetSubscriptionInfoResponseMembersInner.md)
- [GetSubscriptionInfoResponseRewardInner](docs/Model/GetSubscriptionInfoResponseRewardInner.md)
- [GetSubscriptionInfoResponseTierInner](docs/Model/GetSubscriptionInfoResponseTierInner.md)
- [GetSubscriptionMemberResponse](docs/Model/GetSubscriptionMemberResponse.md)
- [GetSubscriptionMemberResponseMemberContactIdInner](docs/Model/GetSubscriptionMemberResponseMemberContactIdInner.md)
- [GetTransacAggregatedSmsReport](docs/Model/GetTransacAggregatedSmsReport.md)
- [GetTransacBlockedContacts](docs/Model/GetTransacBlockedContacts.md)
- [GetTransacBlockedContactsContactsInner](docs/Model/GetTransacBlockedContactsContactsInner.md)
- [GetTransacBlockedContactsContactsInnerReason](docs/Model/GetTransacBlockedContactsContactsInnerReason.md)
- [GetTransacEmailContent](docs/Model/GetTransacEmailContent.md)
- [GetTransacEmailContentEventsInner](docs/Model/GetTransacEmailContentEventsInner.md)
- [GetTransacEmailsList](docs/Model/GetTransacEmailsList.md)
- [GetTransacEmailsListTransactionalEmailsInner](docs/Model/GetTransacEmailsListTransactionalEmailsInner.md)
- [GetTransacSmsReport](docs/Model/GetTransacSmsReport.md)
- [GetTransacSmsReportReportsInner](docs/Model/GetTransacSmsReportReportsInner.md)
- [GetUserPermission](docs/Model/GetUserPermission.md)
- [GetUserPermissionPrivilegesInner](docs/Model/GetUserPermissionPrivilegesInner.md)
- [GetVersionInfoResponse](docs/Model/GetVersionInfoResponse.md)
- [GetWebhook](docs/Model/GetWebhook.md)
- [GetWebhooks](docs/Model/GetWebhooks.md)
- [GetWhatsAppConfig](docs/Model/GetWhatsAppConfig.md)
- [GetWhatsappCampaignOverview](docs/Model/GetWhatsappCampaignOverview.md)
- [GetWhatsappCampaigns](docs/Model/GetWhatsappCampaigns.md)
- [GetWhatsappCampaignsCampaignsInner](docs/Model/GetWhatsappCampaignsCampaignsInner.md)
- [GetWhatsappEventReport](docs/Model/GetWhatsappEventReport.md)
- [GetWhatsappEventReportEventsInner](docs/Model/GetWhatsappEventReportEventsInner.md)
- [GetWhatsappTemplates](docs/Model/GetWhatsappTemplates.md)
- [GetWhatsappTemplatesTemplatesInner](docs/Model/GetWhatsappTemplatesTemplatesInner.md)
- [InviteAdminUser](docs/Model/InviteAdminUser.md)
- [InviteAdminUserPrivilegesInner](docs/Model/InviteAdminUserPrivilegesInner.md)
- [Inviteuser](docs/Model/Inviteuser.md)
- [InviteuserPrivilegesInner](docs/Model/InviteuserPrivilegesInner.md)
- [InviteuserResponse](docs/Model/InviteuserResponse.md)
- [LoyaltyProgram](docs/Model/LoyaltyProgram.md)
- [LoyaltyProgramPage](docs/Model/LoyaltyProgramPage.md)
- [LoyaltyProgramValidationError](docs/Model/LoyaltyProgramValidationError.md)
- [LoyaltyTierPage](docs/Model/LoyaltyTierPage.md)
- [MasterDetailsResponse](docs/Model/MasterDetailsResponse.md)
- [MasterDetailsResponseBillingInfo](docs/Model/MasterDetailsResponseBillingInfo.md)
- [MasterDetailsResponseBillingInfoAddress](docs/Model/MasterDetailsResponseBillingInfoAddress.md)
- [MasterDetailsResponseBillingInfoName](docs/Model/MasterDetailsResponseBillingInfoName.md)
- [MasterDetailsResponsePlanInfo](docs/Model/MasterDetailsResponsePlanInfo.md)
- [MasterDetailsResponsePlanInfoFeaturesInner](docs/Model/MasterDetailsResponsePlanInfoFeaturesInner.md)
- [Note](docs/Model/Note.md)
- [NoteData](docs/Model/NoteData.md)
- [NoteId](docs/Model/NoteId.md)
- [Notification](docs/Model/Notification.md)
- [Offer](docs/Model/Offer.md)
- [OfferList](docs/Model/OfferList.md)
- [OffersListResponse](docs/Model/OffersListResponse.md)
- [Order](docs/Model/Order.md)
- [OrderBatch](docs/Model/OrderBatch.md)
- [OrderBilling](docs/Model/OrderBilling.md)
- [OrderIdentifiers](docs/Model/OrderIdentifiers.md)
- [OrderProductsInner](docs/Model/OrderProductsInner.md)
- [Otp](docs/Model/Otp.md)
- [PatchLoyaltyProgramPayload](docs/Model/PatchLoyaltyProgramPayload.md)
- [Pipeline](docs/Model/Pipeline.md)
- [PipelineStage](docs/Model/PipelineStage.md)
- [PostContactInfo](docs/Model/PostContactInfo.md)
- [PostContactInfoContacts](docs/Model/PostContactInfoContacts.md)
- [PostContactInfoContactsFailure](docs/Model/PostContactInfoContactsFailure.md)
- [PostContactInfoContactsSuccess](docs/Model/PostContactInfoContactsSuccess.md)
- [PostSendFailed](docs/Model/PostSendFailed.md)
- [PostSendSmsTestFailed](docs/Model/PostSendSmsTestFailed.md)
- [PutRevokeUserPermission](docs/Model/PutRevokeUserPermission.md)
- [PutRevokeUserPermissionResponse](docs/Model/PutRevokeUserPermissionResponse.md)
- [Putresendcancelinvitation](docs/Model/Putresendcancelinvitation.md)
- [PutresendcancelinvitationResponse](docs/Model/PutresendcancelinvitationResponse.md)
- [RedeemRewardPayload](docs/Model/RedeemRewardPayload.md)
- [RedeemedRewardFailedConditionErrorResponse](docs/Model/RedeemedRewardFailedConditionErrorResponse.md)
- [RemoveContactFromListByAll](docs/Model/RemoveContactFromListByAll.md)
- [RemoveContactFromListByEmails](docs/Model/RemoveContactFromListByEmails.md)
- [RemoveContactFromListByExtIDs](docs/Model/RemoveContactFromListByExtIDs.md)
- [RemoveContactFromListByIDs](docs/Model/RemoveContactFromListByIDs.md)
- [RemoveContactFromListRequest](docs/Model/RemoveContactFromListRequest.md)
- [RequestContactExport](docs/Model/RequestContactExport.md)
- [RequestContactExportCustomContactFilter](docs/Model/RequestContactExportCustomContactFilter.md)
- [RequestContactImport](docs/Model/RequestContactImport.md)
- [RequestContactImportJsonBodyInner](docs/Model/RequestContactImportJsonBodyInner.md)
- [RequestContactImportNewList](docs/Model/RequestContactImportNewList.md)
- [RequestSmsRecipientExport](docs/Model/RequestSmsRecipientExport.md)
- [RewardAttributionResponse](docs/Model/RewardAttributionResponse.md)
- [RewardRedeemResponse](docs/Model/RewardRedeemResponse.md)
- [ScheduleSmtpEmail](docs/Model/ScheduleSmtpEmail.md)
- [Segment](docs/Model/Segment.md)
- [SendReport](docs/Model/SendReport.md)
- [SendReportEmail](docs/Model/SendReportEmail.md)
- [SendSms](docs/Model/SendSms.md)
- [SendSmtpEmail](docs/Model/SendSmtpEmail.md)
- [SendSmtpEmailAttachmentInner](docs/Model/SendSmtpEmailAttachmentInner.md)
- [SendSmtpEmailBccInner](docs/Model/SendSmtpEmailBccInner.md)
- [SendSmtpEmailCcInner](docs/Model/SendSmtpEmailCcInner.md)
- [SendSmtpEmailMessageVersionsInner](docs/Model/SendSmtpEmailMessageVersionsInner.md)
- [SendSmtpEmailReplyTo](docs/Model/SendSmtpEmailReplyTo.md)
- [SendSmtpEmailSender](docs/Model/SendSmtpEmailSender.md)
- [SendSmtpEmailToInner](docs/Model/SendSmtpEmailToInner.md)
- [SendTestEmail](docs/Model/SendTestEmail.md)
- [SendTestSms](docs/Model/SendTestSms.md)
- [SendTransacSms](docs/Model/SendTransacSms.md)
- [SendWhatsappMessage201Response](docs/Model/SendWhatsappMessage201Response.md)
- [SendWhatsappMessageRequest](docs/Model/SendWhatsappMessageRequest.md)
- [SendWhatsappMessageTemplate](docs/Model/SendWhatsappMessageTemplate.md)
- [SendWhatsappMessageText](docs/Model/SendWhatsappMessageText.md)
- [SubAccountAppsToggleRequest](docs/Model/SubAccountAppsToggleRequest.md)
- [SubAccountDetailsResponse](docs/Model/SubAccountDetailsResponse.md)
- [SubAccountDetailsResponseGroupsInner](docs/Model/SubAccountDetailsResponseGroupsInner.md)
- [SubAccountDetailsResponsePlanInfo](docs/Model/SubAccountDetailsResponsePlanInfo.md)
- [SubAccountDetailsResponsePlanInfoCredits](docs/Model/SubAccountDetailsResponsePlanInfoCredits.md)
- [SubAccountDetailsResponsePlanInfoCreditsEmails](docs/Model/SubAccountDetailsResponsePlanInfoCreditsEmails.md)
- [SubAccountDetailsResponsePlanInfoCreditsExternalFeeds](docs/Model/SubAccountDetailsResponsePlanInfoCreditsExternalFeeds.md)
- [SubAccountDetailsResponsePlanInfoCreditsSms](docs/Model/SubAccountDetailsResponsePlanInfoCreditsSms.md)
- [SubAccountDetailsResponsePlanInfoCreditsWhatsapp](docs/Model/SubAccountDetailsResponsePlanInfoCreditsWhatsapp.md)
- [SubAccountDetailsResponsePlanInfoCreditsWpSubscribers](docs/Model/SubAccountDetailsResponsePlanInfoCreditsWpSubscribers.md)
- [SubAccountDetailsResponsePlanInfoFeatures](docs/Model/SubAccountDetailsResponsePlanInfoFeatures.md)
- [SubAccountDetailsResponsePlanInfoFeaturesInbox](docs/Model/SubAccountDetailsResponsePlanInfoFeaturesInbox.md)
- [SubAccountDetailsResponsePlanInfoFeaturesLandingPage](docs/Model/SubAccountDetailsResponsePlanInfoFeaturesLandingPage.md)
- [SubAccountDetailsResponsePlanInfoFeaturesUsers](docs/Model/SubAccountDetailsResponsePlanInfoFeaturesUsers.md)
- [SubAccountUpdatePlanRequest](docs/Model/SubAccountUpdatePlanRequest.md)
- [SubAccountUpdatePlanRequestCredits](docs/Model/SubAccountUpdatePlanRequestCredits.md)
- [SubAccountUpdatePlanRequestFeatures](docs/Model/SubAccountUpdatePlanRequestFeatures.md)
- [SubAccountsResponse](docs/Model/SubAccountsResponse.md)
- [SubAccountsResponseSubAccountsInner](docs/Model/SubAccountsResponseSubAccountsInner.md)
- [SubAccountsResponseSubAccountsInnerGroupsInner](docs/Model/SubAccountsResponseSubAccountsInnerGroupsInner.md)
- [SubscriptionNotFoundErrorResponse](docs/Model/SubscriptionNotFoundErrorResponse.md)
- [Task](docs/Model/Task.md)
- [TaskList](docs/Model/TaskList.md)
- [TaskReminder](docs/Model/TaskReminder.md)
- [TaskTypes](docs/Model/TaskTypes.md)
- [Tier](docs/Model/Tier.md)
- [TierAccessConditionsInner](docs/Model/TierAccessConditionsInner.md)
- [TierForContact](docs/Model/TierForContact.md)
- [TierGroup](docs/Model/TierGroup.md)
- [TierGroupPage](docs/Model/TierGroupPage.md)
- [TierRequest](docs/Model/TierRequest.md)
- [TierRequestAccessConditionsInner](docs/Model/TierRequestAccessConditionsInner.md)
- [TierRequestTierRewardsInner](docs/Model/TierRequestTierRewardsInner.md)
- [TierTierRewardsInner](docs/Model/TierTierRewardsInner.md)
- [Transaction](docs/Model/Transaction.md)
- [UnauthorizedResponse](docs/Model/UnauthorizedResponse.md)
- [UpdateAttribute](docs/Model/UpdateAttribute.md)
- [UpdateAttributeEnumerationInner](docs/Model/UpdateAttributeEnumerationInner.md)
- [UpdateBalanceDefinitionPayload](docs/Model/UpdateBalanceDefinitionPayload.md)
- [UpdateBatchContacts](docs/Model/UpdateBatchContacts.md)
- [UpdateBatchContactsContactsInner](docs/Model/UpdateBatchContactsContactsInner.md)
- [UpdateBatchContactsModel](docs/Model/UpdateBatchContactsModel.md)
- [UpdateCampaignStatus](docs/Model/UpdateCampaignStatus.md)
- [UpdateContact](docs/Model/UpdateContact.md)
- [UpdateCouponCollection200Response](docs/Model/UpdateCouponCollection200Response.md)
- [UpdateCouponCollectionRequest](docs/Model/UpdateCouponCollectionRequest.md)
- [UpdateEmailCampaign](docs/Model/UpdateEmailCampaign.md)
- [UpdateEmailCampaignEmailExpirationDate](docs/Model/UpdateEmailCampaignEmailExpirationDate.md)
- [UpdateEmailCampaignRecipients](docs/Model/UpdateEmailCampaignRecipients.md)
- [UpdateEmailCampaignSender](docs/Model/UpdateEmailCampaignSender.md)
- [UpdateExternalFeed](docs/Model/UpdateExternalFeed.md)
- [UpdateList](docs/Model/UpdateList.md)
- [UpdateLoyaltyProgramPayload](docs/Model/UpdateLoyaltyProgramPayload.md)
- [UpdateSender](docs/Model/UpdateSender.md)
- [UpdateSmsCampaign](docs/Model/UpdateSmsCampaign.md)
- [UpdateSmtpTemplate](docs/Model/UpdateSmtpTemplate.md)
- [UpdateSmtpTemplateSender](docs/Model/UpdateSmtpTemplateSender.md)
- [UpdateTierGroup404Response](docs/Model/UpdateTierGroup404Response.md)
- [UpdateTierGroupRequest](docs/Model/UpdateTierGroupRequest.md)
- [UpdateUserResponse](docs/Model/UpdateUserResponse.md)
- [UpdateWebhook](docs/Model/UpdateWebhook.md)
- [UpdateWhatsAppCampaign](docs/Model/UpdateWhatsAppCampaign.md)
- [UploadImageModel](docs/Model/UploadImageModel.md)
- [UploadImageToGallery](docs/Model/UploadImageToGallery.md)
- [ValidateRewardPayload](docs/Model/ValidateRewardPayload.md)
- [ValidatedRewardResponse](docs/Model/ValidatedRewardResponse.md)
- [ValidationError](docs/Model/ValidationError.md)
- [VariablesItems](docs/Model/VariablesItems.md)
- [VersionInfo](docs/Model/VersionInfo.md)
- [WhatsappCampStats](docs/Model/WhatsappCampStats.md)
- [WhatsappCampTemplate](docs/Model/WhatsappCampTemplate.md)

## Authorization

### api-key

- **Type**: API key
- **API key parameter name**: api-key
- **Location**: HTTP header



### partner-key

- **Type**: API key
- **API key parameter name**: partner-key
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

contact@brevo.com

## About this package

## partner-key

The partner key should be passed in the request headers as `partner-key` along with `api-key` pair for successful authentication of partner (Optional).

- **Type**: API key
- **API key parameter name**: partner-key
- **Location**: HTTP header


If you find a bug, please post the issue on [Github](https://github.com/getbrevo/brevo-php/issues).

As always, if you need additional assistance, drop us a note [here](https://account.brevo.com/support).

You can generate the PHP code with the CLI command: openapi-generator generate --skip-validate-spec -c config-openapi-generator.yml

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `3.0.0`
    - Package version: `3.0.0`
    - Generator version: `7.9.0`
- Build package: `org.openapitools.codegen.languages.PhpNextgenClientCodegen`

