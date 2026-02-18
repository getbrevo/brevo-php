# Reference
## Account
<details><summary><code>$client-&gt;account-&gt;getAccount() -> GetAccountResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Retrieves details of your Brevo account.

**Use this to:**
- Get account information (email, name, company, address)
- Check plan details (type, credits, expiration)
- Get relay information (for transactional emails)
- Check Marketing Automation status
- View date/time preferences and account settings
- Access organization and user identifiers

**Key information returned:**
- Complete account details (organization ID, user ID, company information)
- Address and contact information
- Plan configurations and credit allocations across different verticals
- Marketing Automation settings and tracker key
- SMTP relay configuration for transactional emails
- Date/time preferences and account settings
- Enterprise features availability status

**Important considerations:**
- Provides comprehensive account overview for billing and configuration management
- Essential for understanding current plan limitations and feature availability
- Marketing Automation key required for advanced automation features
- Plan verticals show detailed breakdown across Marketing, Chat, and CRM categories
- Relay configuration crucial for transactional email setup and deliverability
- Date/time preferences affect campaign scheduling and reporting displays
- Enterprise status determines access to advanced features and sub-account management
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->getAccount();
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;account-&gt;getAccountActivity($request) -> GetAccountActivityResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Retrieves user activity logs from your organization for security monitoring and audit compliance.

Use this to:
- Monitor user login activities and access patterns
- Track account modifications and configuration changes
- Generate security audit reports and compliance documentation
- Investigate suspicious activities and unauthorized access
- Monitor team member actions and account usage

Key information returned:
- Complete user activity details and timestamps
- User identification (email, IP address, browser)
- Action types and activity descriptions
- Security-relevant events and access logs
- Historical activity data for audit trails

Note: Requires Enterprise plan for access to organization activity logs.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->getAccountActivity(
    new GetAccountActivityRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$startDate:** `?string` 

Mandatory if endDate is used. Enter start date in UTC date (YYYY-MM-DD)
format to filter the activity in your account. Maximum time period that
can be selected is one month. Additionally, you can retrieve activity
logs from the past 12 months from the date of your search.
    
</dd>
</dl>

<dl>
<dd>

**$endDate:** `?string` 

Mandatory if startDate is used. Enter end date in UTC date (YYYY-MM-DD)
format to filter the activity in your account. Maximum time period that
can be selected is one month.
    
</dd>
</dl>

<dl>
<dd>

**$email:** `?string` — Enter the user's email address to filter their activity in the account.
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` — Number of documents per page
    
</dd>
</dl>

<dl>
<dd>

**$offset:** `?int` — Index of the first document in the page.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## MasterAccount
<details><summary><code>$client-&gt;masterAccount-&gt;createANewGroupOfSubAccounts($request) -> PostCorporateGroupResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

This endpoint allows to create a group of sub-accounts
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->masterAccount->createANewGroupOfSubAccounts(
    new PostCorporateGroupRequest([
        'groupName' => 'My group',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$groupName:** `string` — The name of the group of sub-accounts
    
</dd>
</dl>

<dl>
<dd>

**$subAccountIds:** `?array` — Pass the list of sub-account Ids to be included in the group
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;masterAccount-&gt;deleteSubAccountFromGroup($groupId, $request)</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

This endpoint allows you to remove a sub-organization from a group.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->masterAccount->deleteSubAccountFromGroup(
    'groupId',
    new PutCorporateGroupUnlinkGroupIdSubAccountsRequest([
        'subAccountIds' => [
            423432,
            234323,
            87678,
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$groupId:** `string` — Group id
    
</dd>
</dl>

<dl>
<dd>

**$subAccountIds:** `array` — List of sub-account ids
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;masterAccount-&gt;getAGroupDetails($id) -> GetCorporateGroupIdResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

This endpoint allows you to retrieve a specific group’s information such as
the list of sub-organizations and the user associated with the group.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->masterAccount->getAGroupDetails(
    'id',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — Id of the group of sub-organization
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;masterAccount-&gt;updateAGroupOfSubAccounts($id, $request)</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

This endpoint allows to update a group of sub-accounts
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->masterAccount->updateAGroupOfSubAccounts(
    'id',
    new PutCorporateGroupIdRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — Id of the group
    
</dd>
</dl>

<dl>
<dd>

**$groupName:** `?string` — The name of the group of sub-accounts
    
</dd>
</dl>

<dl>
<dd>

**$subAccountIds:** `?array` — Pass the list of sub-account Ids to be included in the group
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;masterAccount-&gt;deleteAGroup($id)</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

This endpoint allows you to delete a group of sub-organizations. When a
group is deleted, the sub-organizations are no longer part of this group.
The users associated with the group are no longer associated with the group
once deleted.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->masterAccount->deleteAGroup(
    'id',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — Id of the group
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;masterAccount-&gt;getSubAccountGroups() -> array</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

This endpoint allows you to list all groups created on your Admin account.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->masterAccount->getSubAccountGroups();
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;masterAccount-&gt;getCorporateInvitedUsersList($request) -> GetCorporateInvitedUsersListResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

This endpoint allows you to list all Admin users of your Admin account. You
can filter users by type (active or pending) and paginate results using
offset and limit.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->masterAccount->getCorporateInvitedUsersList(
    new GetCorporateInvitedUsersListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$type:** `?string` 

User type (active | pending). This is required if offset is provided for
limited result.
    
</dd>
</dl>

<dl>
<dd>

**$offset:** `?int` 

Page number for the result set. This is optional, default value will be
the 1st page.
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` 

Number of users to be displayed on each page. This is optional, the
default limit is 20, but max allowed limit is 100.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;masterAccount-&gt;listOfAllIPs() -> array</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

This endpoint allows you to retrieve the list of active IPs on your Admin
account
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->masterAccount->listOfAllIPs();
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;masterAccount-&gt;getTheDetailsOfRequestedMasterAccount() -> GetCorporateMasterAccountResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

This endpoint will provide the details of the master account.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->masterAccount->getTheDetailsOfRequestedMasterAccount();
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;masterAccount-&gt;generateSsoTokenToAccessAdminAccount($request) -> GetSsoToken</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

This endpoint generates an SSO token to authenticate and access the admin
account using the endpoint
https://account-app.brevo.com/account/login/corporate/sso/[token], where
[token] will be replaced by the actual token.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->masterAccount->generateSsoTokenToAccessAdminAccount(
    new PostCorporateSsoTokenRequest([
        'email' => 'vipin+ent-user@brevo.com',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$email:** `string` — User email of admin account
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;masterAccount-&gt;getTheListOfAllTheSubAccountsOfTheMasterAccount($request) -> GetCorporateSubAccountResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

This endpoint will provide the list all the sub-accounts of the master
account.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->masterAccount->getTheListOfAllTheSubAccountsOfTheMasterAccount(
    new GetCorporateSubAccountRequest([
        'offset' => 1,
        'limit' => 1,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$offset:** `int` — Index of the first sub-account in the page
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `int` — Number of sub-accounts to be displayed on each page
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;masterAccount-&gt;createANewSubAccountUnderAMasterAccount($request) -> PostCorporateSubAccountResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

This endpoint will create a new sub-account under a master account
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->masterAccount->createANewSubAccountUnderAMasterAccount(
    new PostCorporateSubAccountRequest([
        'companyName' => 'Test Sub-account',
        'email' => 'test-sub@example.com',
        'groupIds' => [
            '5f8f8c3b5f56a02d4433b3a7',
            '5f8f8c3b5f56a02d4433b3a8',
        ],
        'language' => PostCorporateSubAccountRequestLanguage::Fr->value,
        'timezone' => 'Europe/Paris',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$companyName:** `string` — Set the name of the sub-account company
    
</dd>
</dl>

<dl>
<dd>

**$email:** `string` — Email address for the organization
    
</dd>
</dl>

<dl>
<dd>

**$groupIds:** `?array` — Set the group(s) for the sub-account
    
</dd>
</dl>

<dl>
<dd>

**$language:** `?string` — Set the language of the sub-account
    
</dd>
</dl>

<dl>
<dd>

**$timezone:** `?string` — Set the timezone of the sub-account
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;masterAccount-&gt;associateAnIpToSubAccounts($request) -> array</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

This endpoint allows to associate an IP to sub-accounts
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->masterAccount->associateAnIpToSubAccounts(
    new PostCorporateSubAccountIpAssociateRequest([
        'ids' => [
            234322,
            325553,
            893432,
        ],
        'ip' => '103.11.32.88',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$ids:** `array` 

Pass the list of sub-account Ids to be associated with the IP
address
    
</dd>
</dl>

<dl>
<dd>

**$ip:** `string` — IP address
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;masterAccount-&gt;dissociateAnIpToSubAccounts($request)</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

This endpoint allows to dissociate an IP from sub-accounts
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->masterAccount->dissociateAnIpToSubAccounts(
    new PutCorporateSubAccountIpDissociateRequest([
        'ids' => [
            234322,
            325553,
            893432,
        ],
        'ip' => '103.11.32.88',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$ids:** `array` 

Pass the list of sub-account Ids to be dissociated from the IP
address
    
</dd>
</dl>

<dl>
<dd>

**$ip:** `string` — IP address
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;masterAccount-&gt;createAnApiKeyForASubAccount($request) -> PostCorporateSubAccountKeyResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

This endpoint will generate an API v3 key for a sub-account
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->masterAccount->createAnApiKeyForASubAccount(
    new PostCorporateSubAccountKeyRequest([
        'id' => 3232323,
        'name' => 'My Api Key',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `int` — Id of the sub-account organization
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` — Name of the API key
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;masterAccount-&gt;generateSsoTokenToAccessSubAccount($request) -> GetSsoToken</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

This endpoint generates an sso token to authenticate and access a
sub-account of the master using the account endpoint
https://account-app.brevo.com/account/login/sub-account/sso/[token], where
[token] will be replaced by the actual token.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->masterAccount->generateSsoTokenToAccessSubAccount(
    new PostCorporateSubAccountSsoTokenRequest([
        'id' => 3232323,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$email:** `?string` — User email of sub-account organization
    
</dd>
</dl>

<dl>
<dd>

**$id:** `int` — Id of the sub-account organization
    
</dd>
</dl>

<dl>
<dd>

**$target:** `?string` 

**Set target after login success** * **automation** - Redirect
to Automation after login * **email_campaign** - Redirect to
Email Campaign after login * **contacts** - Redirect to Contacts
after login * **landing_pages** - Redirect to Landing Pages
after login * **email_transactional** - Redirect to Email
Transactional after login * **senders** - Redirect to Senders
after login * **sms_campaign** - Redirect to Sms Campaign after
login * **sms_transactional** - Redirect to Sms Transactional
after login
    
</dd>
</dl>

<dl>
<dd>

**$url:** `?string` 

Set the full target URL after login success. The user will land
directly on this target URL after login
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;masterAccount-&gt;getSubAccountDetails($id) -> GetCorporateSubAccountIdResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

This endpoint will provide the details for the specified sub-account company
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->masterAccount->getSubAccountDetails(
    1000000,
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `int` — Id of the sub-account organization
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;masterAccount-&gt;deleteASubAccount($id)</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->masterAccount->deleteASubAccount(
    1000000,
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `int` — Id of the sub-account organization to be deleted
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;masterAccount-&gt;enableDisableSubAccountApplicationS($id, $request)</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

API endpoint for the Corporate owner to enable/disable applications on the
sub-account
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->masterAccount->enableDisableSubAccountApplicationS(
    1000000,
    new PutCorporateSubAccountIdApplicationsToggleRequest([
        'landingPages' => true,
        'meetings' => true,
        'smsCampaigns' => false,
        'webPush' => false,
        'whatsapp' => true,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `int` — Id of the sub-account organization (mandatory)
    
</dd>
</dl>

<dl>
<dd>

**$automation:** `?bool` 

Set this field to enable or disable Automation on the
sub-account
    
</dd>
</dl>

<dl>
<dd>

**$conversations:** `?bool` 

Set this field to enable or disable Conversations on the
sub-account
    
</dd>
</dl>

<dl>
<dd>

**$crm:** `?bool` — Set this field to enable or disable Sales CRM on the sub-account
    
</dd>
</dl>

<dl>
<dd>

**$emailCampaigns:** `?bool` 

Set this field to enable or disable Email Campaigns on the
sub-account
    
</dd>
</dl>

<dl>
<dd>

**$facebookAds:** `?bool` 

Set this field to enable or disable Facebook ads on the
sub-account
    
</dd>
</dl>

<dl>
<dd>

**$inbox:** `?bool` 

Set this field to enable or disable Inbox on the sub-account /
Not applicable on ENTv2
    
</dd>
</dl>

<dl>
<dd>

**$landingPages:** `?bool` 

Set this field to enable or disable Landing pages on the
sub-account
    
</dd>
</dl>

<dl>
<dd>

**$meetings:** `?bool` — Set this field to enable or disable Meetings on the sub-account
    
</dd>
</dl>

<dl>
<dd>

**$smsCampaigns:** `?bool` 

Set this field to enable or disable SMS Marketing on the
sub-account
    
</dd>
</dl>

<dl>
<dd>

**$transactionalEmails:** `?bool` 

Set this field to enable or disable Transactional Email on the
sub-account
    
</dd>
</dl>

<dl>
<dd>

**$transactionalSms:** `?bool` 

Set this field to enable or disable Transactional SMS on the
sub-account
    
</dd>
</dl>

<dl>
<dd>

**$webPush:** `?bool` — Set this field to enable or disable Web Push on the sub-account
    
</dd>
</dl>

<dl>
<dd>

**$whatsapp:** `?bool` 

Set this field to enable or disable Whatsapp campaigns on the
sub-account
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;masterAccount-&gt;updateSubAccountPlan($id, $request)</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

This endpoint will update the sub-account plan. On the Corporate solution
new version v2, you can set an unlimited number of credits in your
sub-organization. Please pass the value “-1" to set the consumable in
unlimited mode.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->masterAccount->updateSubAccountPlan(
    1000000,
    new PutCorporateSubAccountIdPlanRequest([
        'credits' => new PutCorporateSubAccountIdPlanRequestCredits([
            'email' => 5000,
            'externalFeeds' => 1,
            'sms' => 2000,
            'whatsapp' => 100,
            'wpSubscribers' => -1,
        ]),
        'features' => new PutCorporateSubAccountIdPlanRequestFeatures([
            'inbox' => 10,
            'landingPage' => 20,
            'salesUsers' => 6,
            'users' => 15,
        ]),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `int` — Id of the sub-account organization
    
</dd>
</dl>

<dl>
<dd>

**$credits:** `?PutCorporateSubAccountIdPlanRequestCredits` — Credit details to update
    
</dd>
</dl>

<dl>
<dd>

**$features:** `?PutCorporateSubAccountIdPlanRequestFeatures` — Features details to update
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;masterAccount-&gt;updateSubAccountsPlan($request)</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

This endpoint will update multiple sub-accounts plan. On the Corporate
solution new version v2, you can set an unlimited number of credits in your
sub-organization. Please pass the value “-1" to set the consumable in
unlimited mode.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->masterAccount->updateSubAccountsPlan(
    new PutCorporateSubAccountsPlanRequest([
        'credits' => new PutCorporateSubAccountsPlanRequestCredits([
            'email' => 5000,
            'externalFeeds' => 1,
            'sms' => 2000,
            'whatsapp' => 100,
            'wpSubscribers' => -1,
        ]),
        'features' => new PutCorporateSubAccountsPlanRequestFeatures([
            'landingPage' => 20,
            'salesUsers' => 6,
            'users' => 15,
        ]),
        'subAccountIds' => [
            4534345,
            987893,
            876785,
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$credits:** `?PutCorporateSubAccountsPlanRequestCredits` — Credit details to update
    
</dd>
</dl>

<dl>
<dd>

**$features:** `?PutCorporateSubAccountsPlanRequestFeatures` — Features details to update
    
</dd>
</dl>

<dl>
<dd>

**$subAccountIds:** `?array` — List of sub-account ids
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;masterAccount-&gt;inviteAdminUser($request) -> InviteAdminUserResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

`This endpoint allows you to invite a member to manage the Admin account
Features and their respective permissions are as below: - `my_plan`:
  - "all"
- `api`:
  - "none"
- `user_management`:
  - "all"
- `app_management` | Not available in ENTv2:
  - "all"
- `sub_organization_groups`
  - "create"
  - "edit_delete"
- `create_sub_organizations`
  - "all"
- `manage_sub_organizations`
  - "all"
- `analytics`
  - "download_data"
  - "create_alerts"
  - "my_looks"
  - "explore_create"
- `security`
  - "all"
**Note**: - If `all_features_access: false` then only privileges are
required otherwise if `true` then it's assumed that all permissions will be
there for the invited admin user.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->masterAccount->inviteAdminUser(
    new InviteAdminUserRequest([
        'allFeaturesAccess' => true,
        'email' => 'inviteuser@example.com',
        'privileges' => [
            new InviteAdminUserRequestPrivilegesItem([]),
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$allFeaturesAccess:** `bool` — All access to the features
    
</dd>
</dl>

<dl>
<dd>

**$email:** `string` — Email address for the organization
    
</dd>
</dl>

<dl>
<dd>

**$groupIds:** `?array` — Ids of Group
    
</dd>
</dl>

<dl>
<dd>

**$privileges:** `array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;masterAccount-&gt;resendCancelAdminUserInvitation($action, $email) -> PutCorporateUserInvitationActionEmailResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

This endpoint will allow the user to:
- Resend an admin user invitation
- Cancel an admin user invitation
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->masterAccount->resendCancelAdminUserInvitation(
    PutCorporateUserInvitationActionEmailRequestAction::Resend->value,
    'email',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$action:** `string` — Action to be performed (cancel / resend)
    
</dd>
</dl>

<dl>
<dd>

**$email:** `string` — Email address of the recipient
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;masterAccount-&gt;revokeAnAdminUser($email)</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

This endpoint allows to revoke/remove an invited member of your Admin
account
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->masterAccount->revokeAnAdminUser(
    'email',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$email:** `string` — Email of the invited user
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;masterAccount-&gt;getCorporateUserPermission($email) -> GetCorporateUserPermissionResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

This endpoint will provide the list of admin user permissions
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->masterAccount->getCorporateUserPermission(
    'email',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$email:** `string` — Email of the invited user.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;masterAccount-&gt;changeAdminUserPermissions($email, $request)</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

This endpoint will allow you to change the permissions of Admin users of
your Admin account
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->masterAccount->changeAdminUserPermissions(
    'email',
    new PutCorporateUserEmailPermissionsRequest([
        'allFeaturesAccess' => false,
        'privileges' => [
            new PutCorporateUserEmailPermissionsRequestPrivilegesItem([
                'feature' => PutCorporateUserEmailPermissionsRequestPrivilegesItemFeature::UserManagement->value,
                'permissions' => [
                    PutCorporateUserEmailPermissionsRequestPrivilegesItemPermissionsItem::All->value,
                ],
            ]),
            new PutCorporateUserEmailPermissionsRequestPrivilegesItem([
                'feature' => PutCorporateUserEmailPermissionsRequestPrivilegesItemFeature::Api->value,
                'permissions' => [
                    PutCorporateUserEmailPermissionsRequestPrivilegesItemPermissionsItem::All->value,
                ],
            ]),
            new PutCorporateUserEmailPermissionsRequestPrivilegesItem([
                'feature' => PutCorporateUserEmailPermissionsRequestPrivilegesItemFeature::MyPlan->value,
                'permissions' => [
                    PutCorporateUserEmailPermissionsRequestPrivilegesItemPermissionsItem::None->value,
                ],
            ]),
            new PutCorporateUserEmailPermissionsRequestPrivilegesItem([
                'feature' => PutCorporateUserEmailPermissionsRequestPrivilegesItemFeature::AppsManagement->value,
                'permissions' => [
                    PutCorporateUserEmailPermissionsRequestPrivilegesItemPermissionsItem::All->value,
                ],
            ]),
            new PutCorporateUserEmailPermissionsRequestPrivilegesItem([
                'feature' => PutCorporateUserEmailPermissionsRequestPrivilegesItemFeature::CreateSubOrganizations->value,
                'permissions' => [
                    PutCorporateUserEmailPermissionsRequestPrivilegesItemPermissionsItem::All->value,
                ],
            ]),
            new PutCorporateUserEmailPermissionsRequestPrivilegesItem([
                'feature' => PutCorporateUserEmailPermissionsRequestPrivilegesItemFeature::SubOrganizationGroups->value,
                'permissions' => [
                    PutCorporateUserEmailPermissionsRequestPrivilegesItemPermissionsItem::Create->value,
                    PutCorporateUserEmailPermissionsRequestPrivilegesItemPermissionsItem::EditDelete->value,
                ],
            ]),
            new PutCorporateUserEmailPermissionsRequestPrivilegesItem([
                'feature' => PutCorporateUserEmailPermissionsRequestPrivilegesItemFeature::ManageSubOrganizations->value,
                'permissions' => [
                    PutCorporateUserEmailPermissionsRequestPrivilegesItemPermissionsItem::All->value,
                ],
            ]),
            new PutCorporateUserEmailPermissionsRequestPrivilegesItem([
                'feature' => PutCorporateUserEmailPermissionsRequestPrivilegesItemFeature::Security->value,
                'permissions' => [
                    PutCorporateUserEmailPermissionsRequestPrivilegesItemPermissionsItem::None->value,
                ],
            ]),
            new PutCorporateUserEmailPermissionsRequestPrivilegesItem([
                'feature' => PutCorporateUserEmailPermissionsRequestPrivilegesItemFeature::Analytics->value,
                'permissions' => [
                    PutCorporateUserEmailPermissionsRequestPrivilegesItemPermissionsItem::CreateAlerts->value,
                    PutCorporateUserEmailPermissionsRequestPrivilegesItemPermissionsItem::DownloadData->value,
                    PutCorporateUserEmailPermissionsRequestPrivilegesItemPermissionsItem::MyLooks->value,
                    PutCorporateUserEmailPermissionsRequestPrivilegesItemPermissionsItem::ExploreCreate->value,
                ],
            ]),
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$email:** `string` — Email address of Admin user
    
</dd>
</dl>

<dl>
<dd>

**$allFeaturesAccess:** `bool` — All access to the features
    
</dd>
</dl>

<dl>
<dd>

**$privileges:** `array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## User
<details><summary><code>$client-&gt;user-&gt;getInvitedUsersList() -> GetInvitedUsersListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->user->getInvitedUsersList();
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;user-&gt;putRevokeUserPermission($email) -> PutRevokeUserPermissionResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->user->putRevokeUserPermission(
    'email',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$email:** `string` — Email of the invited user.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;user-&gt;inviteuser($request) -> InviteuserResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

`Feature` - A Feature represents a specific functionality like Email
campaign, Deals, Calls, Automations, etc. on Brevo. While inviting a user,
determine which feature you want to manage access to. You must specify the
feature accurately to avoid errors. `Permission` - A Permission defines the
level of access or control a user has over a specific feature. While
inviting user, decide on the permission level required for the selected
feature. Make sure the chosen permission is related to the selected feature.
Features and their respective permissions are as below: - `email_campaigns`:
  - "create_edit_delete"
  - "send_schedule_suspend"
- `sms_campaigns`:
  - "create_edit_delete"
  - "send_schedule_suspend"
- `contacts`:
  - "view"
  - "create_edit_delete"
  - "import"
  - "export"
  - "list_and_attributes"
  - "forms"
- `templates`:
  - "create_edit_delete"
  - "activate_deactivate"
- `workflows`:
  - "create_edit_delete"
  - "activate_deactivate_pause"
  - "settings"
- `landing_pages`:
  - "all"
- `transactional_emails`:
  - "settings"
  - "logs"
- `smtp_api`:
  - "smtp"
  - "api_keys"
  - "authorized_ips"
- `user_management`:
  - "all"
- `sales_platform`:
  - "create_edit_deals"
  - "delete_deals"
  - "manage_others_deals_tasks"
  - "reports"
  - "settings"
- `phone`:
  - "all"
- `conversations`:
  - "access"
  - "assign"
  - "configure"
- `senders_domains_dedicated_ips`:
  - "senders_management"
  - "domains_management"
  - "dedicated_ips_management"
- `push_notifications`:
  - "view"
  - "create_edit_delete"
  - "send"
  - "settings"
- `companies`:
  - "manage_owned_companies"
  - "manage_other_companies"
  - "settings"
**Note**: - If `all_features_access: false` then only privileges are
required otherwise if `true` then it's assumed that all permissions will be
there for the invited user. - The availability of feature and its permission
depends on your current plan. Please select the features and permissions
accordingly.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->user->inviteuser(
    new Inviteuser([
        'allFeaturesAccess' => true,
        'email' => 'inviteuser@example.com',
        'privileges' => [
            new InviteuserPrivilegesItem([]),
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$request:** `Inviteuser` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;user-&gt;putresendcancelinvitation($action, $email) -> PutresendcancelinvitationResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->user->putresendcancelinvitation(
    PutresendcancelinvitationRequestAction::Resend->value,
    'email',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$action:** `string` — action
    
</dd>
</dl>

<dl>
<dd>

**$email:** `string` — Email of the invited user.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;user-&gt;editUserPermission($request) -> EditUserPermissionResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

`Feature` - A Feature represents a specific functionality like Email
campaign, Deals, Calls, Automations, etc. on Brevo. While inviting a user,
determine which feature you want to manage access to. You must specify the
feature accurately to avoid errors. `Permission` - A Permission defines the
level of access or control a user has over a specific feature. While
inviting user, decide on the permission level required for the selected
feature. Make sure the chosen permission is related to the selected feature.
Features and their respective permissions are as below: - `email_campaigns`:
  - "create_edit_delete"
  - "send_schedule_suspend"
- `sms_campaigns`:
  - "create_edit_delete"
  - "send_schedule_suspend"
- `contacts`:
  - "view"
  - "create_edit_delete"
  - "import"
  - "export"
  - "list_and_attributes"
  - "forms"
- `templates`:
  - "create_edit_delete"
  - "activate_deactivate"
- `workflows`:
  - "create_edit_delete"
  - "activate_deactivate_pause"
  - "settings"
- `landing_pages`:
  - "all"
- `transactional_emails`:
  - "settings"
  - "logs"
- `smtp_api`:
  - "smtp"
  - "api_keys"
  - "authorized_ips"
- `user_management`:
  - "all"
- `sales_platform`:
  - "create_edit_deals"
  - "delete_deals"
  - "manage_others_deals_tasks"
  - "reports"
  - "settings"
- `phone`:
  - "all"
- `conversations`:
  - "access"
  - "assign"
  - "configure"
- `senders_domains_dedicated_ips`:
  - "senders_management"
  - "domains_management"
  - "dedicated_ips_management"
- `push_notifications`:
  - "view"
  - "create_edit_delete"
  - "send"
  - "settings"
- `companies`:
  - "manage_owned_companies"
  - "manage_other_companies"
  - "settings"
**Note**: - The privileges array remains the same as in the send invitation;
the user simply needs to provide the permissions that need to be updated. -
The availability of feature and its permission depends on your current plan.
Please select the features and permissions accordingly.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->user->editUserPermission(
    new Inviteuser([
        'allFeaturesAccess' => true,
        'email' => 'inviteuser@example.com',
        'privileges' => [
            new InviteuserPrivilegesItem([]),
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$request:** `Inviteuser` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;user-&gt;getUserPermission($email) -> GetUserPermissionResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->user->getUserPermission(
    'email',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$email:** `string` — Email of the invited user.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Process
<details><summary><code>$client-&gt;process-&gt;getProcesses($request) -> GetProcessesResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Retrieves a list of background processes from your Brevo account with filtering and pagination.

**Use this to:**
- Monitor background process activity and status
- Track long-running operations and tasks
- Find process IDs for detailed status checking
- Review process history and performance
- Identify failed or stuck processes for troubleshooting

**Key information returned:**
- Process details (ID, name, type, status)
- Process creation and completion timestamps
- Process progress and completion status
- Error information for failed processes
- Process result data and download links

**Important considerations:**
- Background processes handle long-running operations like imports and exports
- Process status indicates current state (queued, processing, completed, failed, cancelled)
- Export processes provide download URLs when completed
- Failed processes include error messages for troubleshooting
- Use pagination for accounts with many historical processes
- Sort options available for creation order (ascending or descending)
- Different process types handle specific operations (imports, exports, calculations)
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->process->getProcesses(
    new GetProcessesRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$limit:** `?int` — Number limitation for the result returned
    
</dd>
</dl>

<dl>
<dd>

**$offset:** `?int` — Beginning point in the list to retrieve from.
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?string` 

Sort the results in the ascending/descending order of record creation.
Default order is **descending** if `sort` is not passed
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;process-&gt;getProcess($processId) -> GetProcessResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Retrieves detailed information about a specific background process.

**Use this to:**
- Get detailed status of a specific process
- Monitor process progress and completion
- Download results from completed export processes
- Check error details for failed processes
- Track process execution times

**Key information returned:**
- Complete process details and status
- Import/export statistics and results
- Error information for troubleshooting
- Download URLs for export processes
- Process timing and performance data

**Important considerations:**
- Process ID must exist in your account
- Completed processes provide detailed statistics and results
- Export processes include download URLs when successful
- Failed processes contain error messages for debugging
- Timing information helps with performance analysis
- Different process types return different result structures
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->process->getProcess(
    1000000,
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$processId:** `int` — Id of the process
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Senders
<details><summary><code>$client-&gt;senders-&gt;getSenders($request) -> GetSendersResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Retrieves a list of all email senders from your Brevo account with optional filtering.

**Use this to:**
- Get all available senders for email campaign setup
- Find sender details including ID, name, and email address
- Filter senders by IP address for dedicated IP users
- Filter senders by domain for domain-specific configurations
- Monitor sender configuration and status

**Key information returned:**
- Sender details (ID, name, email address)
- Sender status and verification information
- Associated IP addresses and domains (for dedicated IP accounts)
- Sender configuration settings

**Important considerations:**
- Standard accounts show empty IP arrays, dedicated IP accounts show IP assignments
- Filtering by IP only available for accounts with dedicated IPs
- Domain filtering helps organize senders by business units or brands
- Sender status indicates if sender is active and ready for campaign use
- Email verification required before sender can be used in campaigns
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->senders->getSenders(
    new GetSendersRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$ip:** `?string` — Filter your senders for a specific ip. **Available for dedicated IP usage only**
    
</dd>
</dl>

<dl>
<dd>

**$domain:** `?string` — Filter your senders for a specific domain
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;senders-&gt;createSender($request) -> CreateSenderResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Creates a new email sender in your Brevo account.

**Use this to:**
- Add new senders for email campaigns
- Configure sender identity (name and email)
- Associate dedicated IPs with the sender (for dedicated IP accounts)
- Set up domain-based sender configurations

**Key information returned:**
- Created sender ID
- DKIM and SPF configuration status
- Success confirmation

**Important considerations:**
- Verification email sent to specified sender address
- DKIM and SPF configuration affects deliverability
- Dedicated IP accounts require IP association during creation
- IP weights must sum to 100 when specified
- Sender must be verified before use in campaigns
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->senders->createSender(
    new CreateSenderRequest([
        'email' => 'support@example.com',
        'name' => 'Support Team',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$email:** `string` 

From email to use for the sender. A verification email will be
sent to this address.
    
</dd>
</dl>

<dl>
<dd>

**$ips:** `?array` 

**Mandatory in case of dedicated IP**. IPs to associate to the
sender. Not required for standard accounts.
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` — From Name to use for the sender
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;senders-&gt;getIps() -> GetIpsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Retrieves all dedicated IPs associated with your Brevo account.

Use this to:
- List all your dedicated IPs
- Check the status of your dedicated IPs (active/inactive)
- Find IP addresses and associated domains for configuration purposes
- Monitor your IP reputation and deliverability
- Verify available IPs for sender configuration

Key information returned:
- IP ID and address
- Associated domain
- Active status
- IP configuration details
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->senders->getIps();
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;senders-&gt;updateSender($senderId, $request)</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Updates an existing email sender's configuration.

Use this to:
- Modify sender display name or email address
- Update dedicated IP associations
- Change sender configuration settings
- Correct sender information

Key information returned:
- Success confirmation
- Updated sender details
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->senders->updateSender(
    1000000,
    new UpdateSenderRequest([
        'name' => 'New Support Team',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$senderId:** `int` — Id of the sender
    
</dd>
</dl>

<dl>
<dd>

**$email:** `?string` — From Email to update the sender
    
</dd>
</dl>

<dl>
<dd>

**$ips:** `?array` 

**Only in case of dedicated IP**. IPs to associate to the
sender. If passed, will replace all the existing IPs. Not required for standard accounts.
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` — From Name to update the sender
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;senders-&gt;deleteSender($senderId)</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Deletes an email sender from your Brevo account.

Use this to:
- Remove senders that are no longer needed
- Clean up sender configurations
- Remove duplicate or test senders

Key information returned:
- Success confirmation message
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->senders->deleteSender(
    1000000,
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$senderId:** `int` — Id of the sender
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;senders-&gt;getIpsFromSender($senderId) -> GetIpsFromSenderResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Retrieves the dedicated IPs associated with a specific sender.

Use this to:
- Check IP configuration for a sender
- Verify dedicated IP associations
- Get IP details for troubleshooting
- Monitor sender IP configuration

Key information returned:
- List of associated dedicated IPs
- IP addresses and domain configurations
- IP status and settings
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->senders->getIpsFromSender(
    1000000,
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$senderId:** `int` — Id of the sender
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;senders-&gt;validateSenderByOtp($senderId, $request)</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Validates a sender using the OTP (One-Time Password) received via email.

Use this to:
- Complete sender verification process
- Activate a newly created sender
- Verify ownership of the sender email address
- Enable the sender for use in email campaigns

Key information returned:
- Success confirmation of sender verification
- Sender activation status
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->senders->validateSenderByOtp(
    1000000,
    new ValidateSenderByOtpRequest([
        'otp' => 123456,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$senderId:** `int` — Id of the sender
    
</dd>
</dl>

<dl>
<dd>

**$otp:** `int` — 6 digit OTP received on email
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Domains
<details><summary><code>$client-&gt;domains-&gt;getDomains() -> GetDomainsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Retrieves all domains associated with the account.

Use this to:
- List all domains
- Verify domain existence
- Check domain authentication and verification status
- Monitor domain configuration and provider information
- Review domain creation history and ownership

Key information returned:
- Domain details (ID, name, authentication status)
- Verification and authentication states
- Associated IP addresses and DNS providers
- Creator information and creation timestamps
- Pagination information for large domain lists
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->domains->getDomains();
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;domains-&gt;createDomain($request) -> CreateDomainResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Creates a new domain in Brevo.

Use this to:
- Add new domains for sending emails
- Set up domain authentication for better deliverability
- Configure DNS records for email authentication
- Establish domain-based sender identities

Key information returned:
- Created domain ID and configuration
- Required DNS records for authentication
- Domain provider detection results
- Setup instructions and next steps
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->domains->createDomain(
    new CreateDomainRequest([
        'name' => 'mycompany.com',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$name:** `string` — Domain name to be added
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;domains-&gt;getDomainConfiguration($domainName) -> GetDomainConfigurationResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Retrieves configuration of a specific domain, to know if the domain is valid or not.

Use this to:
- Check domain configuration
- Validate a domain configuration
- Monitor DNS record status
- Troubleshoot authentication issues

Key information returned:
- Domain verification and authentication status
- DNS records configuration and validation status
- Detailed authentication requirements
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->domains->getDomainConfiguration(
    'domainName',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$domainName:** `string` — Domain name
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;domains-&gt;deleteDomain($domainName)</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Deletes a domain from Brevo.

Use this to:
- Remove existing domains
- Clean up unused domain configurations
- Remove test domains

Key information returned:
- Success confirmation message
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->domains->deleteDomain(
    'domainName',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$domainName:** `string` — Domain name
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;domains-&gt;authenticateDomain($domainName) -> AuthenticateDomainResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Authenticates a specific domain.

Use this to:
- Authenticate a domain
- Verify DNS record configuration
- Complete domain setup for sending
- Enable domain for email authentication

Key information returned:
- Authentication success confirmation
- Domain readiness status for email sending
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->domains->authenticateDomain(
    'domainName',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$domainName:** `string` — Domain name
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Webhooks
<details><summary><code>$client-&gt;webhooks-&gt;getWebhooks($request) -> GetWebhooksResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Retrieves all webhooks from your Brevo account with filtering and sorting options.

Use this to:
- Monitor webhook configurations and event handling
- List webhooks by type (transactional, marketing, inbound)
- Review webhook endpoints and authentication
- Track webhook creation and modification history
- Audit webhook event subscriptions

Key information returned:
- Complete webhook details and configuration
- Event types and channel subscriptions
- Authentication and security settings
- Webhook URLs and custom headers
- Creation and modification timestamps
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->webhooks->getWebhooks(
    new GetWebhooksRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$type:** `?string` — Filter on webhook type
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?string` — Sort the results in the ascending/descending order of webhook creation
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;webhooks-&gt;createWebhook($request) -> CreateWebhookResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Creates a new webhook to receive real-time notifications for specified events.

Use this to:
- Set up event notifications for transactional or marketing emails
- Configure webhook endpoints for campaign tracking
- Enable real-time monitoring of email delivery status
- Subscribe to contact list changes and updates
- Implement custom event handling and automation

Key information returned:
- Created webhook ID and configuration
- Success confirmation and setup details
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->webhooks->createWebhook(
    new CreateWebhookRequest([
        'events' => [
            CreateWebhookRequestEventsItem::Sent->value,
        ],
        'url' => 'http://requestb.in/173lyyx1',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$auth:** `?CreateWebhookRequestAuth` — Add authentication on webhook url
    
</dd>
</dl>

<dl>
<dd>

**$batched:** `?bool` — To send batched webhooks
    
</dd>
</dl>

<dl>
<dd>

**$channel:** `?string` — channel of webhook
    
</dd>
</dl>

<dl>
<dd>

**$description:** `?string` — Description of the webhook
    
</dd>
</dl>

<dl>
<dd>

**$domain:** `?string` 

Inbound domain of webhook, required in case of event type
`inbound`
    
</dd>
</dl>

<dl>
<dd>

**$events:** `array` 

- Events triggering the webhook. Possible values for
**Transactional** type webhook: #### `sent` OR `request`,
`delivered`, `hardBounce`, `softBounce`, `blocked`, `spam`,
`invalid`, `deferred`, `click`, `opened`, `uniqueOpened` and
`unsubscribed` - Possible values for **Marketing** type webhook:
#### `spam`, `opened`, `click`, `hardBounce`, `softBounce`,
`unsubscribed`, `listAddition` & `delivered` - Possible values
for **Inbound** type webhook: #### `inboundEmailProcessed` -
Possible values for type **Transactional** and channel **SMS**
####
`accepted`,`delivered`,`softBounce`,`hardBounce`,`unsubscribe`,`reply`,
`subscribe`,`sent`,`blacklisted`,`skip` - Possible values for
type **Marketing**  channel **SMS** ####
`sent`,`delivered`,`softBounce`,`hardBounce`,`unsubscribe`,`reply`,
`subscribe`,`skip`
    
</dd>
</dl>

<dl>
<dd>

**$headers:** `?array` — Custom headers to be send with webhooks
    
</dd>
</dl>

<dl>
<dd>

**$type:** `?string` — Type of the webhook
    
</dd>
</dl>

<dl>
<dd>

**$url:** `string` — URL of the webhook
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;webhooks-&gt;exportWebhooksHistory($request) -> ExportWebhooksHistoryResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

<Note title="This feature is available for Professional and Enterprise plans">
To have it activated please send us a request and we will activate it for your account.
</Note>

Exports webhook event history to CSV format for analysis and reporting.

Use this to:
- Generate comprehensive webhook event reports
- Analyze webhook delivery patterns and success rates
- Export event data for external analysis tools
- Create historical reports for compliance and auditing
- Track webhook performance and reliability metrics

Key information returned:
- Process ID for tracking export completion
- CSV file will be delivered to specified webhook URL
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->webhooks->exportWebhooksHistory(
    new ExportWebhooksHistoryRequest([
        'event' => ExportWebhooksHistoryRequestEvent::InvalidParameter->value,
        'notifyUrl' => 'https://brevo.com',
        'type' => ExportWebhooksHistoryRequestType::Transactional->value,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$days:** `?int` 

Number of days in the past including today (positive
integer). _Not compatible with 'startDate' and 'endDate'_
    
</dd>
</dl>

<dl>
<dd>

**$email:** `?string` — Filter the history for a specific email
    
</dd>
</dl>

<dl>
<dd>

**$endDate:** `?string` 

Mandatory if startDate is used. Ending date of the report
(YYYY-MM-DD). Must be greater than equal to startDate
    
</dd>
</dl>

<dl>
<dd>

**$event:** `string` — Filter the history for a specific event type
    
</dd>
</dl>

<dl>
<dd>

**$messageId:** `?int` 

Filter the history for a specific message id. Applicable
only for transactional webhooks.
    
</dd>
</dl>

<dl>
<dd>

**$notifyUrl:** `string` — Webhook URL to receive CSV file link
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?string` — Sorting order of records (asc or desc)
    
</dd>
</dl>

<dl>
<dd>

**$startDate:** `?string` 

Mandatory if endDate is used. Starting date of the history
(YYYY-MM-DD). Must be lower than equal to endDate
    
</dd>
</dl>

<dl>
<dd>

**$type:** `string` — Filter the history based on webhook type
    
</dd>
</dl>

<dl>
<dd>

**$webhookId:** `?int` — Filter the history for a specific webhook id
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;webhooks-&gt;getWebhook($webhookId) -> GetWebhook</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Retrieves detailed information about a specific webhook configuration.

Use this to:
- Get complete webhook configuration and settings
- Check webhook event subscriptions and triggers
- Review authentication and security settings
- Verify webhook URL and custom headers
- Access webhook creation and modification history

Key information returned:
- Complete webhook details and configuration
- Event types and channel subscriptions
- Authentication credentials and methods
- Custom headers and request settings
- Webhook status and activity information
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->webhooks->getWebhook(
    1000000,
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$webhookId:** `int` — Id of the webhook
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;webhooks-&gt;updateWebhook($webhookId, $request)</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Updates an existing webhook configuration and event subscriptions.

Use this to:
- Modify webhook event subscriptions and triggers
- Update webhook URL and endpoint configuration
- Change authentication settings and credentials
- Adjust custom headers and request parameters
- Enable or disable specific webhook events

Key information returned:
- Success confirmation of webhook updates
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->webhooks->updateWebhook(
    1000000,
    new UpdateWebhookRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$webhookId:** `int` — Id of the webhook
    
</dd>
</dl>

<dl>
<dd>

**$auth:** `?UpdateWebhookRequestAuth` — Add authentication on webhook url
    
</dd>
</dl>

<dl>
<dd>

**$batched:** `?bool` — To send batched webhooks
    
</dd>
</dl>

<dl>
<dd>

**$description:** `?string` — Description of the webhook
    
</dd>
</dl>

<dl>
<dd>

**$domain:** `?string` — Inbound domain of webhook, used in case of event type `inbound`
    
</dd>
</dl>

<dl>
<dd>

**$events:** `?array` 

- Events triggering the webhook. Possible values for
**Transactional** type webhook: #### `sent` OR `request`,
`delivered`, `hardBounce`, `softBounce`, `blocked`, `spam`,
`invalid`, `deferred`, `click`, `opened`, `uniqueOpened` and
`unsubscribed` - Possible values for **Marketing** type webhook:
#### `spam`, `opened`, `click`, `hardBounce`, `softBounce`,
`unsubscribed`, `listAddition` & `delivered` - Possible values
for **Inbound** type webhook: #### `inboundEmailProcessed`
    
</dd>
</dl>

<dl>
<dd>

**$headers:** `?array` — Custom headers to be send with webhooks
    
</dd>
</dl>

<dl>
<dd>

**$url:** `?string` — URL of the webhook
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;webhooks-&gt;deleteWebhook($webhookId)</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Permanently deletes a webhook and stops all event notifications.

Use this to:
- Remove unused or obsolete webhook configurations
- Clean up webhook endpoints and subscriptions
- Stop event notifications to specific URLs
- Maintain organized webhook management

Key information returned:
- Success confirmation of webhook deletion
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->webhooks->deleteWebhook(
    1000000,
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$webhookId:** `int` — Id of the webhook
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## ExternalFeeds
<details><summary><code>$client-&gt;externalFeeds-&gt;getAllExternalFeeds($request) -> GetAllExternalFeedsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Retrieves all external feeds from your Brevo account with filtering and pagination.

**Use this to:**
- Get an overview of all external data feeds
- Find feeds by name using search functionality
- Filter feeds by creation date range
- Browse feeds by authentication type
- Monitor feed library organization and usage

**Key information returned:**
- Feed details (UUID, name, URL, authentication type)
- Feed configuration and settings
- Creation and modification timestamps
- Feed status and error information
- Authentication and header configurations

**Important considerations:**
- External feeds enable dynamic content in email campaigns
- Feeds must be accessible from Brevo servers
- Authentication credentials are securely stored
- Feed performance affects campaign delivery
- Use pagination for accounts with many feeds
- Date range filtering limited to 30 days maximum
- Search functionality works on feed name matching
- Internal feeds are system-managed and cannot be modified
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->externalFeeds->getAllExternalFeeds(
    new GetAllExternalFeedsRequest([
        'search' => 'product',
        'startDate' => new DateTime('2024-01-01'),
        'endDate' => new DateTime('2024-01-31'),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$search:** `?string` — Can be used to filter records by search keyword on feed name
    
</dd>
</dl>

<dl>
<dd>

**$startDate:** `?DateTime` 

Mandatory if `endDate` is used. Starting date (YYYY-MM-DD) from which
you want to fetch the list. Can be maximum 30 days older than current
date.
    
</dd>
</dl>

<dl>
<dd>

**$endDate:** `?DateTime` 

Mandatory if `startDate` is used. Ending date (YYYY-MM-DD) till which
you want to fetch the list. Maximum time period that can be selected is
one month.
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?string` 

Sort the results in the ascending/descending order of record creation.
Default order is **descending** if `sort` is not passed.
    
</dd>
</dl>

<dl>
<dd>

**$authType:** `?string` — Filter the records by `authType` of the feed.
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` — Number of documents returned per page.
    
</dd>
</dl>

<dl>
<dd>

**$offset:** `?int` — Index of the first document on the page.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;externalFeeds-&gt;createExternalFeed($request) -> CreateExternalFeedResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Creates a new external feed for dynamic content in email campaigns.

**Use this to:**
- Set up external data sources for dynamic content
- Configure authentication for protected feeds
- Enable real-time content updates in campaigns
- Establish connections to product catalogs, blogs, or APIs

**Key information returned:**
- Created feed UUID for reference in campaigns
- Success confirmation

**Important considerations:**
- Feed URL must be accessible from Brevo infrastructure
- Authentication credentials are securely encrypted
- Test feed accessibility before campaign use
- Consider feed response time for campaign performance
- Monitor feed reliability and uptime
- Use caching for frequently accessed feeds
- Maximum 5 retry attempts allowed for failed requests
- Custom headers support for API integration requirements
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->externalFeeds->createExternalFeed(
    new CreateExternalFeedRequest([
        'name' => 'Public API Feed',
        'url' => 'https://jsonplaceholder.typicode.com/posts',
        'authType' => CreateExternalFeedRequestAuthType::NoAuth->value,
        'maxRetries' => 3,
        'cache' => true,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$name:** `string` — Name of the feed
    
</dd>
</dl>

<dl>
<dd>

**$url:** `string` — URL of the external data source
    
</dd>
</dl>

<dl>
<dd>

**$authType:** `?string` — Authentication type for accessing the feed
    
</dd>
</dl>

<dl>
<dd>

**$username:** `?string` — Username for basic authentication (required if authType is 'basic')
    
</dd>
</dl>

<dl>
<dd>

**$password:** `?string` — Password for basic authentication (required if authType is 'basic')
    
</dd>
</dl>

<dl>
<dd>

**$token:** `?string` — Token for token-based authentication (required if authType is 'token')
    
</dd>
</dl>

<dl>
<dd>

**$maxRetries:** `?int` — Maximum number of retry attempts for failed requests
    
</dd>
</dl>

<dl>
<dd>

**$cache:** `?bool` — Whether to cache the feed response
    
</dd>
</dl>

<dl>
<dd>

**$headers:** `?array` — Custom HTTP headers for the feed request
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;externalFeeds-&gt;getExternalFeedByUuid($uuid) -> GetExternalFeedByUuidResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Retrieves details of a specific external feed by its UUID.

**Use this to:**
- Get complete configuration of an external feed
- Check feed authentication settings
- Review feed personalization options
- Verify feed URL and parameters
- Monitor feed modification history

**Key information returned:**
- Complete feed configuration and settings
- Authentication credentials and headers
- Personalization and fallback settings
- Creation and modification timestamps
- Cache and retry configurations

**Important considerations:**
- UUID must exist in your account
- Provides complete feed information for troubleshooting
- Essential before making modifications
- Shows current feed health status
- Useful for debugging feed issues
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->externalFeeds->getExternalFeedByUuid(
    'b1c2d3e4-f5a6-47b8-89c0-d1e2f3a4b5c6',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the feed to fetch
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;externalFeeds-&gt;updateExternalFeed($uuid, $request)</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Updates configuration of an existing external feed.

**Use this to:**
- Update feed URLs when data sources change
- Modify authentication credentials
- Change cache and retry settings
- Update custom headers
- Rename feeds for better organization

**Key information returned:**
- Success confirmation message

**Important considerations:**
- Only provided fields will be updated
- Feed UUID must exist in your account
- Authentication changes require verification
- URL changes should be tested before campaign use
- Monitor campaigns using this feed after updates
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->externalFeeds->updateExternalFeed(
    'b1c2d3e4-f5a6-47b8-89c0-d1e2f3a4b5c6',
    new UpdateExternalFeedRequest([
        'name' => 'Updated Product Catalog',
        'url' => 'https://api.newstore.com/products/v2',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the feed to update
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` — Name of the feed
    
</dd>
</dl>

<dl>
<dd>

**$url:** `?string` — URL of the external data source
    
</dd>
</dl>

<dl>
<dd>

**$authType:** `?string` — Authentication type for accessing the feed
    
</dd>
</dl>

<dl>
<dd>

**$username:** `?string` — Username for basic authentication
    
</dd>
</dl>

<dl>
<dd>

**$password:** `?string` — Password for basic authentication
    
</dd>
</dl>

<dl>
<dd>

**$token:** `?string` — Token for token-based authentication
    
</dd>
</dl>

<dl>
<dd>

**$headers:** `?array` — Custom HTTP headers for the feed request
    
</dd>
</dl>

<dl>
<dd>

**$maxRetries:** `?int` — Maximum number of retry attempts for failed requests
    
</dd>
</dl>

<dl>
<dd>

**$cache:** `?bool` — Whether to cache the feed response
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;externalFeeds-&gt;deleteExternalFeed($uuid)</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Deletes an external feed from your Brevo account.

**Use this to:**
- Remove external feeds that are no longer needed
- Clean up unused data sources
- Remove test or outdated feeds
- Maintain organized feed library

**Key information returned:**
- Success confirmation message

**Important considerations:**
- This action is PERMANENT and cannot be undone
- Feed configuration and history will be lost
- Check if feed is used in active campaigns before deletion
- Remove feed references from email templates
- Consider deactivating instead of deleting if unsure
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->externalFeeds->deleteExternalFeed(
    'b1c2d3e4-f5a6-47b8-89c0-d1e2f3a4b5c6',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID of the feed to delete
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## CustomObjects
<details><summary><code>$client-&gt;customObjects-&gt;upsertrecords($objectType, $request) -> UpsertrecordsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

<Note title="Enterprise access only">
Custom objects are only available to Enterprise plans.

This feature is in beta. These are subject to change.
</Note>

This API allows bulk upsert of object records in a single request. Each object record may include
  - Attributes
  - Identifiers
  - Associations
**Response:**
  The API processes the request asynchronously and returns a processId that you can use to track the background process status.
**API and Schema Limitation:**
  - Size:
      - Max 1000 objects records per request
      - Max request body size: 1 MB
  - Max 500 attributes defined per object record upsert request
    - This is coherent with schema limitation: an object cannot have more than 500 attributes.
    - Worth noting: Nothing happens If an attribute is mentioned in the request, but was not previously defined for the object schema (no error, no attribute creation)
  - Max 10 associations defined per object record upsert request
    - This is coherent with schema limitation: an object cannot have more than 10 associations with other objects. and each object record can be linked to max 10 other records.
**Errors:**
    - Make sure both object records exist before associating them, else the API will return an error.
    - This route does not create objects. The object where the object records are upserted by this API must be created already else the API will return an error "invalid object type".
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->customObjects->upsertrecords(
    'vehicle',
    new UpsertrecordsRequest([
        'records' => [
            new UpsertrecordsRequestRecordsItem([]),
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$objectType:** `string` — object type for the attribute
    
</dd>
</dl>

<dl>
<dd>

**$records:** `array` — List of object records to be upsert. Each record can have attributes, identifiers, and associations.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;customObjects-&gt;getrecords($objectType, $request) -> GetrecordsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

<Note title="Enterprise access only">
Custom objects are only available to Enterprise plans.

This feature is in beta. These are subject to change.
</Note>

This API retrieves a list of object records along with their associated records and provides the total count of records for the specified object. **Note**: Contact as object type is not supported in this endpoint.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->customObjects->getrecords(
    'vehicle',
    new GetrecordsRequest([
        'limit' => 1000000,
        'pageNum' => 1000000,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$objectType:** `string` — object type for the attribute
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `int` — Number of records returned per page
    
</dd>
</dl>

<dl>
<dd>

**$pageNum:** `int` — Page number for pagination. It's used to fetch the object records on a provided page number. Must be a valid positive integer.
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?string` — Sort order, must be 'asc' or 'desc'. Default to 'desc' if not provided.
    
</dd>
</dl>

<dl>
<dd>

**$association:** `?string` — Whether to include associations, must be 'true' or 'false'. Default to 'false' if not provided.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;customObjects-&gt;batchDeleteObjectRecords($objectType, $request) -> BatchDeleteObjectRecordsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Use this endpoint to delete multiple object records of the same object-type in one request.
The request is accepted and processed asynchronously.   You can track the status of the deletion process using the returned **processId**.
**API and Schema Limitations:** - Each request can contain up to **1000** object record identifiers   - If more records must be deleted → send multiple batch requests
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->customObjects->batchDeleteObjectRecords(
    'vehicle',
    new BatchDeleteObjectRecordsRequest([
        'identifiers' => new BatchDeleteObjectRecordsRequestIdentifiersIds([
            'ids' => [
                1,
            ],
        ]),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$objectType:** `string` — Object type for the records to delete
    
</dd>
</dl>

<dl>
<dd>

**$identifiers:** `BatchDeleteObjectRecordsRequestIdentifiersIds|BatchDeleteObjectRecordsRequestIdentifiersExtIds|null` — One of the below must be provided
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Contacts
<details><summary><code>$client-&gt;contacts-&gt;getContacts($request) -> GetContacts</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

<Note title="Follow this format when passing a SMS phone number as an attribute">
Accepted Number Formats

91xxxxxxxxxx
+91xxxxxxxxxx
0091xxxxxxxxxx
</Note>
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->contacts->getContacts(
    new GetContactsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$limit:** `?int` — Number of documents per page
    
</dd>
</dl>

<dl>
<dd>

**$offset:** `?int` — Index of the first document of the page
    
</dd>
</dl>

<dl>
<dd>

**$modifiedSince:** `?string` — Filter (urlencoded) the contacts modified after a given UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ). **Prefer to pass your timezone in date-time format for accurate result.**
    
</dd>
</dl>

<dl>
<dd>

**$createdSince:** `?string` — Filter (urlencoded) the contacts created after a given UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ). **Prefer to pass your timezone in date-time format for accurate result.**
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?string` — Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed
    
</dd>
</dl>

<dl>
<dd>

**$segmentId:** `?int` — Id of the segment. **Either listIds or segmentId can be passed.**
    
</dd>
</dl>

<dl>
<dd>

**$listIds:** `?int` — Ids of the list. **Either listIds or segmentId can be passed.**
    
</dd>
</dl>

<dl>
<dd>

**$filter:** `?string` — Filter the contacts on the basis of attributes. **Allowed operator: equals. For multiple-choice options, the filter will apply an AND condition between the options. For category attributes, the filter will work with both id and value. (e.g. filter=equals(FIRSTNAME,"Antoine"), filter=equals(B1, true), filter=equals(DOB, "1989-11-23"), filter=equals(GENDER, "1"), filter=equals(GENDER, "MALE"), filter=equals(COUNTRY,"USA, INDIA")**
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;contacts-&gt;createContact($request) -> CreateContactResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Creates new contacts on Brevo. Contacts can be created by passing either - <br><br> 1. email address of the contact (email_id),  <br> 2. phone number of the contact (to be passed as "SMS" field in "attributes" along with proper country code), For example- {"SMS":"+91xxxxxxxxxx"} or {"SMS":"0091xxxxxxxxxx"} <br> 3. ext_id <br>
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->contacts->createContact(
    new CreateContactRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$attributes:** `?array` — Pass the set of attributes and their values. The attribute's parameter should be passed in capital letter while creating a contact. Values that don't match the attribute type (e.g. text or string in a date attribute) will be ignored. **These attributes must be present in your Brevo account**. For eg: **{"FNAME":"Elly", "LNAME":"Roger", "COUNTRIES": ["India","China"]}**
    
</dd>
</dl>

<dl>
<dd>

**$email:** `?string` — Email address of the user. **Mandatory if "ext_id"  & "SMS" field is not passed.**
    
</dd>
</dl>

<dl>
<dd>

**$emailBlacklisted:** `?bool` — Set this field to blacklist the contact for emails (emailBlacklisted = true)
    
</dd>
</dl>

<dl>
<dd>

**$extId:** `?string` — Pass your own Id to create a contact.
    
</dd>
</dl>

<dl>
<dd>

**$listIds:** `?array` — Ids of the lists to add the contact to
    
</dd>
</dl>

<dl>
<dd>

**$smsBlacklisted:** `?bool` — Set this field to blacklist the contact for SMS (smsBlacklisted = true)
    
</dd>
</dl>

<dl>
<dd>

**$smtpBlacklistSender:** `?array` — transactional email forbidden sender for contact. Use only for email Contact ( only available if updateEnabled = true )
    
</dd>
</dl>

<dl>
<dd>

**$updateEnabled:** `?bool` — Facilitate to update the existing contact in the same request (updateEnabled = true)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;contacts-&gt;getAttributes() -> GetAttributesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->contacts->getAttributes();
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;contacts-&gt;createAttribute($attributeCategory, $attributeName, $request)</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->contacts->createAttribute(
    CreateAttributeRequestAttributeCategory::Normal->value,
    'attributeName',
    new CreateAttributeRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$attributeCategory:** `string` — Category of the attribute
    
</dd>
</dl>

<dl>
<dd>

**$attributeName:** `string` — Name of the attribute
    
</dd>
</dl>

<dl>
<dd>

**$enumeration:** `?array` — List of values and labels that the attribute can take. **Use only if the attribute's category is "category"**. None of the category options can exceed max 200 characters. For example: **[{"value":1, "label":"male"}, {"value":2, "label":"female"}]**
    
</dd>
</dl>

<dl>
<dd>

**$isRecurring:** `?bool` — Type of the attribute. **Use only if the attribute's category is 'calculated' or 'global'**
    
</dd>
</dl>

<dl>
<dd>

**$multiCategoryOptions:** `?array` — List of options you want to add for multiple-choice attribute. **Use only if the attribute's category is "normal" and attribute's type is "multiple-choice". None of the multicategory options can exceed max 200 characters.** For example: **["USA","INDIA"]**
    
</dd>
</dl>

<dl>
<dd>

**$type:** `?string` — Type of the attribute. **Use only if the attribute's category is 'normal', 'category' or 'transactional'** Type **user and multiple-choice** is only available if the category is **normal** attribute Type **id** is only available if the category is **transactional** attribute Type **category** is only available if the category is **category** attribute
    
</dd>
</dl>

<dl>
<dd>

**$value:** `?string` — Value of the attribute. **Use only if the attribute's category is 'calculated' or 'global'**
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;contacts-&gt;updateAttribute($attributeCategory, $attributeName, $request)</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->contacts->updateAttribute(
    UpdateAttributeRequestAttributeCategory::Category->value,
    'attributeName',
    new UpdateAttributeRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$attributeCategory:** `string` — Category of the attribute
    
</dd>
</dl>

<dl>
<dd>

**$attributeName:** `string` — Name of the existing attribute
    
</dd>
</dl>

<dl>
<dd>

**$enumeration:** `?array` — List of the values and labels that the attribute can take. **Use only if the attribute's category is "category"** None of the category options can exceed max 200 characters. For example, **[{"value":1, "label":"male"}, {"value":2, "label":"female"}]**
    
</dd>
</dl>

<dl>
<dd>

**$multiCategoryOptions:** `?array` — Use this option to add multiple-choice attributes options only if the attribute's category is "normal". **This option is specifically designed for updating multiple-choice attributes. None of the multicategory options can exceed max 200 characters.**. For example: **["USA","INDIA"]**
    
</dd>
</dl>

<dl>
<dd>

**$value:** `?string` — Value of the attribute to update. **Use only if the attribute's category is 'calculated' or 'global'**
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;contacts-&gt;deleteAttribute($attributeCategory, $attributeName)</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->contacts->deleteAttribute(
    DeleteAttributeRequestAttributeCategory::Normal->value,
    'attributeName',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$attributeCategory:** `string` — Category of the attribute
    
</dd>
</dl>

<dl>
<dd>

**$attributeName:** `string` — Name of the existing attribute
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;contacts-&gt;deleteMultiAttributeOptions($attributeType, $multipleChoiceAttribute, $multipleChoiceAttributeOption)</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->contacts->deleteMultiAttributeOptions(
    'multiple-choice',
    'multipleChoiceAttribute',
    'multipleChoiceAttributeOption',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$attributeType:** `string` — Type of the attribute
    
</dd>
</dl>

<dl>
<dd>

**$multipleChoiceAttribute:** `string` — Name of the existing multiple-choice attribute
    
</dd>
</dl>

<dl>
<dd>

**$multipleChoiceAttributeOption:** `string` — Name of the existing multiple-choice attribute option that you want to delete
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;contacts-&gt;updateBatchContacts($request)</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->contacts->updateBatchContacts(
    new UpdateBatchContactsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$contacts:** `?array` — List of contacts to be updated
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;contacts-&gt;createDoiContact($request)</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

<Note title="How to use attributes param?">
attributes param in this endpoint is an object containing key-value pairs where values can be either a string, integer, array, or boolean. You can create key-value pairs with these four datatypes. When a value is an array, it should be an array of strings.
</Note>
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->contacts->createDoiContact(
    new CreateDoiContactRequest([
        'email' => 'elly@example.com',
        'includeListIds' => [
            36,
        ],
        'redirectionUrl' => 'http://requestb.in/173lyyx1',
        'templateId' => 2,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$attributes:** `?array` — Pass the set of attributes and their values. **These attributes must be present in your Brevo account**. For eg. **{'FNAME':'Elly', 'LNAME':'Roger', 'COUNTRIES': ['India','China']}**
    
</dd>
</dl>

<dl>
<dd>

**$email:** `string` — Email address where the confirmation email will be sent. This email address will be the identifier for all other contact attributes.
    
</dd>
</dl>

<dl>
<dd>

**$excludeListIds:** `?array` — Lists under user account where contact should not be added
    
</dd>
</dl>

<dl>
<dd>

**$includeListIds:** `array` — Lists under user account where contact should be added
    
</dd>
</dl>

<dl>
<dd>

**$redirectionUrl:** `string` — URL of the web page that user will be redirected to after clicking on the double opt in URL. When editing your DOI template you can reference this URL by using the tag **{{ params.DOIurl }}**.
    
</dd>
</dl>

<dl>
<dd>

**$templateId:** `int` — Id of the Double opt-in (DOI) template
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;contacts-&gt;requestContactExport($request) -> RequestContactExportResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

It returns the background process ID which on completion calls the notify URL that you have set in the input. File will be available in csv.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->contacts->requestContactExport(
    new RequestContactExportRequest([
        'customContactFilter' => new RequestContactExportRequestCustomContactFilter([]),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$customContactFilter:** `RequestContactExportRequestCustomContactFilter` — Set the filter for the contacts to be exported.
    
</dd>
</dl>

<dl>
<dd>

**$disableNotification:** `?bool` — To avoid generating the email notification upon contact export, pass **true**
    
</dd>
</dl>

<dl>
<dd>

**$exportAttributes:** `?array` — List of all the attributes that you want to export. **These attributes must be present in your contact database. It is required if exportMandatoryAttributes is set false. ** For example: **['fname', 'lname', 'email']**
    
</dd>
</dl>

<dl>
<dd>

**$exportMandatoryAttributes:** `?bool` — To export mandatory attributes like EMAIL, ADDED_TIME, MODIFIED_TIME
    
</dd>
</dl>

<dl>
<dd>

**$exportMetadata:** `?array` — Export metadata of contacts such as _listIds, ADDED_TIME, MODIFIED_TIME.
    
</dd>
</dl>

<dl>
<dd>

**$exportDateInUtc:** `?bool` — Specifies whether the date fields createdAt, modifiedAt in the exported data should be returned in UTC format.
    
</dd>
</dl>

<dl>
<dd>

**$exportSubscriptionStatus:** `?array` — Export subscription status of contacts for email & sms marketting. Pass email_marketing to obtain the marketing email subscription status & sms_marketing to retrieve the marketing SMS status of the contact.
    
</dd>
</dl>

<dl>
<dd>

**$notifyUrl:** `?string` — Webhook that will be called once the export process is finished. For reference, https://help.brevo.com/hc/en-us/articles/360007666479
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;contacts-&gt;getFolders($request) -> GetFoldersResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

<Note>
Ongoing changes for this endpoint

We're dropping support for the response attributes totalSubscribers and totalBlacklisted.

These are non breaking changes.

The default value for the attributes will be 0.

The uniqueSubscribers field is deprecated
</Note>
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->contacts->getFolders(
    new GetFoldersRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$limit:** `?int` — Number of documents per page
    
</dd>
</dl>

<dl>
<dd>

**$offset:** `?int` — Index of the first document of the page
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?string` — Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;contacts-&gt;createFolder($request) -> CreateFolderResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->contacts->createFolder(
    new CreateUpdateFolder([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$request:** `CreateUpdateFolder` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;contacts-&gt;getFolder($folderId) -> GetFolder</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

<Note>
Ongoing changes for this endpoint.

We're dropping support for the response attributes totalSubscribers and totalBlacklisted.

These are non breaking changes. The default value for the attributes will be 0.
</Note>
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->contacts->getFolder(
    1000000,
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$folderId:** `int` — id of the folder
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;contacts-&gt;updateFolder($folderId, $request)</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->contacts->updateFolder(
    1000000,
    new UpdateFolderRequest([
        'body' => new CreateUpdateFolder([]),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$folderId:** `int` — Id of the folder
    
</dd>
</dl>

<dl>
<dd>

**$request:** `CreateUpdateFolder` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;contacts-&gt;deleteFolder($folderId)</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->contacts->deleteFolder(
    1000000,
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$folderId:** `int` — Id of the folder
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;contacts-&gt;getFolderLists($folderId, $request) -> GetFolderListsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

<Note>
Ongoing changes for this endpoint.

We're dropping support for the response attributes totalSubscribers and totalBlacklisted.

These are non breaking changes. The default value for the attributes will be 0.
</Note>
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->contacts->getFolderLists(
    1000000,
    new GetFolderListsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$folderId:** `int` — Id of the folder
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` — Number of documents per page
    
</dd>
</dl>

<dl>
<dd>

**$offset:** `?int` — Index of the first document of the page
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?string` — Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;contacts-&gt;importContacts($request) -> ImportContactsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

It returns the background process ID which on completion calls the notify URL that you have set in the input. **Note**: - Any contact attribute that doesn't exist in your account will be ignored at import end.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->contacts->importContacts(
    new ImportContactsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$disableNotification:** `?bool` — To disable email notification
    
</dd>
</dl>

<dl>
<dd>

**$emailBlacklist:** `?bool` — To blacklist all the contacts for email
    
</dd>
</dl>

<dl>
<dd>

**$emptyContactsAttributes:** `?bool` — To facilitate the choice to erase any attribute of the existing contacts with empty value. emptyContactsAttributes = true means the empty fields in your import will erase any attribute that currently contain data in Brevo, & emptyContactsAttributes = false means the empty fields will not affect your existing data ( **only available if `updateExistingContacts` set to true **)
    
</dd>
</dl>

<dl>
<dd>

**$fileBody:** `?string` — **Mandatory if fileUrl and jsonBody is not defined.** CSV content to be imported. Use semicolon to separate multiple attributes. **Maximum allowed file body size is 10MB** . However we recommend a safe limit of around 8 MB to avoid the issues caused due to increase of file body size while parsing. Please use fileUrl instead to import bigger files.
    
</dd>
</dl>

<dl>
<dd>

**$fileUrl:** `?string` — **Mandatory if fileBody and jsonBody is not defined.** URL of the file to be imported (**no local file**). Possible file formats: #### .txt, .csv, .json
    
</dd>
</dl>

<dl>
<dd>

**$jsonBody:** `?array` — **Mandatory if fileUrl and fileBody is not defined.** JSON content to be imported. **Maximum allowed json body size is 10MB** . However we recommend a safe limit of around 8 MB to avoid the issues caused due to increase of json body size while parsing. Please use fileUrl instead to import bigger files.
    
</dd>
</dl>

<dl>
<dd>

**$listIds:** `?array` — **Mandatory if newList is not defined.** Ids of the lists in which the contacts shall be imported. For example, **[2, 4, 7]**.
    
</dd>
</dl>

<dl>
<dd>

**$newList:** `?ImportContactsRequestNewList` — To create a new list and import the contacts into it, pass the listName and an optional folderId.
    
</dd>
</dl>

<dl>
<dd>

**$notifyUrl:** `?string` — URL that will be called once the import process is finished. For reference, https://help.brevo.com/hc/en-us/articles/360007666479
    
</dd>
</dl>

<dl>
<dd>

**$smsBlacklist:** `?bool` — To blacklist all the contacts for sms
    
</dd>
</dl>

<dl>
<dd>

**$updateExistingContacts:** `?bool` — To facilitate the choice to update the existing contacts
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;contacts-&gt;getLists($request) -> GetListsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

<Note>
Ongoing changes for this endpoint.

We're dropping support for the response attributes totalSubscribers and totalBlacklisted.

These are non breaking changes. The default value for the attributes will be 0.
</Note>
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->contacts->getLists(
    new GetListsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$limit:** `?int` — Number of documents per page
    
</dd>
</dl>

<dl>
<dd>

**$offset:** `?int` — Index of the first document of the page
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?string` — Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;contacts-&gt;createList($request) -> CreateListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->contacts->createList(
    new CreateListRequest([
        'folderId' => 2,
        'name' => 'Magento Customer - ES',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$folderId:** `int` — Id of the parent folder in which this list is to be created
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` — Name of the list
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;contacts-&gt;getList($listId, $request) -> GetListResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->contacts->getList(
    1000000,
    new GetListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$listId:** `int` — Id of the list
    
</dd>
</dl>

<dl>
<dd>

**$startDate:** `?string` — **Mandatory if endDate is used**. Ending (urlencoded) UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) to aggregate the sent email campaigns for a specific list id. **Prefer to pass your timezone in date-time format for accurate result**
    
</dd>
</dl>

<dl>
<dd>

**$endDate:** `?string` — **Mandatory if startDate is used**. Ending (urlencoded) UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) to aggregate the sent email campaigns for a specific list id. **Prefer to pass your timezone in date-time format for accurate result**
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;contacts-&gt;updateList($listId, $request)</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->contacts->updateList(
    1000000,
    new UpdateListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$listId:** `int` — Id of the list
    
</dd>
</dl>

<dl>
<dd>

**$folderId:** `?int` — Id of the folder in which the list is to be moved. Either of the two parameters (name, folderId) can be updated at a time.
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` — Name of the list. Either of the two parameters (name, folderId) can be updated at a time.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;contacts-&gt;deleteList($listId)</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->contacts->deleteList(
    1000000,
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$listId:** `int` — Id of the list
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;contacts-&gt;getContactsFromList($listId, $request) -> GetContacts</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->contacts->getContactsFromList(
    1000000,
    new GetContactsFromListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$listId:** `int` — Id of the list
    
</dd>
</dl>

<dl>
<dd>

**$modifiedSince:** `?string` — Filter (urlencoded) the contacts modified after a given UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ). **Prefer to pass your timezone in date-time format for accurate result.**
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` — Number of documents per page
    
</dd>
</dl>

<dl>
<dd>

**$offset:** `?int` — Index of the first document of the page
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?string` — Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;contacts-&gt;addContactToList($listId, $request) -> PostContactInfo</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->contacts->addContactToList(
    1000000,
    new AddContactToListRequest([
        'body' => new AddContactToListRequestBodyEmails([
            'emails' => [
                'jeff32@example.com',
                'jim56@example.com',
            ],
        ]),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$listId:** `int` — Id of the list
    
</dd>
</dl>

<dl>
<dd>

**$request:** `AddContactToListRequestBodyEmails|AddContactToListRequestBodyIds|AddContactToListRequestBodyExtIds` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;contacts-&gt;removeContactFromList($listId, $request) -> PostContactInfo</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->contacts->removeContactFromList(
    1000000,
    new RemoveContactFromListRequest([
        'body' => new RemoveContactFromListRequestBodyEmails([]),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$listId:** `int` — Id of the list
    
</dd>
</dl>

<dl>
<dd>

**$request:** `RemoveContactFromListRequestBodyEmails|RemoveContactFromListRequestBodyIds|RemoveContactFromListRequestBodyAll|RemoveContactFromListRequestBodyExtIds` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;contacts-&gt;getSegments($request) -> GetSegmentsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->contacts->getSegments(
    new GetSegmentsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$limit:** `?int` — Number of documents per page
    
</dd>
</dl>

<dl>
<dd>

**$offset:** `?int` — Index of the first document of the page
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?string` — Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;contacts-&gt;getContactInfo($identifier, $request) -> GetContactInfoResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

<Note title="Follow this format when passing a SMS phone number as an attribute">
Accepted Number Formats

91xxxxxxxxxx
+91xxxxxxxxxx
0091xxxxxxxxxx
</Note>

There are 2 ways to get a contact <br><br> Option 1- https://api.brevo.com/v3/contacts/{identifier} <br><br> Option 2- https://api.brevo.com/v3/contacts/{identifier}?identifierType={} <br> <br> Option 1 only works if identifierType is email_id (for EMAIL), phone_id (for SMS) or contact_id (for ID of the contact),where you can directly pass the value of EMAIL, SMS and ID of the contact.   <br><br> Option 2 works for all identifierType, use email_id for EMAIL attribute, phone_id for SMS attribute, contact_id for ID of the contact, ext_id for EXT_ID attribute, whatsapp_id for WHATSAPP attribute, landline_number_id for LANDLINE_NUMBER attribute <br><br>Along with the contact details, this endpoint will show the statistics of contact for the recent 90 days by default. To fetch the earlier statistics, please use Get contact campaign stats ``https://developers.brevo.com/reference/contacts-7#getcontactstats`` endpoint with the appropriate date ranges.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->contacts->getContactInfo(
    'identifier',
    new GetContactInfoRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$identifier:** `string|int` — Email (urlencoded) OR ID of the contact OR its SMS attribute value OR EXT_ID attribute (urlencoded)
    
</dd>
</dl>

<dl>
<dd>

**$identifierType:** `?string` — email_id for Email, phone_id for SMS attribute, contact_id for ID of the contact, ext_id for EXT_ID attribute, whatsapp_id for WHATSAPP attribute, landline_number_id for LANDLINE_NUMBER attribute
    
</dd>
</dl>

<dl>
<dd>

**$startDate:** `?string` — **Mandatory if endDate is used.** Starting date (YYYY-MM-DD) of the statistic events specific to campaigns. Must be lower than equal to endDate
    
</dd>
</dl>

<dl>
<dd>

**$endDate:** `?string` — **Mandatory if startDate is used.** Ending date (YYYY-MM-DD) of the statistic events specific to campaigns. Must be greater than equal to startDate.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;contacts-&gt;updateContact($identifier, $request)</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

There are 2 ways to update a contact <br><br> Option 1- https://api.brevo.com/v3/contacts/{identifier} <br><br> Option 2- https://api.brevo.com/v3/contacts/{identifier}?identifierType={} <br> <br> Option 1 only works if identifierType is email_id (for EMAIL) or contact_id (for ID of the contact),where you can directly pass the value of EMAIL and ID of the contact.   <br><br> Option 2 works for all identifierType, use email_id for EMAIL attribute, contact_id for ID of the contact, ext_id for EXT_ID attribute, phone_id for SMS attribute, whatsapp_id for WHATSAPP attribute, landline_number_id for LANDLINE attribute
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->contacts->updateContact(
    'identifier',
    new UpdateContactRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$identifier:** `string|int` — Email (urlencoded) OR ID of the contact OR EXT_ID attribute (urlencoded) OR its SMS attribute value OR its WHATSAPP attribute value OR its LANDLINE attribute value
    
</dd>
</dl>

<dl>
<dd>

**$identifierType:** `?string` — email_id for Email, contact_id for ID of the contact, ext_id for EXT_ID attribute, phone_id for SMS attribute, whatsapp_id for WHATSAPP attribute, landline_number_id for LANDLINE attribute
    
</dd>
</dl>

<dl>
<dd>

**$attributes:** `?array` — Pass the set of attributes to be updated. **These attributes must be present in your account**. To update existing email address of a contact with the new one please pass EMAIL in attributes. For example, **{ "EMAIL":"newemail@domain.com", "FNAME":"Ellie", "LNAME":"Roger", "COUNTRIES":["India","China"]}**. The attribute's parameter should be passed in capital letter while updating a contact. Values that don't match the attribute type (e.g. text or string in a date attribute) will be ignored .Keep in mind transactional attributes can be updated the same way as normal attributes. Mobile Number in **SMS** field should be passed with proper country code. For example: **{"SMS":"+91xxxxxxxxxx"} or {"SMS":"0091xxxxxxxxxx"}**
    
</dd>
</dl>

<dl>
<dd>

**$emailBlacklisted:** `?bool` — Set/unset this field to blacklist/allow the contact for emails (emailBlacklisted = true)
    
</dd>
</dl>

<dl>
<dd>

**$extId:** `?string` — Pass your own Id to update ext_id of a contact.
    
</dd>
</dl>

<dl>
<dd>

**$listIds:** `?array` — Ids of the lists to add the contact to
    
</dd>
</dl>

<dl>
<dd>

**$smsBlacklisted:** `?bool` — Set/unset this field to blacklist/allow the contact for SMS (smsBlacklisted = true)
    
</dd>
</dl>

<dl>
<dd>

**$smtpBlacklistSender:** `?array` — transactional email forbidden sender for contact. Use only for email Contact
    
</dd>
</dl>

<dl>
<dd>

**$unlinkListIds:** `?array` — Ids of the lists to remove the contact from
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;contacts-&gt;deleteContact($identifier, $request)</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

There are 2 ways to delete a contact <br><br> Option 1- https://api.brevo.com/v3/contacts/{identifier} <br><br> Option 2- https://api.brevo.com/v3/contacts/{identifier}?identifierType={} <br> <br> Option 1 only works if identifierType is email_id (for EMAIL) or contact_id (for ID of the contact),where you can directly pass the value of EMAIL and ID of the contact.   <br><br> Option 2 works for all identifierType, use email_id for EMAIL attribute, contact_id for ID of the contact, ext_id for EXT_ID attribute, phone_id for SMS attribute, whatsapp_id for WHATSAPP attribute, landline_number_id for LANDLINE_NUMBER attribute.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->contacts->deleteContact(
    'identifier',
    new DeleteContactRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$identifier:** `string|int` — Email (urlencoded) OR ID of the contact OR EXT_ID attribute (urlencoded)
    
</dd>
</dl>

<dl>
<dd>

**$identifierType:** `?string` — email_id for Email, contact_id for ID of the contact, ext_id for EXT_ID attribute, phone_id for SMS attribute, whatsapp_id for WHATSAPP attribute, landline_number_id for LANDLINE_NUMBER attribute
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;contacts-&gt;getContactStats($identifier, $request) -> GetContactStatsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->contacts->getContactStats(
    'identifier',
    new GetContactStatsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$identifier:** `string|int` — Email (urlencoded) OR ID of the contact
    
</dd>
</dl>

<dl>
<dd>

**$startDate:** `?string` — **Mandatory if endDate is used.** Starting date (YYYY-MM-DD) of the statistic events specific to campaigns. Must be lower than equal to endDate
    
</dd>
</dl>

<dl>
<dd>

**$endDate:** `?string` — **Mandatory if startDate is used.** Ending date (YYYY-MM-DD) of the statistic events specific to campaigns. Must be greater than equal to startDate. Maximum difference between startDate and endDate should not be greater than 90 days
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Conversations
<details><summary><code>$client-&gt;conversations-&gt;setsAgentsStatusToOnlineFor23Minutes($request)</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

We recommend pinging this endpoint every minute for as long as the agent has to be considered online.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->conversations->setsAgentsStatusToOnlineFor23Minutes(
    new PostConversationsAgentOnlinePingRequest([
        'agentId' => "d9nKoegKSjmCtyK78",
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$agentEmail:** `mixed` — agent email. When sending online pings from a standalone system, it’s hard to maintain a 1-to-1 relationship between the users of both systems. In this case, an agent can be specified by their email address. If there’s no agent with the specified email address in your Brevo organization, a dummy agent will be created automatically.
    
</dd>
</dl>

<dl>
<dd>

**$agentId:** `mixed` — agent ID. It can be found on agent’s page or received <a href="https://developers.brevo.com/docs/conversations-webhooks">from a webhook</a>. Alternatively, you can use `agentEmail` + `agentName` + `receivedFrom` instead (all 3 fields required).
    
</dd>
</dl>

<dl>
<dd>

**$agentName:** `mixed` — agent name
    
</dd>
</dl>

<dl>
<dd>

**$receivedFrom:** `mixed` — mark your messages to distinguish messages created by you from the others.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;conversations-&gt;sendAMessageAsAnAgent($request) -> ConversationsMessage</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->conversations->sendAMessageAsAnAgent(
    new PostConversationsMessagesRequest([
        'agentId' => "d9nKoegKSjmCtyK78",
        'text' => "Hello! How can I help you?",
        'visitorId' => "kZMvWhf8npAu3H6qd57w2Hv6nh6rnxvg",
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$agentEmail:** `mixed` — agent email. When sending messages from a standalone system, it’s hard to maintain a 1-to-1 relationship between the users of both systems. In this case, an agent can be specified by their email address.
    
</dd>
</dl>

<dl>
<dd>

**$agentId:** `mixed` — agent ID. It can be found on agent’s page or received <a href="https://developers.brevo.com/docs/conversations-webhooks">from a webhook</a>. Alternatively, you can use `agentEmail` + `agentName` + `receivedFrom` instead (all 3 fields required).
    
</dd>
</dl>

<dl>
<dd>

**$agentName:** `mixed` — agent name
    
</dd>
</dl>

<dl>
<dd>

**$receivedFrom:** `mixed` — mark your messages to distinguish messages created by you from the others.
    
</dd>
</dl>

<dl>
<dd>

**$text:** `mixed` 
    
</dd>
</dl>

<dl>
<dd>

**$visitorId:** `mixed` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;conversations-&gt;getAMessage($id) -> ConversationsMessage</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->conversations->getAMessage(
    'id',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — ID of the message
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;conversations-&gt;updateAMessageSentByAnAgent($id, $request) -> ConversationsMessage</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Only agents’ messages can be edited.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->conversations->updateAMessageSentByAnAgent(
    'id',
    new PutConversationsMessagesIdRequest([
        'text' => 'Good morning! How can I help you?',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — ID of the message
    
</dd>
</dl>

<dl>
<dd>

**$text:** `string` — edited message text
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;conversations-&gt;deleteAMessageSentByAnAgent($id)</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Only agents’ messages can be deleted.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->conversations->deleteAMessageSentByAnAgent(
    'id',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — ID of the message
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;conversations-&gt;sendAnAutomatedMessageToAVisitor($request) -> ConversationsMessage</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Example of automated messages: order status, announce new features in your web app, etc.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->conversations->sendAnAutomatedMessageToAVisitor(
    new PostConversationsPushedMessagesRequest([
        'groupId' => "PjRBMhWGen6aRHjif",
        'text' => "Your order has shipped! Here’s your tracking number: 9114 5847 3325 9667 4328 88",
        'visitorId' => "kZMvWhf8npAu3H6qd57w2Hv6nh6rnxvg",
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$agentId:** `mixed` — agent ID. It can be found on agent’s page or received <a href="https://developers.brevo.com/docs/conversations-webhooks">from a webhook</a>.
    
</dd>
</dl>

<dl>
<dd>

**$groupId:** `mixed` — group ID. It can be found on group’s page.
    
</dd>
</dl>

<dl>
<dd>

**$text:** `mixed` 
    
</dd>
</dl>

<dl>
<dd>

**$visitorId:** `mixed` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;conversations-&gt;getAnAutomatedMessage($id) -> ConversationsMessage</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->conversations->getAnAutomatedMessage(
    'id',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — ID of the message sent previously
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;conversations-&gt;updateAnAutomatedMessage($id, $request) -> ConversationsMessage</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->conversations->updateAnAutomatedMessage(
    'id',
    new PutConversationsPushedMessagesIdRequest([
        'text' => 'Your order has shipped! Here’s your tracking number: 9114 5847 4668 7775 9233 54',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — ID of the message
    
</dd>
</dl>

<dl>
<dd>

**$text:** `string` — edited message text
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;conversations-&gt;deleteAnAutomatedMessage($id)</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->conversations->deleteAnAutomatedMessage(
    'id',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — ID of the message
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;conversations-&gt;setVisitorGroupAssignment($request) -> PutConversationsVisitorGroupResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Assigns a visitor to a specific agent group or removes them from their current group.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->conversations->setVisitorGroupAssignment(
    new PutConversationsVisitorGroupRequest([
        'groupId' => "PjRBMhWGen6aRHjif",
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$groupId:** `mixed` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Ecommerce
<details><summary><code>$client-&gt;ecommerce-&gt;getCategories($request) -> GetCategoriesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ecommerce->getCategories(
    new GetCategoriesRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$limit:** `?int` — Number of documents per page
    
</dd>
</dl>

<dl>
<dd>

**$offset:** `?int` — Index of the first document in the page
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?string` — Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed
    
</dd>
</dl>

<dl>
<dd>

**$ids:** `?string` — Filter by category ids
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` — Filter by category name
    
</dd>
</dl>

<dl>
<dd>

**$modifiedSince:** `?string` — Filter (urlencoded) the categories modified after a given UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ). **Prefer to pass your timezone in date-time format for accurate result.**
    
</dd>
</dl>

<dl>
<dd>

**$createdSince:** `?string` — Filter (urlencoded) the categories created after a given UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ). **Prefer to pass your timezone in date-time format for accurate result.**
    
</dd>
</dl>

<dl>
<dd>

**$isDeleted:** `?string` — Filter categories by their deletion status. If `false` is passed, only categories that are not deleted will be returned.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ecommerce-&gt;createUpdateCategory($request) -> CreateUpdateCategoryResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ecommerce->createUpdateCategory(
    new CreateUpdateCategoryRequest([
        'id' => 'CAT123',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$deletedAt:** `?string` — UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) of the category deleted from the shop's database
    
</dd>
</dl>

<dl>
<dd>

**$id:** `string` — Unique Category ID as saved in the shop
    
</dd>
</dl>

<dl>
<dd>

**$isDeleted:** `?bool` — category deleted from the shop's database
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` — **Mandatory in case of creation**. Name of the Category, as displayed in the shop
    
</dd>
</dl>

<dl>
<dd>

**$updateEnabled:** `?bool` — Facilitate to update the existing category in the same request (updateEnabled = true)
    
</dd>
</dl>

<dl>
<dd>

**$url:** `?string` — URL to the category
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ecommerce-&gt;createUpdateBatchCategory($request) -> CreateUpdateBatchCategoryResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ecommerce->createUpdateBatchCategory(
    new CreateUpdateBatchCategoryRequest([
        'categories' => [
            new CreateUpdateBatchCategoryRequestCategoriesItem([
                'id' => 'CAT123',
            ]),
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$categories:** `array` — array of categories objects
    
</dd>
</dl>

<dl>
<dd>

**$updateEnabled:** `?bool` — Facilitate to update the existing categories in the same request (updateEnabled = true)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ecommerce-&gt;getCategoryInfo($id) -> GetCategoryDetails</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ecommerce->getCategoryInfo(
    'id',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — Category ID
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ecommerce-&gt;activateTheECommerceApp()</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Getting access to Brevo eCommerce.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ecommerce->activateTheECommerceApp();
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ecommerce-&gt;getAttributionMetricsForOneOrMoreBrevoCampaignsOrWorkflows($request) -> GetEcommerceAttributionMetricsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ecommerce->getAttributionMetricsForOneOrMoreBrevoCampaignsOrWorkflows(
    new GetEcommerceAttributionMetricsRequest([
        'periodFrom' => new DateTime('2022-01-02T00:00:00Z'),
        'periodTo' => new DateTime('2022-01-03T00:00:00Z'),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$periodFrom:** `?DateTime` — When getting metrics for a specific period, define the starting datetime in RFC3339 format
    
</dd>
</dl>

<dl>
<dd>

**$periodTo:** `?DateTime` — When getting metrics for a specific period, define the end datetime in RFC3339 format
    
</dd>
</dl>

<dl>
<dd>

**$emailCampaignIdArray:** `?string` — The email campaign ID(s) to get metrics for
    
</dd>
</dl>

<dl>
<dd>

**$smsCampaignIdArray:** `?string` — The SMS campaign ID(s) to get metrics for
    
</dd>
</dl>

<dl>
<dd>

**$automationWorkflowEmailIdArray:** `?string` — The automation workflow ID(s) to get email attribution metrics for
    
</dd>
</dl>

<dl>
<dd>

**$automationWorkflowSmsIdArray:** `?string` — The automation workflow ID(s) to get SMS attribution metrics for
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ecommerce-&gt;getDetailedAttributionMetricsForASingleBrevoCampaignOrWorkflow($conversionSource, $conversionSourceId) -> GetEcommerceAttributionMetricsConversionSourceConversionSourceIdResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ecommerce->getDetailedAttributionMetricsForASingleBrevoCampaignOrWorkflow(
    GetEcommerceAttributionMetricsConversionSourceConversionSourceIdRequestConversionSource::EmailCampaign->value,
    'sale',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$conversionSource:** `string` — The Brevo campaign type or workflow type for which data will be retrieved
    
</dd>
</dl>

<dl>
<dd>

**$conversionSourceId:** `string` — The Brevo campaign or automation workflow id for which data will be retrieved
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ecommerce-&gt;getAttributedProductSalesForASingleBrevoCampaignOrWorkflow($conversionSource, $conversionSourceId) -> GetEcommerceAttributionProductsConversionSourceConversionSourceIdResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ecommerce->getAttributedProductSalesForASingleBrevoCampaignOrWorkflow(
    GetEcommerceAttributionProductsConversionSourceConversionSourceIdRequestConversionSource::EmailCampaign->value,
    'sale',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$conversionSource:** `string` — The Brevo campaign or automation workflow type for which data will be retrieved
    
</dd>
</dl>

<dl>
<dd>

**$conversionSourceId:** `string` — The Brevo campaign or automation workflow id for which data will be retrieved
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ecommerce-&gt;getTheIso4217CompliantDisplayCurrencyCodeForYourBrevoAccount() -> GetEcommerceConfigDisplayCurrencyResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ecommerce->getTheIso4217CompliantDisplayCurrencyCodeForYourBrevoAccount();
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ecommerce-&gt;setConfigDisplayCurrency($request) -> SetConfigDisplayCurrencyResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ecommerce->setConfigDisplayCurrency(
    new SetConfigDisplayCurrencyRequest([
        'code' => 'EUR',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$code:** `string` — ISO 4217 compliant display currency code
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ecommerce-&gt;getOrders($request) -> mixed</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Get all the orders
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ecommerce->getOrders(
    new GetOrdersRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$limit:** `?int` — Number of documents per page
    
</dd>
</dl>

<dl>
<dd>

**$offset:** `?int` — Index of the first document in the page
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?string` — Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed
    
</dd>
</dl>

<dl>
<dd>

**$modifiedSince:** `?string` — Filter (urlencoded) the orders modified after a given UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ). **Prefer to pass your timezone in date-time format for accurate result.**
    
</dd>
</dl>

<dl>
<dd>

**$createdSince:** `?string` — Filter (urlencoded) the orders created after a given UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ). **Prefer to pass your timezone in date-time format for accurate result.**
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ecommerce-&gt;createOrder($request)</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Manages the transactional status of the order
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ecommerce->createOrder(
    new Order([
        'amount' => 308.42,
        'createdAt' => '2021-07-29T20:59:23.383Z',
        'id' => '14',
        'products' => [
            new OrderProductsItem([
                'price' => 99.99,
                'productId' => 'P1',
                'quantity' => 10,
            ]),
        ],
        'status' => 'completed',
        'updatedAt' => '2021-07-30T10:59:23.383Z',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$request:** `Order` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ecommerce-&gt;createBatchOrder($request) -> CreateBatchOrderResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Create multiple orders at one time instead of one order at a time
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ecommerce->createBatchOrder(
    new CreateBatchOrderRequest([
        'orders' => [
            new Order([
                'amount' => 308.42,
                'createdAt' => '2021-07-29T20:59:23.383Z',
                'id' => '14',
                'products' => [
                    new OrderProductsItem([
                        'price' => 99.99,
                        'productId' => 'P1',
                        'quantity' => 10,
                    ]),
                ],
                'status' => 'completed',
                'updatedAt' => '2021-07-30T10:59:23.383Z',
            ]),
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$historical:** `?bool` — Defines wether you want your orders to be considered as live data or as historical data (import of past data, synchronising data). True: orders will not trigger any automation workflows. False: orders will trigger workflows as usual.
    
</dd>
</dl>

<dl>
<dd>

**$notifyUrl:** `?string` — Notify Url provided by client_dev to get the status of batch request
    
</dd>
</dl>

<dl>
<dd>

**$orders:** `array` — array of order objects
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ecommerce-&gt;getProducts($request) -> GetProductsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ecommerce->getProducts(
    new GetProductsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$limit:** `?int` — Number of documents per page
    
</dd>
</dl>

<dl>
<dd>

**$offset:** `?int` — Index of the first document in the page
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?string` — Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed
    
</dd>
</dl>

<dl>
<dd>

**$ids:** `?string` — Filter by product ids
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` — Filter by product name, minimum 3 characters should be present for search.
    
</dd>
</dl>

<dl>
<dd>

**$priceLte:** `?float` — Price filter for products less than and equals to particular amount
    
</dd>
</dl>

<dl>
<dd>

**$priceGte:** `?float` — Price filter for products greater than and equals to particular amount
    
</dd>
</dl>

<dl>
<dd>

**$priceLt:** `?float` — Price filter for products less than particular amount
    
</dd>
</dl>

<dl>
<dd>

**$priceGt:** `?float` — Price filter for products greater than particular amount
    
</dd>
</dl>

<dl>
<dd>

**$priceEq:** `?float` — Price filter for products equals to particular amount
    
</dd>
</dl>

<dl>
<dd>

**$priceNe:** `?float` — Price filter for products not equals to particular amount
    
</dd>
</dl>

<dl>
<dd>

**$categories:** `?string` — Filter by categories ids
    
</dd>
</dl>

<dl>
<dd>

**$modifiedSince:** `?string` — Filter (urlencoded) the orders modified after a given UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ). **Prefer to pass your timezone in date-time format for accurate result.**
    
</dd>
</dl>

<dl>
<dd>

**$createdSince:** `?string` — Filter (urlencoded) the orders created after a given UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ). **Prefer to pass your timezone in date-time format for accurate result.**
    
</dd>
</dl>

<dl>
<dd>

**$isDeleted:** `?string` — Filter products by their deletion status. If `false` is passed, only products that are not deleted will be returned.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ecommerce-&gt;createUpdateProduct($request) -> CreateUpdateProductResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ecommerce->createUpdateProduct(
    new CreateUpdateProductRequest([
        'id' => 'P11',
        'name' => 'Iphone 11',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$categories:** `?array` — Category ID-s of the product
    
</dd>
</dl>

<dl>
<dd>

**$deletedAt:** `?string` — UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) of the product deleted from the shop's database
    
</dd>
</dl>

<dl>
<dd>

**$id:** `string` — Product ID for which you requested the details
    
</dd>
</dl>

<dl>
<dd>

**$imageUrl:** `?string` — Absolute URL to the cover image of the product
    
</dd>
</dl>

<dl>
<dd>

**$isDeleted:** `?bool` — product deleted from the shop's database
    
</dd>
</dl>

<dl>
<dd>

**$metaInfo:** `?array` — Meta data of product such as description, vendor, producer, stock level. The size of cumulative metaInfo shall not exceed **1000 KB**. Maximum length of metaInfo object can be 20.
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` — Mandatory in case of creation**. Name of the product for which you requested the details
    
</dd>
</dl>

<dl>
<dd>

**$parentId:** `?string` — Parent product id of the product
    
</dd>
</dl>

<dl>
<dd>

**$price:** `?float` — Price of the product
    
</dd>
</dl>

<dl>
<dd>

**$sku:** `?string` — Product identifier from the shop
    
</dd>
</dl>

<dl>
<dd>

**$stock:** `?float` — Current stock value of the product from the shop's database
    
</dd>
</dl>

<dl>
<dd>

**$updateEnabled:** `?bool` — Facilitate to update the existing category in the same request (updateEnabled = true)
    
</dd>
</dl>

<dl>
<dd>

**$url:** `?string` — URL to the product
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ecommerce-&gt;createUpdateBatchProducts($request) -> CreateUpdateBatchProductsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ecommerce->createUpdateBatchProducts(
    new CreateUpdateBatchProductsRequest([
        'products' => [
            new CreateUpdateBatchProductsRequestProductsItem([
                'id' => 'P11',
                'name' => 'Iphone 11',
            ]),
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$products:** `array` — array of products objects
    
</dd>
</dl>

<dl>
<dd>

**$updateEnabled:** `?bool` — Facilitate to update the existing categories in the same request (updateEnabled = true)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ecommerce-&gt;getProductInfo($id) -> GetProductDetails</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ecommerce->getProductInfo(
    'id',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — Product ID
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;ecommerce-&gt;createProductAlert($id, $type, $request)</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->ecommerce->createProductAlert(
    'id',
    'back_in_stock',
    new CreateProductAlertRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — Product ID
    
</dd>
</dl>

<dl>
<dd>

**$type:** `string` — Alert type
    
</dd>
</dl>

<dl>
<dd>

**$contactIdentifiers:** `?CreateProductAlertRequestContactIdentifiers` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Coupons
<details><summary><code>$client-&gt;coupons-&gt;getCouponCollections($request) -> GetCouponCollection</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->coupons->getCouponCollections(
    new GetCouponCollectionsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$limit:** `?int` — Number of documents returned per page
    
</dd>
</dl>

<dl>
<dd>

**$offset:** `?int` — Index of the first document on the page
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?string` — Sort the results by creation time in ascending/descending order
    
</dd>
</dl>

<dl>
<dd>

**$sortBy:** `?string` — The field used to sort coupon collections
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;coupons-&gt;createCouponCollection($request) -> CreateCouponCollectionResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->coupons->createCouponCollection(
    new CreateCouponCollectionRequest([
        'defaultCoupon' => 'Winter',
        'name' => '10%OFF',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$defaultCoupon:** `string` — Default coupons collection name
    
</dd>
</dl>

<dl>
<dd>

**$expirationDate:** `?DateTime` — Specify an expiration date for the coupon collection in RFC3339 format. Use null to remove the expiration date.
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` — Name of the coupons collection
    
</dd>
</dl>

<dl>
<dd>

**$remainingCouponsAlert:** `?int` — Send a notification alert (email) when the remaining coupons count is equal or fall bellow this number. Use null to disable alerts.
    
</dd>
</dl>

<dl>
<dd>

**$remainingDaysAlert:** `?int` — Send a notification alert (email) when the remaining days until the expiration date are equal or fall bellow this number. Use null to disable alerts.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;coupons-&gt;getCouponCollection($id) -> GetCouponCollection</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->coupons->getCouponCollection(
    'id',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — Id of the collection to return
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;coupons-&gt;updateCouponCollection($id, $request) -> UpdateCouponCollectionResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->coupons->updateCouponCollection(
    'id',
    new UpdateCouponCollectionRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — Id of the collection to update
    
</dd>
</dl>

<dl>
<dd>

**$defaultCoupon:** `?string` — A default coupon to be used in case there are no coupons left
    
</dd>
</dl>

<dl>
<dd>

**$expirationDate:** `?DateTime` — Specify an expiration date for the coupon collection in RFC3339 format. Use null to remove the expiration date.
    
</dd>
</dl>

<dl>
<dd>

**$remainingCouponsAlert:** `?int` — Send a notification alert (email) when the remaining coupons count is equal or fall bellow this number. Use null to disable alerts.
    
</dd>
</dl>

<dl>
<dd>

**$remainingDaysAlert:** `?int` — Send a notification alert (email) when the remaining days until the expiration date are equal or fall bellow this number. Use null to disable alerts.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;coupons-&gt;createCoupons($request)</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->coupons->createCoupons(
    new CreateCouponsRequest([
        'collectionId' => '23befbae-1505-47a8-bd27-e30ef739f32c',
        'coupons' => [
            'Uf12AF',
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$collectionId:** `string` — The id of the coupon collection for which the coupons will be created
    
</dd>
</dl>

<dl>
<dd>

**$coupons:** `array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Payments
<details><summary><code>$client-&gt;payments-&gt;createPaymentRequest($request) -> CreatePaymentRequestResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->payments->createPaymentRequest(
    new CreatePaymentRequestRequest([
        'cart' => new Cart([
            'currency' => 'EUR',
            'specificAmount' => 1200,
        ]),
        'contactId' => 43,
        'reference' => 'Invoice #INV0001',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$cart:** `Cart` 
    
</dd>
</dl>

<dl>
<dd>

**$configuration:** `?Configuration` 
    
</dd>
</dl>

<dl>
<dd>

**$contactId:** `int` — Brevo ID of the contact requested to pay.
    
</dd>
</dl>

<dl>
<dd>

**$description:** `?string` — Description of payment request.
    
</dd>
</dl>

<dl>
<dd>

**$notification:** `?Notification` 
    
</dd>
</dl>

<dl>
<dd>

**$reference:** `string` — Reference of the payment request, it will appear on the payment page.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;payments-&gt;getPaymentRequest($id) -> GetPaymentRequestResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->payments->getPaymentRequest(
    '050db7b0-9bb7-4c1e-9c68-5a8dace8c1dc',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — Id of the payment Request
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;payments-&gt;deletePaymentRequest($id)</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->payments->deletePaymentRequest(
    '9ae7d68a-565c-4695-9381-d8fb3e3a14cc',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — ID of the payment request.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Event
<details><summary><code>$client-&gt;event-&gt;createEvent($request)</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Create an event to track a contact's interaction.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->event->createEvent(
    new CreateEventRequest([
        'eventName' => 'video_played',
        'identifiers' => new CreateEventRequestIdentifiers([]),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$contactProperties:** `?array` — Properties defining the state of the contact associated to this event. Useful to update contact attributes defined in your contacts database while passing the event. For example: **"FIRSTNAME": "Jane" , "AGE": 37**
    
</dd>
</dl>

<dl>
<dd>

**$eventDate:** `?string` — Timestamp of when the event occurred (e.g. "2024-01-24T17:39:57+01:00"). If no value is passed, the timestamp of the event creation is used.
    
</dd>
</dl>

<dl>
<dd>

**$eventName:** `string` — The name of the event that occurred. This is how you will find your event in Brevo. Limited to 255 characters, alphanumerical characters and - _ only.
    
</dd>
</dl>

<dl>
<dd>

**$eventProperties:** `?array` — Properties of the event. Top level properties and nested properties can be used to better segment contacts and personalise workflow conditions. The following field type are supported: string, number, boolean (true/false), date (Timestamp e.g. "2024-01-24T17:39:57+01:00"). Keys are limited to 255 characters, alphanumerical characters and - _ only. Size is limited to 50Kb.
    
</dd>
</dl>

<dl>
<dd>

**$identifiers:** `CreateEventRequestIdentifiers` — Identifies the contact associated with the event. At least one identifier is required.
    
</dd>
</dl>

<dl>
<dd>

**$object:** `?CreateEventRequestObject` — Identifiers of the object record associated with this event. Ignored if the object type or identifier for this record does not exist on the account.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## InboundParsing
<details><summary><code>$client-&gt;inboundParsing-&gt;getInboundEmailEvents($request) -> GetInboundEmailEventsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

This endpoint will show the list of all the events for the received emails.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->inboundParsing->getInboundEmailEvents(
    new GetInboundEmailEventsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$sender:** `?string` — Email address of the sender.
    
</dd>
</dl>

<dl>
<dd>

**$startDate:** `?string` — Mandatory if endDate is used. Starting date (YYYY-MM-DD or YYYY-MM-DDTHH:mm:ss.SSSZ) from which you want to fetch the list. Maximum time period that can be selected is one month.
    
</dd>
</dl>

<dl>
<dd>

**$endDate:** `?string` — Mandatory if startDate is used. Ending date (YYYY-MM-DD or YYYY-MM-DDTHH:mm:ss.SSSZ) till which you want to fetch the list. Maximum time period that can be selected is one month.
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` — Number of documents returned per page
    
</dd>
</dl>

<dl>
<dd>

**$offset:** `?int` — Index of the first document on the page
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?string` — Sort the results in the ascending/descending order of record creation
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;inboundParsing-&gt;getInboundEmailEventsByUuid($uuid) -> GetInboundEmailEventsByUuidResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

This endpoint will show the list of all events history for one particular received email.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->inboundParsing->getInboundEmailEventsByUuid(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — UUID to fetch events specific to received email
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;inboundParsing-&gt;getInboundEmailAttachment($downloadToken) -> string</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

This endpoint will retrieve inbound attachment with download token.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->inboundParsing->getInboundEmailAttachment(
    'downloadToken',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$downloadToken:** `string` — Token to fetch a particular attachment
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Balance
<details><summary><code>$client-&gt;balance-&gt;getActiveBalancesApi($pid, $request) -> BalanceLimit</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Returns Active Balances
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->balance->getActiveBalancesApi(
    'pid',
    new GetLoyaltyBalanceProgramsPidActiveBalanceRequest([
        'contactId' => 1,
        'balanceDefinitionId' => 'balance_definition_id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$pid:** `string` — Loyalty Program Id
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` — Limit
    
</dd>
</dl>

<dl>
<dd>

**$offset:** `?int` — Offset
    
</dd>
</dl>

<dl>
<dd>

**$sortField:** `?string` — Sort Field
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?string` — Sort Order
    
</dd>
</dl>

<dl>
<dd>

**$contactId:** `int` — Contact ID
    
</dd>
</dl>

<dl>
<dd>

**$balanceDefinitionId:** `string` — Balance Definition ID
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;balance-&gt;getBalanceDefinitionList($pid, $request) -> GetBalanceDefinitionListResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Returns balance definition page
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->balance->getBalanceDefinitionList(
    'pid',
    new GetBalanceDefinitionListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$pid:** `string` — Loyalty Program Id
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` — Limit the number of records returned
    
</dd>
</dl>

<dl>
<dd>

**$offset:** `?int` — Offset to paginate records
    
</dd>
</dl>

<dl>
<dd>

**$sortField:** `?string` — Field to sort by
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?string` — Sort direction
    
</dd>
</dl>

<dl>
<dd>

**$version:** `?string` — Version
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;balance-&gt;createBalanceDefinition($pid, $request) -> BalanceDefinition</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Creates balance definition and returns information
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->balance->createBalanceDefinition(
    'pid',
    new PostLoyaltyBalanceProgramsPidBalanceDefinitionsRequest([
        'name' => 'name',
        'unit' => PostLoyaltyBalanceProgramsPidBalanceDefinitionsRequestUnit::Points->value,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$pid:** `string` — Loyalty Program Id
    
</dd>
</dl>

<dl>
<dd>

**$balanceAvailabilityDurationModifier:** `?string` — Defines when the balance expires within the selected duration.
    
</dd>
</dl>

<dl>
<dd>

**$balanceAvailabilityDurationUnit:** `?string` — Unit of time for balance validity.
    
</dd>
</dl>

<dl>
<dd>

**$balanceAvailabilityDurationValue:** `?int` — Number of time units before the balance expires.
    
</dd>
</dl>

<dl>
<dd>

**$balanceExpirationDate:** `?DateTime` — Fixed expiration date (`dd/mm` format) as an alternative to duration-based expiry.
    
</dd>
</dl>

<dl>
<dd>

**$balanceOptionAmountOvertakingStrategy:** `?string` — Defines whether partial credit is allowed when reaching max balance.
    
</dd>
</dl>

<dl>
<dd>

**$balanceOptionCreditRounding:** `?string` — Defines rounding strategy for credit transactions.
    
</dd>
</dl>

<dl>
<dd>

**$balanceOptionDebitRounding:** `?string` — Defines rounding strategy for debit transactions.
    
</dd>
</dl>

<dl>
<dd>

**$description:** `?string` — Short description of the balance definition.
    
</dd>
</dl>

<dl>
<dd>

**$imageRef:** `?string` — URL of an optional image reference.
    
</dd>
</dl>

<dl>
<dd>

**$maxAmount:** `?float` — Maximum allowable balance amount.
    
</dd>
</dl>

<dl>
<dd>

**$maxCreditAmountLimit:** `?float` — Maximum credit allowed per operation.
    
</dd>
</dl>

<dl>
<dd>

**$maxDebitAmountLimit:** `?float` — Maximum debit allowed per operation.
    
</dd>
</dl>

<dl>
<dd>

**$meta:** `?array` — Additional metadata for the balance definition.
    
</dd>
</dl>

<dl>
<dd>

**$minAmount:** `?float` — Minimum allowable balance amount.
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` — Name of the balance definition.
    
</dd>
</dl>

<dl>
<dd>

**$unit:** `string` — Unit of balance measurement.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;balance-&gt;getBalanceDefinition($pid, $bdid, $request) -> BalanceDefinition</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Returns balance definition
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->balance->getBalanceDefinition(
    'pid',
    'bdid',
    new GetBalanceDefinitionRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$pid:** `string` — Loyalty Program Id
    
</dd>
</dl>

<dl>
<dd>

**$bdid:** `string` — Balance Definition Id
    
</dd>
</dl>

<dl>
<dd>

**$version:** `?string` — Version
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;balance-&gt;updateBalanceDefinition($pid, $bdid, $request) -> BalanceDefinition</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Updates Balance definition
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->balance->updateBalanceDefinition(
    'pid',
    'bdid',
    new UpdateBalanceDefinitionRequest([
        'name' => 'name',
        'unit' => UpdateBalanceDefinitionRequestUnit::Points->value,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$pid:** `string` — Loyalty Program Id
    
</dd>
</dl>

<dl>
<dd>

**$bdid:** `string` — Balance Definition Id
    
</dd>
</dl>

<dl>
<dd>

**$balanceAvailabilityDurationModifier:** `?string` — Defines when the balance expires within the selected duration.
    
</dd>
</dl>

<dl>
<dd>

**$balanceAvailabilityDurationUnit:** `?string` — Unit of time for balance validity.
    
</dd>
</dl>

<dl>
<dd>

**$balanceAvailabilityDurationValue:** `?int` — Number of time units before the balance expires.
    
</dd>
</dl>

<dl>
<dd>

**$balanceExpirationDate:** `?string` — Expiration date (`dd/mm` format) or empty if not applicable.
    
</dd>
</dl>

<dl>
<dd>

**$balanceOptionAmountOvertakingStrategy:** `?string` — Defines whether partial credit is allowed when reaching max balance.
    
</dd>
</dl>

<dl>
<dd>

**$balanceOptionCreditRounding:** `?string` — Rounding strategy for credit transactions.
    
</dd>
</dl>

<dl>
<dd>

**$balanceOptionDebitRounding:** `?string` — Rounding strategy for debit transactions.
    
</dd>
</dl>

<dl>
<dd>

**$description:** `?string` — Short description of the balance definition.
    
</dd>
</dl>

<dl>
<dd>

**$imageRef:** `?string` — URL of an optional image reference.
    
</dd>
</dl>

<dl>
<dd>

**$maxAmount:** `?float` — Maximum allowable balance amount.
    
</dd>
</dl>

<dl>
<dd>

**$maxCreditAmountLimit:** `?float` — Maximum credit allowed per operation.
    
</dd>
</dl>

<dl>
<dd>

**$maxDebitAmountLimit:** `?float` — Maximum debit allowed per operation.
    
</dd>
</dl>

<dl>
<dd>

**$meta:** `?array` — Optional metadata for the balance definition.
    
</dd>
</dl>

<dl>
<dd>

**$minAmount:** `?float` — Minimum allowable balance amount.
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` — Name of the balance definition.
    
</dd>
</dl>

<dl>
<dd>

**$unit:** `string` — Unit of balance measurement.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;balance-&gt;deleteBalanceDefinition($pid, $bdid)</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Delete Balance definition
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->balance->deleteBalanceDefinition(
    'pid',
    'bdid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$pid:** `string` — Loyalty Program Id
    
</dd>
</dl>

<dl>
<dd>

**$bdid:** `string` — Balance Definition Id
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;balance-&gt;createBalanceLimit($pid, $bdid, $request) -> BalanceLimit</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Creates balance limit and sends the created UUID along with the data
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->balance->createBalanceLimit(
    'pid',
    'bdid',
    new CreateBalanceLimitRequest([
        'constraintType' => CreateBalanceLimitRequestConstraintType::Transaction->value,
        'durationUnit' => CreateBalanceLimitRequestDurationUnit::Day->value,
        'durationValue' => 1,
        'transactionType' => CreateBalanceLimitRequestTransactionType::Credit->value,
        'value' => 1,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$pid:** `string` — Loyalty Program Id
    
</dd>
</dl>

<dl>
<dd>

**$bdid:** `string` — Balance Definition Id
    
</dd>
</dl>

<dl>
<dd>

**$constraintType:** `string` — Defines whether the limit applies to transaction count or amount.
    
</dd>
</dl>

<dl>
<dd>

**$durationUnit:** `string` — Unit of time for which the limit is applicable.
    
</dd>
</dl>

<dl>
<dd>

**$durationValue:** `int` — Number of time units for the balance limit.
    
</dd>
</dl>

<dl>
<dd>

**$slidingSchedule:** `?bool` — Determines if the limit resets on a rolling schedule.
    
</dd>
</dl>

<dl>
<dd>

**$transactionType:** `string` — Specifies whether the limit applies to credit or debit transactions.
    
</dd>
</dl>

<dl>
<dd>

**$value:** `int` — Maximum allowed value for the specified constraint type.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;balance-&gt;getBalanceLimit($pid, $bdid, $blid, $request) -> BalanceLimit</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Fetches balance limits and send the created UUID along with the data
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->balance->getBalanceLimit(
    'pid',
    'bdid',
    'blid',
    new GetBalanceLimitRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$pid:** `string` — Loyalty Program Id
    
</dd>
</dl>

<dl>
<dd>

**$bdid:** `string` — Balance Definition Id
    
</dd>
</dl>

<dl>
<dd>

**$blid:** `string` — Balance Limit Id
    
</dd>
</dl>

<dl>
<dd>

**$version:** `?string` — Version
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;balance-&gt;updateBalanceLimit($pid, $bdid, $blid, $request) -> BalanceLimit</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Updates balance limit
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->balance->updateBalanceLimit(
    'pid',
    'bdid',
    'blid',
    new UpdateBalanceLimitRequest([
        'constraintType' => UpdateBalanceLimitRequestConstraintType::Transaction->value,
        'durationUnit' => UpdateBalanceLimitRequestDurationUnit::Day->value,
        'durationValue' => 1,
        'transactionType' => UpdateBalanceLimitRequestTransactionType::Credit->value,
        'value' => 1,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$pid:** `string` — Loyalty Program Id
    
</dd>
</dl>

<dl>
<dd>

**$bdid:** `string` — Balance Definition Id
    
</dd>
</dl>

<dl>
<dd>

**$blid:** `string` — Balance Limit Id
    
</dd>
</dl>

<dl>
<dd>

**$constraintType:** `string` — Defines whether the limit applies to transaction count or amount.
    
</dd>
</dl>

<dl>
<dd>

**$durationUnit:** `string` — Unit of time for which the limit is applicable.
    
</dd>
</dl>

<dl>
<dd>

**$durationValue:** `int` — Number of time units for the balance limit.
    
</dd>
</dl>

<dl>
<dd>

**$slidingSchedule:** `?bool` — Determines if the limit resets on a rolling schedule.
    
</dd>
</dl>

<dl>
<dd>

**$transactionType:** `string` — Specifies whether the limit applies to credit or debit transactions.
    
</dd>
</dl>

<dl>
<dd>

**$value:** `int` — Maximum allowed value for the specified constraint type.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;balance-&gt;deleteBalanceLimit($pid, $bdid, $blid)</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Delete balance limit
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->balance->deleteBalanceLimit(
    'pid',
    'bdid',
    'blid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$pid:** `string` — Loyalty Program Id
    
</dd>
</dl>

<dl>
<dd>

**$bdid:** `string` — Balance Definition Id
    
</dd>
</dl>

<dl>
<dd>

**$blid:** `string` — Balance Limit Id
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;balance-&gt;getContactBalances($pid) -> GetContactBalancesResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Returns balance list
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->balance->getContactBalances(
    'pid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$pid:** `string` — Loyalty Program Id
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;balance-&gt;createBalanceOrder($pid, $request) -> CreateBalanceOrderResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Returns created order
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->balance->createBalanceOrder(
    'pid',
    new CreateBalanceOrderRequest([
        'amount' => 1.1,
        'balanceDefinitionId' => 'balanceDefinitionId',
        'contactId' => 1,
        'dueAt' => 'dueAt',
        'source' => 'source',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$pid:** `string` — Loyalty Program Id
    
</dd>
</dl>

<dl>
<dd>

**$amount:** `float` — Order amount (must be non-zero).
    
</dd>
</dl>

<dl>
<dd>

**$balanceDefinitionId:** `string` — Unique identifier (UUID) of the associated balance definition.
    
</dd>
</dl>

<dl>
<dd>

**$contactId:** `int` — Unique identifier of the contact placing the order (must be ≥ 1).
    
</dd>
</dl>

<dl>
<dd>

**$dueAt:** `string` — RFC3339 timestamp specifying when the order is due.
    
</dd>
</dl>

<dl>
<dd>

**$expiresAt:** `?string` — Optional RFC3339 timestamp defining order expiration.
    
</dd>
</dl>

<dl>
<dd>

**$meta:** `?array` — Optional metadata associated with the order.
    
</dd>
</dl>

<dl>
<dd>

**$source:** `string` — Specifies the origin of the order (`engine` or `user`).
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;balance-&gt;getSubscriptionBalances($pid, $cid) -> GetSubscriptionBalancesResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Returns subscription balances
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->balance->getSubscriptionBalances(
    'pid',
    'cid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$pid:** `string` — Loyalty Program Id
    
</dd>
</dl>

<dl>
<dd>

**$cid:** `string` — Contact Id
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;balance-&gt;createSubscriptionBalances($pid, $cid, $request) -> PostLoyaltyBalanceProgramsPidSubscriptionsCidBalancesResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Creates a balance for a contact
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->balance->createSubscriptionBalances(
    'pid',
    'cid',
    new PostLoyaltyBalanceProgramsPidSubscriptionsCidBalancesRequest([
        'balanceDefinitionId' => 'balanceDefinitionId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$pid:** `string` — Loyalty Program Id
    
</dd>
</dl>

<dl>
<dd>

**$cid:** `string` — Contact Id
    
</dd>
</dl>

<dl>
<dd>

**$balanceDefinitionId:** `string` — Unique identifier (UUID) of the balance definition associated with the new balance.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;balance-&gt;getTransactionHistoryApi($pid, $request) -> GetLoyaltyBalanceProgramsPidTransactionHistoryResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Returns transaction history
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->balance->getTransactionHistoryApi(
    'pid',
    new GetLoyaltyBalanceProgramsPidTransactionHistoryRequest([
        'contactId' => 1,
        'balanceDefinitionId' => 'balance_definition_id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$pid:** `string` — Loyalty Program Id
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` — Limit the number of records returned
    
</dd>
</dl>

<dl>
<dd>

**$offset:** `?int` — Skip a number of records
    
</dd>
</dl>

<dl>
<dd>

**$sortField:** `?string` — Field to sort by
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?string` — Sort order, either asc or desc
    
</dd>
</dl>

<dl>
<dd>

**$contactId:** `int` — Contact ID
    
</dd>
</dl>

<dl>
<dd>

**$balanceDefinitionId:** `string` — Balance Definition ID
    
</dd>
</dl>

<dl>
<dd>

**$filters:** `?string` — Filters to apply
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;balance-&gt;beginTransaction($pid, $request) -> Transaction</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Creates new transaction and returns information
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->balance->beginTransaction(
    'pid',
    new BeginTransactionRequest([
        'amount' => 1.1,
        'balanceDefinitionId' => 'balanceDefinitionId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$pid:** `string` — Loyalty Program Id
    
</dd>
</dl>

<dl>
<dd>

**$loyaltySubscriptionId:** `?string` — Unique identifier for the loyalty subscription (required unless `contactId` is provided).
    
</dd>
</dl>

<dl>
<dd>

**$amount:** `float` — Transaction amount (must be provided).
    
</dd>
</dl>

<dl>
<dd>

**$autoComplete:** `?bool` — Whether the transaction should be automatically completed.
    
</dd>
</dl>

<dl>
<dd>

**$balanceDefinitionId:** `string` — Unique identifier (UUID) of the associated balance definition.
    
</dd>
</dl>

<dl>
<dd>

**$balanceExpiryInMinutes:** `?int` — Optional expiry time for the balance in minutes (must be greater than 0 if provided).
    
</dd>
</dl>

<dl>
<dd>

**$contactId:** `?int` — Unique identifier of the contact involved in the transaction (required unless `LoyaltySubscriptionId` is provided).
    
</dd>
</dl>

<dl>
<dd>

**$eventTime:** `?string` — Optional timestamp specifying when the transaction occurred.
    
</dd>
</dl>

<dl>
<dd>

**$meta:** `?array` — Optional metadata associated with the transaction.
    
</dd>
</dl>

<dl>
<dd>

**$ttl:** `?int` — Optional time-to-live for the transaction (must be greater than 0 if provided).
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;balance-&gt;cancelTransaction($pid, $tid) -> Transaction</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Cancels transaction
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->balance->cancelTransaction(
    'pid',
    'tid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$pid:** `string` — Loyalty Program Id
    
</dd>
</dl>

<dl>
<dd>

**$tid:** `string` — Transaction Id
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;balance-&gt;completeTransaction($pid, $tid) -> Transaction</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Completes transaction
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->balance->completeTransaction(
    'pid',
    'tid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$pid:** `string` — Loyalty Program Id
    
</dd>
</dl>

<dl>
<dd>

**$tid:** `string` — Transaction Id
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Program
<details><summary><code>$client-&gt;program-&gt;getLpList($request) -> GetLpListResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Returns list of loyalty programs
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->program->getLpList(
    new GetLpListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$limit:** `?int` — Number of documents per page
    
</dd>
</dl>

<dl>
<dd>

**$offset:** `?int` — Index of the first document in the page
    
</dd>
</dl>

<dl>
<dd>

**$sortField:** `?string` — Sort documents by field
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?string` — Sort documents by field
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;program-&gt;createNewLp($request) -> LoyaltyProgram</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Creates loyalty program
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->program->createNewLp(
    new CreateNewLpRequest([
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$description:** `?string` — Optional description of the loyalty program (max 256 chars).
    
</dd>
</dl>

<dl>
<dd>

**$documentId:** `?string` — Optional unique document ID.
    
</dd>
</dl>

<dl>
<dd>

**$meta:** `?array` — Optional metadata related to the loyalty program.
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` — Required name of the loyalty program (max 128 chars).
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;program-&gt;getLoyaltyProgramInfo($pid) -> LoyaltyProgram</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Returns loyalty program
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->program->getLoyaltyProgramInfo(
    'pid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$pid:** `string` — Loyalty Program ID. A unique identifier for the loyalty program.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;program-&gt;updateLoyaltyProgram($pid, $request) -> LoyaltyProgram</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Updates loyalty program
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->program->updateLoyaltyProgram(
    'pid',
    new UpdateLoyaltyProgramRequest([
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$pid:** `string` — Loyalty Program ID. A unique identifier for the loyalty program.
    
</dd>
</dl>

<dl>
<dd>

**$description:** `?string` — Loyalty Program description
    
</dd>
</dl>

<dl>
<dd>

**$meta:** `?array` — Loyalty Program meta data
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` — Loyalty Program name
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;program-&gt;deleteLoyaltyProgram($pid)</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Deletes Loyalty Program
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->program->deleteLoyaltyProgram(
    'pid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$pid:** `string` — Loyalty Program ID. A unique identifier for the loyalty program.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;program-&gt;partiallyUpdateLoyaltyProgram($pid, $request) -> LoyaltyProgram</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Partially updates loyalty program
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->program->partiallyUpdateLoyaltyProgram(
    'pid',
    new PartiallyUpdateLoyaltyProgramRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$pid:** `string` — Loyalty Program ID. A unique identifier for the loyalty program.
    
</dd>
</dl>

<dl>
<dd>

**$description:** `?string` — Loyalty Program description
    
</dd>
</dl>

<dl>
<dd>

**$meta:** `?array` — Loyalty Program meta data
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` — Loyalty Program name
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;program-&gt;getParameterSubscriptionInfo($pid, $request) -> GetParameterSubscriptionInfoResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Get Information of balances, tiers, rewards and subscription members for a subscription
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->program->getParameterSubscriptionInfo(
    'pid',
    new GetParameterSubscriptionInfoRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$pid:** `string` — Loyalty Program ID. A unique identifier for the loyalty program.
    
</dd>
</dl>

<dl>
<dd>

**$contactId:** `?string` — The contact ID to filter by.
    
</dd>
</dl>

<dl>
<dd>

**$params:** `?string` — A list of filter parameters for querying the subscription info.
    
</dd>
</dl>

<dl>
<dd>

**$loyaltySubscriptionId:** `?string` — The loyalty subscription ID to filter by.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;program-&gt;publishLoyaltyProgram($pid)</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Publishes loyalty program
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->program->publishLoyaltyProgram(
    'pid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$pid:** `string` — Loyalty Program ID. A unique identifier for the loyalty program.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;program-&gt;subscribeMemberToASubscription($pid, $request) -> SubscribeMemberToASubscriptionResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Add member to a subscription
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->program->subscribeMemberToASubscription(
    'pid',
    new SubscribeMemberToASubscriptionRequest([
        'memberContactIds' => [
            1,
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$pid:** `string` — Loyalty Program ID. A unique identifier for the loyalty program.
    
</dd>
</dl>

<dl>
<dd>

**$contactId:** `?int` — Required if LoyaltySubscriptionId is not provided, must be greater than 0
    
</dd>
</dl>

<dl>
<dd>

**$loyaltySubscriptionId:** `?string` — Required if ContactId is not provided, max length 64
    
</dd>
</dl>

<dl>
<dd>

**$memberContactIds:** `array` — Required, each item must be greater than or equal to 1
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;program-&gt;deleteContactMembers($pid, $request)</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Deletes member from a subscription
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->program->deleteContactMembers(
    'pid',
    new DeleteContactMembersRequest([
        'memberContactIds' => 'memberContactIds',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$pid:** `string` — Loyalty Program ID. A unique identifier for the loyalty program.
    
</dd>
</dl>

<dl>
<dd>

**$memberContactIds:** `string` — Comma-separated list of member contact IDs to delete from the subscription.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;program-&gt;subscribeToLoyaltyProgram($pid, $request) -> SubscribeToLoyaltyProgramResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Subscribes to a loyalty program
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->program->subscribeToLoyaltyProgram(
    'pid',
    new SubscribeToLoyaltyProgramRequest([
        'contactId' => 1,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$pid:** `string` — Loyalty Program ID. A unique identifier for the loyalty program.
    
</dd>
</dl>

<dl>
<dd>

**$contactId:** `int` — Required contact ID; must be greater than 0.
    
</dd>
</dl>

<dl>
<dd>

**$creationDate:** `?string` — Optional custom date-time format.
    
</dd>
</dl>

<dl>
<dd>

**$loyaltySubscriptionId:** `?string` — Optional subscription ID (max length 64).
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Reward
<details><summary><code>$client-&gt;reward-&gt;getCodeCount($pid, $cpid) -> GetCodeCountResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Get code count
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reward->getCodeCount(
    'pid',
    'cpid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$pid:** `string` — Loyalty Program ID
    
</dd>
</dl>

<dl>
<dd>

**$cpid:** `string` — Code Pool ID
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reward-&gt;getRewardPageApi($pid, $request) -> GetLoyaltyOfferProgramsPidOffersResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Returns a reward page
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reward->getRewardPageApi(
    'pid',
    new GetLoyaltyOfferProgramsPidOffersRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$pid:** `string` — Loyalty Program ID
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` — Page size
    
</dd>
</dl>

<dl>
<dd>

**$offset:** `?int` — Pagination offset
    
</dd>
</dl>

<dl>
<dd>

**$state:** `?string` — State of the reward
    
</dd>
</dl>

<dl>
<dd>

**$version:** `?string` — Version
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reward-&gt;createReward($pid, $request) -> CreateRewardResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Creates a new reward in the loyalty program.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reward->createReward(
    'pid',
    new CreateRewardRequest([
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$pid:** `string` — Loyalty Program ID
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` — Internal name of the reward
    
</dd>
</dl>

<dl>
<dd>

**$publicDescription:** `?string` — Public facing description of the reward
    
</dd>
</dl>

<dl>
<dd>

**$publicImage:** `?string` — URL of the public image for the reward
    
</dd>
</dl>

<dl>
<dd>

**$publicName:** `?string` — Public facing name of the reward
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reward-&gt;createVoucher($pid, $request) -> CreateVoucherResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Create a voucher and attribute it to a specific membership.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reward->createVoucher(
    'pid',
    new CreateVoucherRequest([
        'rewardId' => 'rewardId',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$pid:** `string` — Loyalty Program ID
    
</dd>
</dl>

<dl>
<dd>

**$code:** `?string` — Code generated to attribute reward to a contact
    
</dd>
</dl>

<dl>
<dd>

**$contactId:** `?int` — Contact to attribute the reward
    
</dd>
</dl>

<dl>
<dd>

**$expirationDate:** `?string` — Reward expiration date
    
</dd>
</dl>

<dl>
<dd>

**$loyaltySubscriptionId:** `?string` — One of contactId or loyaltySubscriptionId is required
    
</dd>
</dl>

<dl>
<dd>

**$meta:** `?array` — Offer meta information (key/value object)
    
</dd>
</dl>

<dl>
<dd>

**$rewardId:** `string` — Reward id
    
</dd>
</dl>

<dl>
<dd>

**$value:** `?float` — Value of the selected reward config
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reward-&gt;redeemVoucher($pid, $request) -> Redeem</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Creates a request to redeem a voucher.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reward->redeemVoucher(
    'pid',
    new RedeemVoucherRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$pid:** `string` — Loyalty Program ID
    
</dd>
</dl>

<dl>
<dd>

**$attributedRewardId:** `?string` — Unique identifier for the attributed reward
    
</dd>
</dl>

<dl>
<dd>

**$code:** `?string` — Redemption code for the reward
    
</dd>
</dl>

<dl>
<dd>

**$contactId:** `?int` — Unique identifier for the contact
    
</dd>
</dl>

<dl>
<dd>

**$loyaltySubscriptionId:** `?string` — Identifier for the loyalty subscription
    
</dd>
</dl>

<dl>
<dd>

**$meta:** `?array` — Additional metadata associated with the redeem request
    
</dd>
</dl>

<dl>
<dd>

**$order:** `?RedeemVoucherRequestOrder` — Order details for the redemption
    
</dd>
</dl>

<dl>
<dd>

**$rewardId:** `?string` — Unique identifier for the reward
    
</dd>
</dl>

<dl>
<dd>

**$ttl:** `?int` — Time to live in seconds for the redemption request
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reward-&gt;completeRedeemTransaction($pid, $tid) -> Redeem</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Completes voucher redeem request.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reward->completeRedeemTransaction(
    'pid',
    'tid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$pid:** `string` — Loyalty Program ID
    
</dd>
</dl>

<dl>
<dd>

**$tid:** `string` — Redeem transaction ID
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reward-&gt;revokeVouchers($pid, $request)</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Revoke attributed vouchers.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reward->revokeVouchers(
    'pid',
    new RevokeVouchersRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$pid:** `string` — Loyalty Program ID
    
</dd>
</dl>

<dl>
<dd>

**$attributedRewardIds:** `?string` — Reward Attribution IDs (comma seperated)
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reward-&gt;validateReward($pid, $request) -> ValidateRewardResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Validates a reward.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reward->validateReward(
    'pid',
    new ValidateRewardRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$pid:** `string` — Loyalty Program ID
    
</dd>
</dl>

<dl>
<dd>

**$attributedRewardId:** `?string` — Unique identifier for the attributed reward
    
</dd>
</dl>

<dl>
<dd>

**$code:** `?string` — Validation code for the reward
    
</dd>
</dl>

<dl>
<dd>

**$contactId:** `?int` — Unique identifier for the contact
    
</dd>
</dl>

<dl>
<dd>

**$loyaltySubscriptionId:** `?string` — Identifier for the loyalty subscription
    
</dd>
</dl>

<dl>
<dd>

**$pointOfSellId:** `?string` — Identifier for the point of sale
    
</dd>
</dl>

<dl>
<dd>

**$rewardId:** `?string` — Unique identifier for the reward
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reward-&gt;getRewardInformation($pid, $rid, $request) -> GetLoyaltyOfferProgramsPidRewardsRidResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Returns reward information.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reward->getRewardInformation(
    'pid',
    'rid',
    new GetLoyaltyOfferProgramsPidRewardsRidRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$pid:** `string` — Loyalty Program ID
    
</dd>
</dl>

<dl>
<dd>

**$rid:** `string` — Reward ID
    
</dd>
</dl>

<dl>
<dd>

**$version:** `?string` — Version
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;reward-&gt;getVoucherForAContact($pid, $request) -> GetLoyaltyOfferProgramsPidVouchersResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Get voucher for a contact
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->reward->getVoucherForAContact(
    'pid',
    new GetLoyaltyOfferProgramsPidVouchersRequest([
        'contactId' => 1,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$pid:** `string` — Loyalty Program ID
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` — Page size
    
</dd>
</dl>

<dl>
<dd>

**$offset:** `?int` — Pagination offset
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?string` — Sort order
    
</dd>
</dl>

<dl>
<dd>

**$sortField:** `?string` — Sort field
    
</dd>
</dl>

<dl>
<dd>

**$contactId:** `int` — Contact ID
    
</dd>
</dl>

<dl>
<dd>

**$metadataKeyValue:** `?string` — Metadata value for a Key filter
    
</dd>
</dl>

<dl>
<dd>

**$rewardId:** `?string` — Reward ID
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Tier
<details><summary><code>$client-&gt;tier-&gt;addSubscriptionToTier($pid, $cid, $tid) -> AddSubscriptionToTierResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Manually assigns a tier to a specific membership.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->tier->addSubscriptionToTier(
    'pid',
    'cid',
    'tid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$pid:** `string` — Loyalty Program ID
    
</dd>
</dl>

<dl>
<dd>

**$cid:** `string` — Contact ID
    
</dd>
</dl>

<dl>
<dd>

**$tid:** `string` — Tier ID
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;tier-&gt;getListOfTierGroups($pid, $request) -> GetListOfTierGroupsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Returns the list of tier groups defined within the loyalty program.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->tier->getListOfTierGroups(
    'pid',
    new GetListOfTierGroupsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$pid:** `string` — Loyalty Program ID
    
</dd>
</dl>

<dl>
<dd>

**$version:** `?string` — Select 'active' to retrieve list of all tier groups which are live for clients. Select draft to retrieve list of all non deleted tier groups.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;tier-&gt;createTierGroup($pid, $request) -> TierGroup</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Creates a new tier group in a loyalty program. *(The changes will take effect with the next publication of the loyalty program)*
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->tier->createTierGroup(
    'pid',
    new CreateTierGroupRequest([
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$pid:** `string` — Loyalty Program ID
    
</dd>
</dl>

<dl>
<dd>

**$downgradeStrategy:** `?string` — Select real_time to downgrade tier on real time balance updates. Select membership_anniversary to downgrade tier on subscription anniversary. Select tier_anniversary to downgrade tier on tier anniversary.
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` — Name of the tier group
    
</dd>
</dl>

<dl>
<dd>

**$tierOrder:** `?array` — Order of the tiers in the group in ascending order
    
</dd>
</dl>

<dl>
<dd>

**$upgradeStrategy:** `?string` — Select real_time to upgrade tier on real time balance updates. Select membership_anniversary to upgrade tier on subscription anniversary. Select tier_anniversary to upgrade tier on tier anniversary.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;tier-&gt;getTierGroup($pid, $gid, $request) -> TierGroup</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Returns tier group information.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->tier->getTierGroup(
    'pid',
    'gid',
    new GetTierGroupRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$pid:** `string` — Loyalty Program ID
    
</dd>
</dl>

<dl>
<dd>

**$gid:** `string` — Tier group ID
    
</dd>
</dl>

<dl>
<dd>

**$version:** `?string` — Select active to retrieve active version of tier group. Select draft to retrieve latest changes in tier group.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;tier-&gt;updateTierGroup($pid, $gid, $request) -> TierGroup</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Updates a tier group from a loyalty program. *(The changes will take effect with the next publication of the loyalty program)*
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->tier->updateTierGroup(
    'pid',
    'gid',
    new UpdateTierGroupRequest([
        'downgradeStrategy' => UpdateTierGroupRequestDowngradeStrategy::RealTime->value,
        'name' => 'name',
        'tierOrder' => [
            'tierOrder',
        ],
        'upgradeStrategy' => UpdateTierGroupRequestUpgradeStrategy::RealTime->value,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$pid:** `string` — Loyalty Program ID
    
</dd>
</dl>

<dl>
<dd>

**$gid:** `string` — Tier group ID
    
</dd>
</dl>

<dl>
<dd>

**$downgradeStrategy:** `string` — Select real_time to downgrade tier on real time balance updates. Select membership_anniversary to downgrade tier on subscription anniversary. Select tier_anniversary to downgrade tier on tier anniversary.
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` — Name of the tier group
    
</dd>
</dl>

<dl>
<dd>

**$tierOrder:** `array` — Order of the tiers in the group in ascending order
    
</dd>
</dl>

<dl>
<dd>

**$upgradeStrategy:** `string` — Select real_time to upgrade tier on real time balance updates. Select membership_anniversary to upgrade tier on subscription anniversary. Select tier_anniversary to upgrade tier on tier anniversary.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;tier-&gt;deleteTierGroup($pid, $gid)</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Deletes a tier group from a loyalty program. *(The changes will take effect with the next publication of the loyalty program)*
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->tier->deleteTierGroup(
    'pid',
    'gid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$pid:** `string` — Loyalty Program ID
    
</dd>
</dl>

<dl>
<dd>

**$gid:** `string` — Tier group ID
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;tier-&gt;createTierForTierGroup($pid, $gid, $request) -> Tier</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Creates a new tier in a loyalty program tier group. *(The changes will take effect with the next publication of the loyalty program)*
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->tier->createTierForTierGroup(
    'pid',
    'gid',
    new CreateTierForTierGroupRequest([
        'accessConditions' => [
            new CreateTierForTierGroupRequestAccessConditionsItem([]),
        ],
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$pid:** `string` — Loyalty Program ID
    
</dd>
</dl>

<dl>
<dd>

**$gid:** `string` — Tier group ID
    
</dd>
</dl>

<dl>
<dd>

**$accessConditions:** `array` 
    
</dd>
</dl>

<dl>
<dd>

**$imageRef:** `?string` — Image of the tier
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` — Name of the tier to be created
    
</dd>
</dl>

<dl>
<dd>

**$tierRewards:** `?array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;tier-&gt;getLoyaltyProgramTier($pid, $request) -> GetLoyaltyProgramTierResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Returns the list of tiers defined within the loyalty program.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->tier->getLoyaltyProgramTier(
    'pid',
    new GetLoyaltyProgramTierRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$pid:** `string` — Loyalty Program ID
    
</dd>
</dl>

<dl>
<dd>

**$version:** `?string` — Select 'active' to retrieve list of all tiers which are live for clients. Select draft to retrieve list of all non deleted tiers.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;tier-&gt;updateTier($pid, $tid, $request) -> Tier</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Modifies an existing tier for the specified tier group *(The changes will take effect with the next publication of the loyalty program)*
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->tier->updateTier(
    'pid',
    'tid',
    new UpdateTierRequest([
        'accessConditions' => [
            new UpdateTierRequestAccessConditionsItem([]),
        ],
        'name' => 'name',
        'tierRewards' => [
            new UpdateTierRequestTierRewardsItem([]),
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$pid:** `string` — Loyalty Program ID
    
</dd>
</dl>

<dl>
<dd>

**$tid:** `string` — Tier ID
    
</dd>
</dl>

<dl>
<dd>

**$accessConditions:** `array` 
    
</dd>
</dl>

<dl>
<dd>

**$imageRef:** `?string` — Image of the tier
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` — Name of the tier to be created
    
</dd>
</dl>

<dl>
<dd>

**$tierRewards:** `array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;tier-&gt;deleteTier($pid, $tid)</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Deletes a tier from a loyalty program tier group. *(The changes will take effect with the next publication of the loyalty program)*
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->tier->deleteTier(
    'pid',
    'tid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$pid:** `string` — Loyalty Program ID
    
</dd>
</dl>

<dl>
<dd>

**$tid:** `string` — Tier ID
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## EmailCampaigns
<details><summary><code>$client-&gt;emailCampaigns-&gt;getEmailCampaigns($request) -> GetEmailCampaignsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

<Note>
The response payload for this endpoint has changed

You now need to specify which type of statistics you would like to retrieve. For more information visit [this page](https://developers.brevo.com/changelog/get-all-marketing-campaigns).
</Note>
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->emailCampaigns->getEmailCampaigns(
    new GetEmailCampaignsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$type:** `?string` — Filter on the type of the campaigns
    
</dd>
</dl>

<dl>
<dd>

**$status:** `?string` — Filter on the status of the campaign
    
</dd>
</dl>

<dl>
<dd>

**$statistics:** `?string` — Filter on type of the statistics required. Example **globalStats** value will only fetch globalStats info of the campaign in returned response.This option only returns data for events occurred in the last 6 months.For older campaigns, it’s advisable to use the **Get Campaign Report** endpoint.
    
</dd>
</dl>

<dl>
<dd>

**$startDate:** `?string` — **Mandatory if endDate is used**. Starting (urlencoded) UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) to filter the sent email campaigns. **Prefer to pass your timezone in date-time format for accurate result** ( only available if either 'status' not passed and if passed is set to 'sent' )
    
</dd>
</dl>

<dl>
<dd>

**$endDate:** `?string` — **Mandatory if startDate is used**. Ending (urlencoded) UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) to filter the sent email campaigns. **Prefer to pass your timezone in date-time format for accurate result** ( only available if either 'status' not passed and if passed is set to 'sent' )
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` — Number of documents per page
    
</dd>
</dl>

<dl>
<dd>

**$offset:** `?int` — Index of the first document in the page
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?string` — Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed
    
</dd>
</dl>

<dl>
<dd>

**$excludeHtmlContent:** `?bool` — Use this flag to exclude htmlContent from the response body. If set to **true**, htmlContent field will be returned as empty string in the response body
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;emailCampaigns-&gt;createEmailCampaign($request) -> CreateEmailCampaignResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->emailCampaigns->createEmailCampaign(
    new CreateEmailCampaignRequest([
        'name' => 'Newsletter - May 2017',
        'sender' => new CreateEmailCampaignRequestSender([]),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$abTesting:** `?bool` — Status of A/B Test. abTesting = false means it is disabled & abTesting = true means it is enabled. **subjectA, subjectB, splitRule, winnerCriteria & winnerDelay** will be considered when abTesting is set to true. subjectA & subjectB are mandatory together & subject if passed is ignored. **Can be set to true only if sendAtBestTime is false**. You will be able to set up two subject lines for your campaign and send them to a random sample of your total recipients. Half of the test group will receive version A, and the other half will receive version B
    
</dd>
</dl>

<dl>
<dd>

**$attachmentUrl:** `?string` — Absolute url of the attachment (no local file). Extension allowed: #### xlsx, xls, ods, docx, docm, doc, csv, pdf, txt, gif, jpg, jpeg, png, tif, tiff, rtf, bmp, cgm, css, shtml, html, htm, zip, xml, ppt, pptx, tar, ez, ics, mobi, msg, pub and eps
    
</dd>
</dl>

<dl>
<dd>

**$emailExpirationDate:** `?CreateEmailCampaignRequestEmailExpirationDate` — To reduce your carbon footprint, set an expiration date for your email. If supported, it will be automatically deleted from the recipient’s inbox, saving storage space and energy. Learn more about setting an email expiration date. For reference , ``https://help.brevo.com/hc/en-us/articles/4413566705298-Create-an-email-campaign``
    
</dd>
</dl>

<dl>
<dd>

**$footer:** `?string` — Footer of the email campaign
    
</dd>
</dl>

<dl>
<dd>

**$header:** `?string` — Header of the email campaign
    
</dd>
</dl>

<dl>
<dd>

**$htmlContent:** `?string` — Mandatory if htmlUrl and templateId are empty. Body of the message (HTML).
    
</dd>
</dl>

<dl>
<dd>

**$htmlUrl:** `?string` — **Mandatory if htmlContent and templateId are empty**. Url to the message (HTML). For example: **https://html.domain.com**
    
</dd>
</dl>

<dl>
<dd>

**$increaseRate:** `?int` — **Mandatory if ipWarmupEnable is set to true**. Set a percentage increase rate for warming up your ip. We recommend you set the increase rate to 30% per day. If you want to send the same number of emails every day, set the daily increase value to 0%.
    
</dd>
</dl>

<dl>
<dd>

**$initialQuota:** `?int` — **Mandatory if ipWarmupEnable is set to true**. Set an initial quota greater than 1 for warming up your ip. We recommend you set a value of 3000.
    
</dd>
</dl>

<dl>
<dd>

**$inlineImageActivation:** `?bool` — Use true to embedded the images in your email. Final size of the email should be less than **4MB**. Campaigns with embedded images can _not be sent to more than 5000 contacts_
    
</dd>
</dl>

<dl>
<dd>

**$ipWarmupEnable:** `?bool` — **Available for dedicated ip clients**. Set this to true if you wish to warm up your ip.
    
</dd>
</dl>

<dl>
<dd>

**$mirrorActive:** `?bool` — Use true to enable the mirror link
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` — Name of the campaign
    
</dd>
</dl>

<dl>
<dd>

**$params:** `?array` — Pass the set of attributes to customize the type classic campaign. For example: **{"FNAME":"Joe", "LNAME":"Doe"}**. Only available if **type** is **classic**. It's considered only if campaign is in _New Template Language format_. The New Template Language is dependent on the values of **subject, htmlContent/htmlUrl, sender.name & toField**
    
</dd>
</dl>

<dl>
<dd>

**$previewText:** `?string` — Preview text or preheader of the email campaign
    
</dd>
</dl>

<dl>
<dd>

**$recipients:** `?CreateEmailCampaignRequestRecipients` — Segment ids and List ids to include/exclude from campaign
    
</dd>
</dl>

<dl>
<dd>

**$replyTo:** `?string` — Email on which the campaign recipients will be able to reply to
    
</dd>
</dl>

<dl>
<dd>

**$scheduledAt:** `?string` — Sending UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ). **Prefer to pass your timezone in date-time format for accurate result**. If sendAtBestTime is set to true, your campaign will be sent according to the date passed (ignoring the time part). For example: **2017-06-01T12:30:00+02:00**
    
</dd>
</dl>

<dl>
<dd>

**$sendAtBestTime:** `?bool` — Set this to true if you want to send your campaign at best time.
    
</dd>
</dl>

<dl>
<dd>

**$sender:** `CreateEmailCampaignRequestSender` — Sender details including id or email and name (_optional_). Only one of either Sender's email or Sender's ID shall be passed in one request at a time. For example: **{"name":"xyz", "email":"example@abc.com"}** **{"name":"xyz", "id":123}**
    
</dd>
</dl>

<dl>
<dd>

**$splitRule:** `?int` — Add the size of your test groups. **Mandatory if abTesting = true & 'recipients' is passed**. We'll send version A and B to a random sample of recipients, and then the winning version to everyone else
    
</dd>
</dl>

<dl>
<dd>

**$subject:** `?string` — Subject of the campaign. **Mandatory if abTesting is false**. Ignored if abTesting is true.
    
</dd>
</dl>

<dl>
<dd>

**$subjectA:** `?string` — Subject A of the campaign. **Mandatory if abTesting = true**. subjectA & subjectB should have unique value
    
</dd>
</dl>

<dl>
<dd>

**$subjectB:** `?string` — Subject B of the campaign. **Mandatory if abTesting = true**. subjectA & subjectB should have unique value
    
</dd>
</dl>

<dl>
<dd>

**$tag:** `?string` — Tag of the campaign
    
</dd>
</dl>

<dl>
<dd>

**$templateId:** `?int` — **Mandatory if htmlContent and htmlUrl are empty**. Id of the transactional email template with status _active_. Used to copy only its content fetched from htmlContent/htmlUrl to an email campaign for RSS feature.
    
</dd>
</dl>

<dl>
<dd>

**$toField:** `?string` — To personalize the **To** Field. If you want to include the first name and last name of your recipient, add **{FNAME} {LNAME}**. These contact attributes must already exist in your Brevo account. If input parameter **params** used please use **{{contact.FNAME}} {{contact.LNAME}}** for personalization
    
</dd>
</dl>

<dl>
<dd>

**$unsubscriptionPageId:** `?string` — Enter an unsubscription page id. The page id is a 24 digit alphanumeric id that can be found in the URL when editing the page. If not entered, then the default unsubscription page will be used.
    
</dd>
</dl>

<dl>
<dd>

**$updateFormId:** `?string` — **Mandatory if templateId is used containing the {{ update_profile }} tag**. Enter an update profile form id. The form id is a 24 digit alphanumeric id that can be found in the URL when editing the form. If not entered, then the default update profile form will be used.
    
</dd>
</dl>

<dl>
<dd>

**$utmCampaign:** `?string` — Customize the utm_campaign value. If this field is empty, the campaign name will be used. Only alphanumeric characters and spaces are allowed
    
</dd>
</dl>

<dl>
<dd>

**$winnerCriteria:** `?string` — Choose the metrics that will determinate the winning version. **Mandatory if _splitRule_ >= 1 and < 50**. If splitRule = 50, `winnerCriteria` is ignored if passed
    
</dd>
</dl>

<dl>
<dd>

**$winnerDelay:** `?int` — Choose the duration of the test in hours. Maximum is 7 days, pass 24*7 = 168 hours. The winning version will be sent at the end of the test. **Mandatory if _splitRule_ >= 1 and < 50**. If splitRule = 50, `winnerDelay` is ignored if passed
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;emailCampaigns-&gt;uploadImageToGallery($request) -> UploadImageToGalleryResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->emailCampaigns->uploadImageToGallery(
    new UploadImageToGalleryRequest([
        'imageUrl' => 'https://somedomain.com/image1.jpg',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$imageUrl:** `string` — The absolute url of the image (**no local file**). Maximum allowed size for image is **2MB**. Allowed extensions for images are: #### jpeg, jpg, png, bmp, gif.
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` — Name of the image.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;emailCampaigns-&gt;getEmailCampaign($campaignId, $request) -> GetEmailCampaignResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->emailCampaigns->getEmailCampaign(
    1000000,
    new GetEmailCampaignRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$campaignId:** `int` — Id of the campaign
    
</dd>
</dl>

<dl>
<dd>

**$statistics:** `?string` — Filter on type of the statistics required. Example **globalStats** value will only fetch globalStats info of the campaign in returned response.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;emailCampaigns-&gt;updateEmailCampaign($campaignId, $request)</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->emailCampaigns->updateEmailCampaign(
    1000000,
    new UpdateEmailCampaignRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$campaignId:** `int` — Id of the campaign
    
</dd>
</dl>

<dl>
<dd>

**$abTesting:** `?bool` — Status of A/B Test. abTesting = false means it is disabled & abTesting = true means it is enabled. **subjectA, subjectB, splitRule, winnerCriteria & winnerDelay** will be considered when abTesting is set to true. subjectA & subjectB are mandatory together & subject if passed is ignored. **Can be set to true only if sendAtBestTime is false**. You will be able to set up two subject lines for your campaign and send them to a random sample of your total recipients. Half of the test group will receive version A, and the other half will receive version B
    
</dd>
</dl>

<dl>
<dd>

**$attachmentUrl:** `?string` — Absolute url of the attachment (no local file). Extension allowed: #### xlsx, xls, ods, docx, docm, doc, csv, pdf, txt, gif, jpg, jpeg, png, tif, tiff, rtf, bmp, cgm, css, shtml, html, htm, zip, xml, ppt, pptx, tar, ez, ics, mobi, msg, pub and eps'
    
</dd>
</dl>

<dl>
<dd>

**$emailExpirationDate:** `?UpdateEmailCampaignRequestEmailExpirationDate` — To reduce your carbon footprint, set an expiration date for your email. If supported, it will be automatically deleted from the recipient’s inbox, saving storage space and energy.
    
</dd>
</dl>

<dl>
<dd>

**$footer:** `?string` — Footer of the email campaign
    
</dd>
</dl>

<dl>
<dd>

**$header:** `?string` — Header of the email campaign
    
</dd>
</dl>

<dl>
<dd>

**$htmlContent:** `?string` — Body of the message (HTML version). If the campaign is designed using Drag & Drop editor via HTML content, then the design page will not have Drag & Drop editor access for that campaign. **REQUIRED if htmlUrl is empty**
    
</dd>
</dl>

<dl>
<dd>

**$htmlUrl:** `?string` — Url which contents the body of the email message. **REQUIRED if htmlContent is empty**
    
</dd>
</dl>

<dl>
<dd>

**$increaseRate:** `?int` — Set a percentage increase rate for warming up your ip. We recommend you set the increase rate to 30% per day. If you want to send the same number of emails every day, set the daily increase value to 0%.
    
</dd>
</dl>

<dl>
<dd>

**$initialQuota:** `?int` — Set an initial quota greater than 1 for warming up your ip. We recommend you set a value of 3000.
    
</dd>
</dl>

<dl>
<dd>

**$inlineImageActivation:** `?bool` — Status of inline image. inlineImageActivation = false means image can’t be embedded, & inlineImageActivation = true means image can be embedded, in the email. You cannot send a campaign of more than **4MB** with images embedded in the email. Campaigns with the images embedded in the email _must be sent to less than 5000 contacts_.
    
</dd>
</dl>

<dl>
<dd>

**$ipWarmupEnable:** `?bool` — **Available for dedicated ip clients**. Set this to true if you wish to warm up your ip.
    
</dd>
</dl>

<dl>
<dd>

**$mirrorActive:** `?bool` — Status of mirror links in campaign. mirrorActive = false means mirror links are deactivated, & mirrorActive = true means mirror links are activated, in the campaign
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` — Name of the campaign
    
</dd>
</dl>

<dl>
<dd>

**$params:** `?array` — Pass the set of attributes to customize the type classic campaign. For example: **{"FNAME":"Joe", "LNAME":"Doe"}**. Only available if **type** is **classic**. It's considered only if campaign is in _New Template Language format_. The New Template Language is dependent on the values of **subject, htmlContent/htmlUrl, sender.name & toField**
    
</dd>
</dl>

<dl>
<dd>

**$previewText:** `?string` — Preview text or preheader of the email campaign
    
</dd>
</dl>

<dl>
<dd>

**$recipients:** `?UpdateEmailCampaignRequestRecipients` — Segment ids and List ids to include/exclude from campaign
    
</dd>
</dl>

<dl>
<dd>

**$recurring:** `?bool` — **FOR TRIGGER ONLY !** Type of trigger campaign.recurring = false means contact can receive the same Trigger campaign only once, & recurring = true means contact can receive the same Trigger campaign several times
    
</dd>
</dl>

<dl>
<dd>

**$replyTo:** `?string` — Email on which campaign recipients will be able to reply to
    
</dd>
</dl>

<dl>
<dd>

**$scheduledAt:** `?string` — UTC date-time on which the campaign has to run (YYYY-MM-DDTHH:mm:ss.SSSZ). **Prefer to pass your timezone in date-time format for accurate result.** If sendAtBestTime is set to true, your campaign will be sent according to the date passed (ignoring the time part).
    
</dd>
</dl>

<dl>
<dd>

**$sendAtBestTime:** `?bool` — Set this to true if you want to send your campaign at best time. Note:- **if true, warmup ip will be disabled.**
    
</dd>
</dl>

<dl>
<dd>

**$sender:** `?UpdateEmailCampaignRequestSender` — Sender details including id or email and name (optional). Only one of either Sender's email or Sender's ID shall be passed in one request at a time. For example: **{"name":"xyz", "email":"example@abc.com"}** **{"name":"xyz", "id":123}**
    
</dd>
</dl>

<dl>
<dd>

**$splitRule:** `?int` — Add the size of your test groups. **Mandatory if abTesting = true & 'recipients' is passed**. We'll send version A and B to a random sample of recipients, and then the winning version to everyone else
    
</dd>
</dl>

<dl>
<dd>

**$subject:** `?string` — Subject of the campaign
    
</dd>
</dl>

<dl>
<dd>

**$subjectA:** `?string` — Subject A of the campaign. **Mandatory if abTesting = true**. subjectA & subjectB should have unique value
    
</dd>
</dl>

<dl>
<dd>

**$subjectB:** `?string` — Subject B of the campaign. **Mandatory if abTesting = true**. subjectA & subjectB should have unique value
    
</dd>
</dl>

<dl>
<dd>

**$tag:** `?string` — Tag of the campaign
    
</dd>
</dl>

<dl>
<dd>

**$toField:** `?string` — To personalize the **To** Field. If you want to include the first name and last name of your recipient, add **{FNAME} {LNAME}**. These contact attributes must already exist in your Brevo account. If input parameter **params** used please use **{{contact.FNAME}} {{contact.LNAME}}** for personalization
    
</dd>
</dl>

<dl>
<dd>

**$unsubscriptionPageId:** `?string` — Enter an unsubscription page id. The page id is a 24 digit alphanumeric id that can be found in the URL when editing the page.
    
</dd>
</dl>

<dl>
<dd>

**$updateFormId:** `?string` — **Mandatory if templateId is used containing the {{ update_profile }} tag**. Enter an update profile form id. The form id is a 24 digit alphanumeric id that can be found in the URL when editing the form.
    
</dd>
</dl>

<dl>
<dd>

**$utmCampaign:** `?string` — Customize the utm_campaign value. If this field is empty, the campaign name will be used. Only alphanumeric characters and spaces are allowed
    
</dd>
</dl>

<dl>
<dd>

**$winnerCriteria:** `?string` — Choose the metrics that will determinate the winning version. **Mandatory if _splitRule_ >= 1 and < 50**. If splitRule = 50, `winnerCriteria` is ignored if passed
    
</dd>
</dl>

<dl>
<dd>

**$winnerDelay:** `?int` — Choose the duration of the test in hours. Maximum is 7 days, pass 24*7 = 168 hours. The winning version will be sent at the end of the test. **Mandatory if _splitRule_ >= 1 and < 50**. If splitRule = 50, `winnerDelay` is ignored if passed
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;emailCampaigns-&gt;deleteEmailCampaign($campaignId)</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->emailCampaigns->deleteEmailCampaign(
    1000000,
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$campaignId:** `int` — id of the campaign
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;emailCampaigns-&gt;getAbTestCampaignResult($campaignId) -> GetAbTestCampaignResultResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Obtain winning version of an A/B test email campaign
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->emailCampaigns->getAbTestCampaignResult(
    1000000,
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$campaignId:** `int` — Id of the A/B test campaign
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;emailCampaigns-&gt;emailExportRecipients($campaignId, $request) -> EmailExportRecipientsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->emailCampaigns->emailExportRecipients(
    1000000,
    new EmailExportRecipientsRequest([
        'recipientsType' => EmailExportRecipientsRequestRecipientsType::All->value,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$campaignId:** `int` — Id of the campaign
    
</dd>
</dl>

<dl>
<dd>

**$notifyUrl:** `?string` — Webhook called once the export process is finished. For reference, https://help.brevo.com/hc/en-us/articles/360007666479
    
</dd>
</dl>

<dl>
<dd>

**$recipientsType:** `string` — Type of recipients to export for a campaign
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;emailCampaigns-&gt;sendEmailCampaignNow($campaignId)</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->emailCampaigns->sendEmailCampaignNow(
    1000000,
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$campaignId:** `int` — Id of the campaign
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;emailCampaigns-&gt;sendReport($campaignId, $request)</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

A PDF will be sent to the specified email addresses
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->emailCampaigns->sendReport(
    1000000,
    new SendReportRequest([
        'body' => new SendReport([
            'email' => new SendReportEmail([
                'body' => 'Please find attached the report of our last email campaign.',
                'to' => [
                    'jim.suehan@example.com',
                ],
            ]),
        ]),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$campaignId:** `int` — Id of the campaign
    
</dd>
</dl>

<dl>
<dd>

**$request:** `SendReport` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;emailCampaigns-&gt;sendTestEmail($campaignId, $request)</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->emailCampaigns->sendTestEmail(
    1000000,
    new SendTestEmailRequest([
        'body' => new SendTestEmail([]),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$campaignId:** `int` — Id of the campaign
    
</dd>
</dl>

<dl>
<dd>

**$request:** `SendTestEmail` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;emailCampaigns-&gt;getSharedTemplateUrl($campaignId) -> GetSharedTemplateUrlResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Get a unique URL to share & import an email template from one Brevo account to another.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->emailCampaigns->getSharedTemplateUrl(
    1000000,
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$campaignId:** `int` — Id of the campaign or template
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;emailCampaigns-&gt;updateCampaignStatus($campaignId, $request)</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->emailCampaigns->updateCampaignStatus(
    1000000,
    new UpdateCampaignStatusRequest([
        'body' => new UpdateCampaignStatus([]),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$campaignId:** `int` — Id of the campaign
    
</dd>
</dl>

<dl>
<dd>

**$request:** `UpdateCampaignStatus` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## SmsCampaigns
<details><summary><code>$client-&gt;smsCampaigns-&gt;getSmsCampaigns($request) -> GetSmsCampaignsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->smsCampaigns->getSmsCampaigns(
    new GetSmsCampaignsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$status:** `?string` — Status of campaign.
    
</dd>
</dl>

<dl>
<dd>

**$startDate:** `?string` — **Mandatory if endDate is used.** Starting (urlencoded) UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) to filter the sent sms campaigns. **Prefer to pass your timezone in date-time format for accurate result** ( only available if either 'status' not passed and if passed is set to 'sent' )
    
</dd>
</dl>

<dl>
<dd>

**$endDate:** `?string` — **Mandatory if startDate is used.** Ending (urlencoded) UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) to filter the sent sms campaigns. **Prefer to pass your timezone in date-time format for accurate result** ( only available if either 'status' not passed and if passed is set to 'sent' )
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` — Number limitation for the result returned
    
</dd>
</dl>

<dl>
<dd>

**$offset:** `?int` — Beginning point in the list to retrieve from.
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?string` — Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;smsCampaigns-&gt;createSmsCampaign($request) -> CreateSmsCampaignResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->smsCampaigns->createSmsCampaign(
    new CreateSmsCampaignRequest([
        'content' => 'Get a discount by visiting our NY store and saying : Happy Spring!',
        'name' => 'Spring Promo Code',
        'sender' => 'MyShop',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$content:** `string` — Content of the message. The **maximum characters used per SMS is 160**, if used more than that, it will be counted as more than one SMS.
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` — Name of the campaign
    
</dd>
</dl>

<dl>
<dd>

**$organisationPrefix:** `?string` — A recognizable prefix will ensure your audience knows who you are. Recommended by U.S. carriers. This will be added as your Brand Name before the message content. **Prefer verifying maximum length of 160 characters including this prefix in message content to avoid multiple sending of same sms.**
    
</dd>
</dl>

<dl>
<dd>

**$recipients:** `?CreateSmsCampaignRequestRecipients` 
    
</dd>
</dl>

<dl>
<dd>

**$scheduledAt:** `?string` — UTC date-time on which the campaign has to run (YYYY-MM-DDTHH:mm:ss.SSSZ). **Prefer to pass your timezone in date-time format for accurate result.**
    
</dd>
</dl>

<dl>
<dd>

**$sender:** `string` — Name of the sender. **The number of characters is limited to 11 for alphanumeric characters and 15 for numeric characters**
    
</dd>
</dl>

<dl>
<dd>

**$unicodeEnabled:** `?bool` — Format of the message. It indicates whether the content should be treated as unicode or not.
    
</dd>
</dl>

<dl>
<dd>

**$unsubscribeInstruction:** `?string` — Instructions to unsubscribe from future communications. Recommended by U.S. carriers. Must include **STOP** keyword. This will be added as instructions after the end of message content. **Prefer verifying maximum length of 160 characters including this instructions in message content to avoid multiple sending of same sms.**
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;smsCampaigns-&gt;getSmsCampaign($campaignId) -> GetSmsCampaignResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->smsCampaigns->getSmsCampaign(
    1000000,
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$campaignId:** `int` — id of the SMS campaign
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;smsCampaigns-&gt;updateSmsCampaign($campaignId, $request)</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->smsCampaigns->updateSmsCampaign(
    1000000,
    new UpdateSmsCampaignRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$campaignId:** `int` — id of the SMS campaign
    
</dd>
</dl>

<dl>
<dd>

**$content:** `?string` — Content of the message. The **maximum characters used per SMS is 160**, if used more than that, it will be counted as more than one SMS
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` — Name of the campaign
    
</dd>
</dl>

<dl>
<dd>

**$organisationPrefix:** `?string` — A recognizable prefix will ensure your audience knows who you are. Recommended by U.S. carriers. This will be added as your Brand Name before the message content. **Prefer verifying maximum length of 160 characters including this prefix in message content to avoid multiple sending of same sms.**
    
</dd>
</dl>

<dl>
<dd>

**$recipients:** `?UpdateSmsCampaignRequestRecipients` 
    
</dd>
</dl>

<dl>
<dd>

**$scheduledAt:** `?string` — UTC date-time on which the campaign has to run (YYYY-MM-DDTHH:mm:ss.SSSZ). **Prefer to pass your timezone in date-time format for accurate result.**
    
</dd>
</dl>

<dl>
<dd>

**$sender:** `?string` — Name of the sender. **The number of characters is limited to 11 for alphanumeric characters and 15 for numeric characters**
    
</dd>
</dl>

<dl>
<dd>

**$unicodeEnabled:** `?bool` — Format of the message. It indicates whether the content should be treated as unicode or not.
    
</dd>
</dl>

<dl>
<dd>

**$unsubscribeInstruction:** `?string` — Instructions to unsubscribe from future communications. Recommended by U.S. carriers. Must include **STOP** keyword. This will be added as instructions after the end of message content. **Prefer verifying maximum length of 160 characters including this instructions in message content to avoid multiple sending of same sms.**
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;smsCampaigns-&gt;deleteSmsCampaign($campaignId)</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->smsCampaigns->deleteSmsCampaign(
    1000000,
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$campaignId:** `int` — id of the SMS campaign
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;smsCampaigns-&gt;requestSmsRecipientExport($campaignId, $request) -> RequestSmsRecipientExportResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

It returns the background process ID which on completion calls the notify URL that you have set in the input.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->smsCampaigns->requestSmsRecipientExport(
    1000000,
    new RequestSmsRecipientExportRequest([
        'recipientsType' => RequestSmsRecipientExportRequestRecipientsType::All->value,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$campaignId:** `int` — id of the campaign
    
</dd>
</dl>

<dl>
<dd>

**$notifyUrl:** `?string` — URL that will be called once the export process is finished. For reference, https://help.brevo.com/hc/en-us/articles/360007666479
    
</dd>
</dl>

<dl>
<dd>

**$recipientsType:** `string` — Filter the recipients based on how they interacted with the campaign
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;smsCampaigns-&gt;sendSmsCampaignNow($campaignId)</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->smsCampaigns->sendSmsCampaignNow(
    1000000,
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$campaignId:** `int` — id of the campaign
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;smsCampaigns-&gt;sendSmsReport($campaignId, $request)</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Send report of Sent and Archived campaign, to the specified email addresses, with respective data and a pdf attachment in detail.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->smsCampaigns->sendSmsReport(
    1000000,
    new SendSmsReportRequest([
        'body' => new SendReport([
            'email' => new SendReportEmail([
                'body' => 'Please find attached the report of our last email campaign.',
                'to' => [
                    'jim.suehan@example.com',
                ],
            ]),
        ]),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$campaignId:** `int` — id of the campaign
    
</dd>
</dl>

<dl>
<dd>

**$request:** `SendReport` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;smsCampaigns-&gt;sendTestSms($campaignId, $request)</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->smsCampaigns->sendTestSms(
    1000000,
    new SendTestSmsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$campaignId:** `int` — Id of the SMS campaign
    
</dd>
</dl>

<dl>
<dd>

**$phoneNumber:** `?string` — Mobile number of the recipient with the country code. This number **must belong to one of your contacts in Brevo account and must not be blacklisted**
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;smsCampaigns-&gt;updateSmsCampaignStatus($campaignId, $request)</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->smsCampaigns->updateSmsCampaignStatus(
    1000000,
    new UpdateSmsCampaignStatusRequest([
        'body' => new UpdateCampaignStatus([]),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$campaignId:** `int` — id of the campaign
    
</dd>
</dl>

<dl>
<dd>

**$request:** `UpdateCampaignStatus` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## WhatsAppCampaigns
<details><summary><code>$client-&gt;whatsAppCampaigns-&gt;getWhatsAppCampaigns($request) -> GetWhatsAppCampaignsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->whatsAppCampaigns->getWhatsAppCampaigns(
    new GetWhatsAppCampaignsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$startDate:** `?string` — **Mandatory if endDate is used**. Starting (urlencoded) UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) to filter the WhatsApp campaigns created. **Prefer to pass your timezone in date-time format for accurate result**
    
</dd>
</dl>

<dl>
<dd>

**$endDate:** `?string` — **Mandatory if startDate is used**. Ending (urlencoded) UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) to filter the WhatsApp campaigns created. **Prefer to pass your timezone in date-time format for accurate result**
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` — Number of documents per page
    
</dd>
</dl>

<dl>
<dd>

**$offset:** `?int` — Index of the first document in the page
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?string` — Sort the results in the ascending/descending order of record modification. Default order is **descending** if `sort` is not passed
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;whatsAppCampaigns-&gt;createWhatsAppCampaign($request) -> CreateWhatsAppCampaignResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

<Note>
You can use this API for WhatsApp only if you have setup your WhatsApp account on Brevo platform. To setup your WhatsApp account, follow the steps in the guide below.

[Activating Whatsapp](https://developers.brevo.com/docs/whatsapp-campaigns-1) in your account
</Note>

<Note>
This API requires the List and Segment ids as recipients in Body params. You can use the below Contact endpoints to get the required information.

[Get all the Lists](https://developers.brevo.com/reference/getlists-1)

[Get all the Segments](https://developers.brevo.com/reference/getsegments)
</Note>
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->whatsAppCampaigns->createWhatsAppCampaign(
    new CreateWhatsAppCampaignRequest([
        'name' => 'Test Campaign',
        'recipients' => new CreateWhatsAppCampaignRequestRecipients([]),
        'scheduledAt' => '2017-06-01T12:30:00+02:00',
        'templateId' => 19,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$name:** `string` — Name of the WhatsApp campaign creation
    
</dd>
</dl>

<dl>
<dd>

**$recipients:** `CreateWhatsAppCampaignRequestRecipients` — Segment ids and List ids to include/exclude from campaign
    
</dd>
</dl>

<dl>
<dd>

**$scheduledAt:** `string` — Sending UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ). **Prefer to pass your timezone in date-time format for accurate result.For example: **2017-06-01T12:30:00+02:00**
    
</dd>
</dl>

<dl>
<dd>

**$templateId:** `int` — Id of the WhatsApp template in **approved** state
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;whatsAppCampaigns-&gt;getWhatsAppConfig() -> GetWhatsAppConfigResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

<Note>
You can use this API for WhatsApp only if you have setup your WhatsApp account on Brevo platform. To setup your WhatsApp account, follow the steps in the guide below.

[Activating WhatsApp](https://developers.brevo.com/docs/whatsapp-campaigns-1) in your account
</Note>
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->whatsAppCampaigns->getWhatsAppConfig();
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;whatsAppCampaigns-&gt;createWhatsAppTemplate($request) -> CreateWhatsAppTemplateResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

<Note>
You can use this API for WhatsApp only if you have setup your WhatsApp account on Brevo platform. To setup your WhatsApp account, follow the steps in the guide below.

[Activating WhatsApp](https://developers.brevo.com/docs/whatsapp-campaigns-1) in your account
</Note>
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->whatsAppCampaigns->createWhatsAppTemplate(
    new CreateWhatsAppTemplateRequest([
        'bodyText' => 'making it look like readable English',
        'category' => CreateWhatsAppTemplateRequestCategory::Marketing->value,
        'language' => 'en',
        'name' => 'Test template',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$bodyText:** `string` — Body of the template. **Maximum allowed characters are 1024**
    
</dd>
</dl>

<dl>
<dd>

**$category:** `string` — Category of the template
    
</dd>
</dl>

<dl>
<dd>

**$headerText:** `?string` — Text content of the header in the template.  **Maximum allowed characters are 45** **Use this field to add text content in template header and if mediaUrl is empty**
    
</dd>
</dl>

<dl>
<dd>

**$language:** `string` 

Language of the template. For Example :
**en** for English
    
</dd>
</dl>

<dl>
<dd>

**$mediaUrl:** `?string` — Absolute url of the media file **(no local file)** for the header. **Use this field in you want to add media in Template header and headerText is empty** Allowed extensions for media files are: #### jpeg | png | mp4 | pdf
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` — Name of the template
    
</dd>
</dl>

<dl>
<dd>

**$source:** `?string` — source of the template
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;whatsAppCampaigns-&gt;getWhatsAppTemplates($request) -> GetWhatsAppTemplatesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->whatsAppCampaigns->getWhatsAppTemplates(
    new GetWhatsAppTemplatesRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$startDate:** `?string` — **Mandatory if endDate is used**. Starting (urlencoded) UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) to filter the templates created. **Prefer to pass your timezone in date-time format for accurate result**
    
</dd>
</dl>

<dl>
<dd>

**$endDate:** `?string` — **Mandatory if startDate is used**. Ending (urlencoded) UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) to filter the templates created. **Prefer to pass your timezone in date-time format for accurate result**
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` — Number of documents per page
    
</dd>
</dl>

<dl>
<dd>

**$offset:** `?int` — Index of the first document in the page
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?string` — Sort the results in the ascending/descending order of record modification. Default order is **descending** if `sort` is not passed
    
</dd>
</dl>

<dl>
<dd>

**$source:** `?string` — source of the template
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;whatsAppCampaigns-&gt;sendWhatsAppTemplateApproval($templateId)</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

<Note>
You can use this API for WhatsApp only if you have setup your WhatsApp account on Brevo platform. To setup your WhatsApp account, follow the steps in the guide below.

[Activating WhatsApp](https://developers.brevo.com/docs/whatsapp-campaigns-1) in your account
</Note>
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->whatsAppCampaigns->sendWhatsAppTemplateApproval(
    1000000,
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$templateId:** `int` — id of the template
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;whatsAppCampaigns-&gt;getWhatsAppCampaign($campaignId) -> GetWhatsAppCampaignResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

<Note>
You can use this API for WhatsApp only if you have setup your WhatsApp account on Brevo platform. To setup your WhatsApp account, follow the steps in the guide below.

[Activating Whatsapp](https://developers.brevo.com/docs/whatsapp-campaigns-1) in your account
</Note>
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->whatsAppCampaigns->getWhatsAppCampaign(
    1000000,
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$campaignId:** `int` — Id of the campaign
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;whatsAppCampaigns-&gt;updateWhatsAppCampaign($campaignId, $request)</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

<Note>
You can use this API for WhatsApp only if you have setup your WhatsApp account on Brevo platform. To setup your WhatsApp account, follow the steps in the guide below.

[Activating Whatsapp](https://developers.brevo.com/docs/whatsapp-campaigns-1) in your account
</Note>

<Note>
This API requires the List and Segment ids as recipients in Body params. You can use the below Contact endpoints to get the required information.

[Get all the Lists](https://developers.brevo.com/reference/getlists-1)

[Get all the Segments](https://developers.brevo.com/reference/getsegments)
</Note>
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->whatsAppCampaigns->updateWhatsAppCampaign(
    1000000,
    new UpdateWhatsAppCampaignRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$campaignId:** `int` — id of the campaign
    
</dd>
</dl>

<dl>
<dd>

**$campaignName:** `?string` — Name of the campaign
    
</dd>
</dl>

<dl>
<dd>

**$campaignStatus:** `?string` — Status of the campaign
    
</dd>
</dl>

<dl>
<dd>

**$recipients:** `?UpdateWhatsAppCampaignRequestRecipients` — Segment ids and List ids to include/exclude from campaign
    
</dd>
</dl>

<dl>
<dd>

**$rescheduleFor:** `?string` — Reschedule the sending UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ) of campaign. **Prefer to pass your timezone in date-time format for accurate result.For example: **2017-06-01T12:30:00+02:00** Use this field to update the scheduledAt of any existing draft or scheduled WhatsApp campaign.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;whatsAppCampaigns-&gt;deleteWhatsAppCampaign($campaignId)</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->whatsAppCampaigns->deleteWhatsAppCampaign(
    1000000,
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$campaignId:** `int` — id of the campaign
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Companies
<details><summary><code>$client-&gt;companies-&gt;getAllCompanies($request) -> GetCompaniesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->companies->getAllCompanies(
    new GetCompaniesRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$filters:** `?string` — Filter by attrbutes. If you have filter for owner on your side please send it as {"attributes.owner":"6299dcf3874a14eacbc65c46"}
    
</dd>
</dl>

<dl>
<dd>

**$linkedContactsIds:** `?int` — Filter by linked contacts ids
    
</dd>
</dl>

<dl>
<dd>

**$linkedDealsIds:** `?string` — Filter by linked Deals ids
    
</dd>
</dl>

<dl>
<dd>

**$modifiedSince:** `?string` — Filter (urlencoded) the contacts modified after a given UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ). Prefer to pass your timezone in date-time format for accurate result.
    
</dd>
</dl>

<dl>
<dd>

**$createdSince:** `?string` — Filter (urlencoded) the contacts created after a given UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ). Prefer to pass your timezone in date-time format for accurate result.
    
</dd>
</dl>

<dl>
<dd>

**$page:** `?int` — Index of the first document of the page
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` — Number of documents per page
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?string` — Sort the results in the ascending/descending order. Default order is **descending** by creation if `sort` is not passed
    
</dd>
</dl>

<dl>
<dd>

**$sortBy:** `?string` — The field used to sort field names.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;companies-&gt;createACompany($request) -> PostCompaniesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->companies->createACompany(
    new PostCompaniesRequest([
        'name' => 'company',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$attributes:** `?array` — Attributes for company creation
    
</dd>
</dl>

<dl>
<dd>

**$countryCode:** `?int` — Country code if phone_number is passed in attributes.
    
</dd>
</dl>

<dl>
<dd>

**$linkedContactsIds:** `?array` — Contact ids to be linked with company
    
</dd>
</dl>

<dl>
<dd>

**$linkedDealsIds:** `?array` — Deal ids to be linked with company
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` — Name of company
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;companies-&gt;importCompaniesCreationAndUpdation($request) -> PostCompaniesImportResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Import companies from a CSV file with mapping options.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->companies->importCompaniesCreationAndUpdation(
    new PostCompaniesImportRequest([
        'file' => File::createFromString("example_file", "example_file"),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;companies-&gt;linkAndUnlinkCompanyWithContactAndDeal($id, $request)</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->companies->linkAndUnlinkCompanyWithContactAndDeal(
    'id',
    new PatchCompaniesLinkUnlinkIdRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$linkContactIds:** `?array` — Contact ids for contacts to be linked with company
    
</dd>
</dl>

<dl>
<dd>

**$linkDealsIds:** `?array` — Deal ids for deals to be linked with company
    
</dd>
</dl>

<dl>
<dd>

**$unlinkContactIds:** `?array` — Contact ids for contacts to be unlinked from company
    
</dd>
</dl>

<dl>
<dd>

**$unlinkDealsIds:** `?array` — Deal ids for deals to be unlinked from company
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;companies-&gt;getACompany($id) -> Company</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->companies->getACompany(
    'id',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — Get Company Details
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;companies-&gt;deleteACompany($id)</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->companies->deleteACompany(
    'id',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — Company ID to delete
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;companies-&gt;updateACompany($id, $request) -> Company</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->companies->updateACompany(
    'id',
    new PatchCompaniesIdRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$attributes:** `?array` — Attributes for company update
    
</dd>
</dl>

<dl>
<dd>

**$countryCode:** `?int` — Country code if phone_number is passed in attributes.
    
</dd>
</dl>

<dl>
<dd>

**$linkedContactsIds:** `?array` — Warning - Using PATCH on linkedContactIds replaces the list of linked contacts. Omitted IDs will be removed.
    
</dd>
</dl>

<dl>
<dd>

**$linkedDealsIds:** `?array` — Warning - Using PATCH on linkedDealsIds replaces the list of linked contacts. Omitted IDs will be removed.
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` — Name of company
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;companies-&gt;createACompanyDealAttribute($request) -> PostCrmAttributesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->companies->createACompanyDealAttribute(
    new PostCrmAttributesRequest([
        'attributeType' => PostCrmAttributesRequestAttributeType::Text->value,
        'label' => 'Attribute Label',
        'objectType' => PostCrmAttributesRequestObjectType::Companies->value,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$attributeType:** `string` — The type of attribute (must be one of the defined enums)
    
</dd>
</dl>

<dl>
<dd>

**$description:** `?string` — A description of the attribute
    
</dd>
</dl>

<dl>
<dd>

**$label:** `string` — The label for the attribute (max 50 characters, cannot be empty)
    
</dd>
</dl>

<dl>
<dd>

**$objectType:** `string` — The type of object the attribute belongs to (prefilled with `companies`, mandatory)
    
</dd>
</dl>

<dl>
<dd>

**$optionsLabels:** `?array` — Options for multi-choice or single-select attributes
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;companies-&gt;getCompanyAttributes() -> array</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->companies->getCompanyAttributes();
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Deals
<details><summary><code>$client-&gt;deals-&gt;getDealAttributes() -> array</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->deals->getDealAttributes();
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;deals-&gt;getAllDeals($request) -> GetCrmDealsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->deals->getAllDeals(
    new GetCrmDealsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$filtersAttributesDealName:** `?string` — Filter by attributes. If you have a filter for the owner on your end, please send it as filters[attributes.deal_owner] and utilize the account email for the filtering.
    
</dd>
</dl>

<dl>
<dd>

**$filtersLinkedCompaniesIds:** `?string` — Filter by linked companies ids
    
</dd>
</dl>

<dl>
<dd>

**$filtersLinkedContactsIds:** `?string` — Filter by linked companies ids
    
</dd>
</dl>

<dl>
<dd>

**$modifiedSince:** `?string` — Filter (urlencoded) the contacts modified after a given UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ). Prefer to pass your timezone in date-time format for accurate result.
    
</dd>
</dl>

<dl>
<dd>

**$createdSince:** `?string` — Filter (urlencoded) the contacts created after a given UTC date-time (YYYY-MM-DDTHH:mm:ss.SSSZ). Prefer to pass your timezone in date-time format for accurate result.
    
</dd>
</dl>

<dl>
<dd>

**$offset:** `?int` — Index of the first document of the page
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` — Number of documents per page
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?string` — Sort the results in the ascending/descending order. Default order is **descending** by creation if `sort` is not passed
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;deals-&gt;createADeal($request) -> PostCrmDealsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->deals->createADeal(
    new PostCrmDealsRequest([
        'name' => 'Deal: Connect with company',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$attributes:** `?array` — Attributes for deal creation To assign owner of a Deal you can send attributes.deal_owner and utilize the account email or ID. If you want to create a deal on a specific pipeline and stage you can use the following attributes `pipeline` and `deal_stage`. Pipeline and deal_stage are ids you can fetch using this endpoint `/crm/pipeline/details/{pipelineID}`
    
</dd>
</dl>

<dl>
<dd>

**$linkedCompaniesIds:** `?array` — Company ids to be linked with deal
    
</dd>
</dl>

<dl>
<dd>

**$linkedContactsIds:** `?array` — Contact ids to be linked with deal
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` — Name of deal
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;deals-&gt;importDealsCreationAndUpdation($request) -> PostCrmDealsImportResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Import deals from a CSV file with mapping options.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->deals->importDealsCreationAndUpdation(
    new PostCrmDealsImportRequest([
        'file' => File::createFromString("example_file", "example_file"),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;deals-&gt;linkAndUnlinkADealWithContactsAndCompanies($id, $request)</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->deals->linkAndUnlinkADealWithContactsAndCompanies(
    'id',
    new PatchCrmDealsLinkUnlinkIdRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$linkCompanyIds:** `?array` — Company ids to be linked with deal
    
</dd>
</dl>

<dl>
<dd>

**$linkContactIds:** `?array` — Contact ids for contacts to be linked with deal
    
</dd>
</dl>

<dl>
<dd>

**$unlinkCompanyIds:** `?array` — Company ids to be unlinked from deal
    
</dd>
</dl>

<dl>
<dd>

**$unlinkContactIds:** `?array` — Contact ids for contacts to be unlinked from deal
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;deals-&gt;getADeal($id) -> Deal</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->deals->getADeal(
    'id',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;deals-&gt;deleteADeal($id)</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->deals->deleteADeal(
    'id',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;deals-&gt;updateADeal($id, $request)</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->deals->updateADeal(
    'id',
    new PatchCrmDealsIdRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$attributes:** `?array` — Attributes for deal update To assign owner of a Deal you can send attributes.deal_owner and utilize the account email or ID. If you wish to update the pipeline of a deal you need to provide the `pipeline` and the `deal_stage` Pipeline and deal_stage are ids you can fetch using this endpoint `/crm/pipeline/details/{pipelineID}`
    
</dd>
</dl>

<dl>
<dd>

**$linkedCompaniesIds:** `?array` — Warning - Using PATCH on linkedCompaniesIds replaces the list of linked contacts. Omitted IDs will be removed.
    
</dd>
</dl>

<dl>
<dd>

**$linkedContactsIds:** `?array` — Warning - Using PATCH on linkedContactIds replaces the list of linked contacts. Omitted IDs will be removed.
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` — Name of deal
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;deals-&gt;getPipelineStages() -> Pipeline</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

This endpoint is deprecated. Prefer /crm/pipeline/details/{pipelineID} instead.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->deals->getPipelineStages();
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;deals-&gt;getAllPipelines() -> array</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->deals->getAllPipelines();
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;deals-&gt;getAPipeline($pipelineId) -> array</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->deals->getAPipeline(
    'pipelineID',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$pipelineId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Files
<details><summary><code>$client-&gt;files-&gt;getAllFiles($request) -> array</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->files->getAllFiles(
    new GetCrmFilesRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$entity:** `?string` — Filter by file entity type
    
</dd>
</dl>

<dl>
<dd>

**$entityIds:** `?string` — Filter by file entity IDs
    
</dd>
</dl>

<dl>
<dd>

**$dateFrom:** `?int` — dateFrom to date range filter type (timestamp in milliseconds)
    
</dd>
</dl>

<dl>
<dd>

**$dateTo:** `?int` — dateTo to date range filter type (timestamp in milliseconds)
    
</dd>
</dl>

<dl>
<dd>

**$offset:** `?int` — Index of the first document of the page
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` — Number of documents per page
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?string` — Sort the results in the ascending/descending order. Default order is **descending** by creation if `sort` is not passed
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;files-&gt;uploadAFile($request) -> FileData</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->files->uploadAFile(
    new PostCrmFilesRequest([
        'file' => File::createFromString("example_file", "example_file"),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;files-&gt;downloadAFile($id) -> GetCrmFilesIdResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->files->downloadAFile(
    'id',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — File id to download.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;files-&gt;deleteAFile($id)</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->files->deleteAFile(
    'id',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — File id to delete.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;files-&gt;getFileDetails($id) -> FileData</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->files->getFileDetails(
    'id',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — File id to get file data.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Notes
<details><summary><code>$client-&gt;notes-&gt;getAllNotes($request) -> array</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->notes->getAllNotes(
    new GetCrmNotesRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$entity:** `?string` — Filter by note entity type
    
</dd>
</dl>

<dl>
<dd>

**$entityIds:** `?string` — Filter by note entity IDs
    
</dd>
</dl>

<dl>
<dd>

**$dateFrom:** `?int` — dateFrom to date range filter type (timestamp in milliseconds)
    
</dd>
</dl>

<dl>
<dd>

**$dateTo:** `?int` — dateTo to date range filter type (timestamp in milliseconds)
    
</dd>
</dl>

<dl>
<dd>

**$offset:** `?int` — Index of the first document of the page
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` — Number of documents per page
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?string` — Sort the results in the ascending/descending order. Default order is **descending** by creation if `sort` is not passed
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;notes-&gt;createANote($request) -> PostCrmNotesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->notes->createANote(
    new NoteData([
        'text' => 'In communication with client_dev for resolution of queries.',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$request:** `NoteData` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;notes-&gt;getANote($id) -> Note</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->notes->getANote(
    'id',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — Note ID to get
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;notes-&gt;deleteANote($id)</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->notes->deleteANote(
    'id',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — Note ID to delete
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;notes-&gt;updateANote($id, $request)</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->notes->updateANote(
    'id',
    new PatchCrmNotesIdRequest([
        'body' => new NoteData([
            'text' => 'In communication with client_dev for resolution of queries.',
        ]),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` — Note ID to update
    
</dd>
</dl>

<dl>
<dd>

**$request:** `NoteData` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Tasks
<details><summary><code>$client-&gt;tasks-&gt;getAllTasks($request) -> GetCrmTasksResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->tasks->getAllTasks(
    new GetCrmTasksRequest([
        'sortBy' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$filterType:** `?string` — Filter by task type (ID)
    
</dd>
</dl>

<dl>
<dd>

**$filterStatus:** `?string` — Filter by task status
    
</dd>
</dl>

<dl>
<dd>

**$filterDate:** `?string` — Filter by date
    
</dd>
</dl>

<dl>
<dd>

**$filterAssignTo:** `?string` — Filter by the "assignTo" ID. You can utilize account emails for the "assignTo" attribute.
    
</dd>
</dl>

<dl>
<dd>

**$filterContacts:** `?string` — Filter by contact ids
    
</dd>
</dl>

<dl>
<dd>

**$filterDeals:** `?string` — Filter by deals ids
    
</dd>
</dl>

<dl>
<dd>

**$filterCompanies:** `?string` — Filter by companies ids
    
</dd>
</dl>

<dl>
<dd>

**$dateFrom:** `?int` — dateFrom to date range filter type (timestamp in milliseconds)
    
</dd>
</dl>

<dl>
<dd>

**$dateTo:** `?int` — dateTo to date range filter type (timestamp in milliseconds)
    
</dd>
</dl>

<dl>
<dd>

**$offset:** `?int` — Index of the first document of the page
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` — Number of documents per page
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?string` — Sort the results in the ascending/descending order. Default order is **descending** by creation if `sort` is not passed
    
</dd>
</dl>

<dl>
<dd>

**$sortBy:** `?string` — The field used to sort field names.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;tasks-&gt;createATask($request) -> PostCrmTasksResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->tasks->createATask(
    new PostCrmTasksRequest([
        'date' => new DateTime('2021-11-01T17:44:54Z'),
        'name' => 'Task: Connect with client_dev',
        'taskTypeId' => '61a5cd07ca1347c82306ad09',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$assignToId:** `?string` — To assign a task to a user you can use either the account email or ID.
    
</dd>
</dl>

<dl>
<dd>

**$companiesIds:** `?array` — Companies ids for companies a task is linked to
    
</dd>
</dl>

<dl>
<dd>

**$contactsIds:** `?array` — Contact ids for contacts linked to this task
    
</dd>
</dl>

<dl>
<dd>

**$date:** `DateTime` — Task due date and time
    
</dd>
</dl>

<dl>
<dd>

**$dealsIds:** `?array` — Deal ids for deals a task is linked to
    
</dd>
</dl>

<dl>
<dd>

**$done:** `?bool` — Task marked as done
    
</dd>
</dl>

<dl>
<dd>

**$duration:** `?int` — Duration of task in milliseconds [1 minute = 60000 ms]
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` — Name of task
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` — Notes added to a task
    
</dd>
</dl>

<dl>
<dd>

**$reminder:** `?TaskReminder` 
    
</dd>
</dl>

<dl>
<dd>

**$taskTypeId:** `string` — Id for type of task e.g Call / Email / Meeting etc.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;tasks-&gt;getATask($id) -> Task</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->tasks->getATask(
    'id',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;tasks-&gt;deleteATask($id)</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->tasks->deleteATask(
    'id',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;tasks-&gt;updateATask($id, $request)</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->tasks->updateATask(
    'id',
    new PatchCrmTasksIdRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$assignToId:** `?string` — To assign a task to a user you can use either the account email or ID.
    
</dd>
</dl>

<dl>
<dd>

**$companiesIds:** `?array` — Companies ids for companies a task is linked to
    
</dd>
</dl>

<dl>
<dd>

**$contactsIds:** `?array` — Contact ids for contacts linked to this task
    
</dd>
</dl>

<dl>
<dd>

**$date:** `?DateTime` — Task date/time
    
</dd>
</dl>

<dl>
<dd>

**$dealsIds:** `?array` — Deal ids for deals a task is linked to
    
</dd>
</dl>

<dl>
<dd>

**$done:** `?bool` — Task marked as done
    
</dd>
</dl>

<dl>
<dd>

**$duration:** `?int` — Duration of task in milliseconds [1 minute = 60000 ms]
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` — Name of task
    
</dd>
</dl>

<dl>
<dd>

**$notes:** `?string` — Notes added to a task
    
</dd>
</dl>

<dl>
<dd>

**$reminder:** `?TaskReminder` 
    
</dd>
</dl>

<dl>
<dd>

**$taskTypeId:** `?string` — Id for type of task e.g Call / Email / Meeting etc.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;tasks-&gt;getAllTaskTypes() -> GetCrmTasktypesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->tasks->getAllTaskTypes();
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## TransactionalWhatsApp
<details><summary><code>$client-&gt;transactionalWhatsApp-&gt;sendWhatsappMessage($request) -> SendWhatsappMessageResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

<Note>You can use this API for WhatsApp only if you have setup your WhatsApp account on Brevo platform. To setup your WhatsApp account, follow the steps in the guide below. [Activating Whatsapp](https://developers.brevo.com/docs/whatsapp-campaigns-1) in your account</Note>
This endpoint is used to send a WhatsApp message. <br/>(**The first message you send using the API must contain a Template ID. You must create a template on WhatsApp on the Brevo platform to fetch the Template ID.**)
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->transactionalWhatsApp->sendWhatsappMessage(
    new SendWhatsappMessageRequestParams([
        'contactNumbers' => [
            'contactNumbers',
        ],
        'senderNumber' => 'senderNumber',
        'templateId' => 123,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$request:** `SendWhatsappMessageRequestParams|SendWhatsappMessageRequestText` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;transactionalWhatsApp-&gt;getWhatsappEventReport($request) -> GetWhatsappEventReportResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

This endpoint will show the unaggregated statistics for WhatsApp activity (30 days by default if `startDate` and `endDate` or `days` is not passed. The date range can not exceed 90 days)
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->transactionalWhatsApp->getWhatsappEventReport(
    new GetWhatsappEventReportRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$limit:** `?int` — Number limitation for the result returned
    
</dd>
</dl>

<dl>
<dd>

**$offset:** `?int` — Beginning point in the list to retrieve from
    
</dd>
</dl>

<dl>
<dd>

**$startDate:** `?string` — **Mandatory if endDate is used.** Starting date of the report (YYYY-MM-DD). Must be lower than equal to endDate
    
</dd>
</dl>

<dl>
<dd>

**$endDate:** `?string` — **Mandatory if startDate is used.** Ending date of the report (YYYY-MM-DD). Must be greater than equal to startDate
    
</dd>
</dl>

<dl>
<dd>

**$days:** `?int` — Number of days in the past including today (positive integer). _Not compatible with 'startDate' and 'endDate'_
    
</dd>
</dl>

<dl>
<dd>

**$contactNumber:** `?string` — Filter results for specific contact (WhatsApp Number with country code. Example, 85264318721)
    
</dd>
</dl>

<dl>
<dd>

**$event:** `?string` — Filter the report for a specific event type
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?string` — Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## TransactionalEmails
<details><summary><code>$client-&gt;transactionalEmails-&gt;getTransacBlockedContacts($request) -> GetTransacBlockedContactsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->transactionalEmails->getTransacBlockedContacts(
    new GetTransacBlockedContactsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$startDate:** `?string` — **Mandatory if endDate is used.** Starting date (YYYY-MM-DD) from which you want to fetch the blocked or unsubscribed contacts
    
</dd>
</dl>

<dl>
<dd>

**$endDate:** `?string` — **Mandatory if startDate is used.** Ending date (YYYY-MM-DD) till which you want to fetch the blocked or unsubscribed contacts
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` — Number of documents returned per page
    
</dd>
</dl>

<dl>
<dd>

**$offset:** `?int` — Index of the first document on the page
    
</dd>
</dl>

<dl>
<dd>

**$senders:** `?string` — Comma separated list of emails of the senders from which contacts are blocked or unsubscribed
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?string` — Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;transactionalEmails-&gt;unblockOrResubscribeATransactionalContact($email)</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->transactionalEmails->unblockOrResubscribeATransactionalContact(
    'email',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$email:** `string` — contact email (urlencoded) to unblock.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;transactionalEmails-&gt;getBlockedDomains() -> GetBlockedDomainsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Get the list of blocked domains
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->transactionalEmails->getBlockedDomains();
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;transactionalEmails-&gt;blockNewDomain($request)</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Blocks a new domain in order to avoid messages being sent to the same
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->transactionalEmails->blockNewDomain(
    new BlockNewDomainRequest([
        'domain' => 'example.com',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$domain:** `string` — name of the domain to be blocked
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;transactionalEmails-&gt;deleteBlockedDomain($domain)</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Unblocks an existing domain from the list of blocked domains
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->transactionalEmails->deleteBlockedDomain(
    'domain',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$domain:** `string` — The name of the domain to be deleted
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;transactionalEmails-&gt;deleteHardbounces($request)</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Delete hardbounces. To use carefully (e.g. in case of temporary ISP failures)
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->transactionalEmails->deleteHardbounces(
    new DeleteHardbouncesRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$contactEmail:** `?string` — Target a specific email address
    
</dd>
</dl>

<dl>
<dd>

**$endDate:** `?string` — Ending date (YYYY-MM-DD) of the time period for deletion. The hardbounces until this date will be deleted. Must be greater than or equal to the startDate
    
</dd>
</dl>

<dl>
<dd>

**$startDate:** `?string` — Starting date (YYYY-MM-DD) of the time period for deletion. The hardbounces occurred after this date will be deleted. Must be less than or equal to the endDate
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;transactionalEmails-&gt;sendTransacEmail($request) -> SendTransacEmailResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->transactionalEmails->sendTransacEmail(
    new SendTransacEmailRequest([
        'htmlContent' => '<html><head></head><body><p>Hello,</p>This is my first transactional email sent from Brevo.</p></body></html>',
        'sender' => new SendTransacEmailRequestSender([
            'email' => 'hello@brevo.com',
            'name' => 'Alex from Brevo',
        ]),
        'subject' => 'Hello from Brevo!',
        'to' => [
            new SendTransacEmailRequestToItem([
                'email' => 'johndoe@example.com',
                'name' => 'John Doe',
            ]),
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$attachment:** `?array` — Array of attachment objects. Each attachment must include either an absolute URL (no local file paths) or base64-encoded content, along with the attachment filename. The `name` field is required when `content` is provided. Supported file extensions: xlsx, xls, ods, docx, docm, doc, csv, pdf, txt, gif, jpg, jpeg, png, tif, tiff, rtf, bmp, cgm, css, shtml, html, htm, zip, xml, ppt, pptx, tar, ez, ics, mobi, msg, pub, eps, odt, mp3, m4a, m4v, wma, ogg, flac, wav, aif, aifc, aiff, mp4, mov, avi, mkv, mpeg, mpg, wmv, pkpass, xlsm. When `templateId` is specified: if the template uses the New Template Language format, both `url` and `content` attachment types are supported; if the template uses the Old Template Language format, the `attachment` parameter is ignored.
    
</dd>
</dl>

<dl>
<dd>

**$batchId:** `?string` — UUIDv4 identifier for the scheduled batch of transactional emails. If omitted, a valid UUIDv4 batch identifier is automatically generated.
    
</dd>
</dl>

<dl>
<dd>

**$bcc:** `?array` — Array of BCC recipient objects. Each object contains an email address and an optional name.
    
</dd>
</dl>

<dl>
<dd>

**$cc:** `?array` — Array of CC recipient objects. Each object contains an email address and an optional name.
    
</dd>
</dl>

<dl>
<dd>

**$headers:** `?array` — Custom email headers (non-standard headers) to include in the email. The `sender.ip` header can be set to specify the IP address used for sending transactional emails (dedicated IP users only). Header names must use Title-Case-Format (words separated by hyphens with the first letter of each word capitalized). Headers not in this format are automatically converted. Standard email headers are not supported. Example: `{"sender.ip":"1.2.3.4", "X-Mailin-custom":"some_custom_value", "Idempotency-Key":"abc-123"}`
    
</dd>
</dl>

<dl>
<dd>

**$htmlContent:** `?string` — HTML body content of the email. Required when `templateId` is not provided. Ignored when `templateId` is provided.
    
</dd>
</dl>

<dl>
<dd>

**$messageVersions:** `?array` — Array of message version objects for sending customized email variants. The `templateId` can be customized per version only if a global `templateId` is provided. The `htmlContent` and `textContent` can be customized per version only if at least one of these is present in the global parameters. Global parameters such as `to` (required), `bcc`, `cc`, `replyTo`, and `subject` can be customized per version. Maximum total recipients per API request is 2000. Maximum recipients per message version is 99. Individual `params` objects must not exceed 100 KB. Cumulative `params` across all versions must not exceed 1000 KB. See https://developers.brevo.com/docs/batch-send-transactional-emails for detailed usage instructions.
    
</dd>
</dl>

<dl>
<dd>

**$params:** `?array` — Key-value pairs for template variable substitution. Only applicable when the template uses the New Template Language format.
    
</dd>
</dl>

<dl>
<dd>

**$replyTo:** `?SendTransacEmailRequestReplyTo` — Reply-to email address (required) and optional display name. Recipients will use this address when replying to the email.
    
</dd>
</dl>

<dl>
<dd>

**$scheduledAt:** `?DateTime` — UTC date-time when the email should be sent (format: YYYY-MM-DDTHH:mm:ss.SSSZ). Include timezone information in the date-time value. Scheduled emails may be delayed by up to 5 minutes.
    
</dd>
</dl>

<dl>
<dd>

**$sender:** `?SendTransacEmailRequestSender` — Sender information. Required when `templateId` is not provided. Specify either an email address (with optional name) or a sender ID. The `name` field is ignored when `id` is provided.
    
</dd>
</dl>

<dl>
<dd>

**$subject:** `?string` — Email subject line. Required when `templateId` is not provided.
    
</dd>
</dl>

<dl>
<dd>

**$tags:** `?array` — Array of tags for categorizing and filtering emails
    
</dd>
</dl>

<dl>
<dd>

**$templateId:** `?int` — Template identifier
    
</dd>
</dl>

<dl>
<dd>

**$textContent:** `?string` — Plain text body content of the email. Ignored when `templateId` is provided.
    
</dd>
</dl>

<dl>
<dd>

**$to:** `?array` — Array of recipient objects. Each object contains an email address and an optional display name. Required when `messageVersions` is not provided. Ignored when `messageVersions` is provided. Example: `[{"name":"Jimmy", "email":"jimmy@example.com"}, {"name":"Joe", "email":"joe@example.com"}]`
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;transactionalEmails-&gt;deleteScheduledEmailById($identifier)</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Delete scheduled batch of emails by batchId or single scheduled email by messageId
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->transactionalEmails->deleteScheduledEmailById(
    '4320f270-a4e3-4a2e-b591-edfe30a5e627',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$identifier:** `string` — The `batchId` of scheduled emails batch (Should be a valid UUIDv4) or the `messageId` of scheduled email.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;transactionalEmails-&gt;getScheduledEmailById($identifier, $request) -> GetScheduledEmailByIdResponseBatches|GetScheduledEmailByIdResponseCreatedAt</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Fetch scheduled batch of emails by batchId or single scheduled email by messageId (Can retrieve data upto 30 days old)
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->transactionalEmails->getScheduledEmailById(
    '4320f270-a4e3-4a2e-b591-edfe30a5e627',
    new GetScheduledEmailByIdRequest([
        'startDate' => new DateTime('2022-02-02'),
        'endDate' => new DateTime('2022-03-02'),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$identifier:** `string` — The `batchId` of scheduled emails batch (Should be a valid UUIDv4) or the `messageId` of scheduled email.
    
</dd>
</dl>

<dl>
<dd>

**$startDate:** `?DateTime` — Mandatory if `endDate` is used. Starting date (YYYY-MM-DD) from which you want to fetch the list. Can be maximum 30 days older tha current date.
    
</dd>
</dl>

<dl>
<dd>

**$endDate:** `?DateTime` — Mandatory if `startDate` is used. Ending date (YYYY-MM-DD) till which you want to fetch the list. Maximum time period that can be selected is one month.
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?string` — Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed. Not valid when identifier is `messageId`.
    
</dd>
</dl>

<dl>
<dd>

**$status:** `?string` — Filter the records by `status` of the scheduled email batch or message. Not valid when identifier is `messageId`.
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` — Number of documents returned per page. Not valid when identifier is `messageId`.
    
</dd>
</dl>

<dl>
<dd>

**$offset:** `?int` — Index of the first document on the page.  Not valid when identifier is `messageId`.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;transactionalEmails-&gt;getTransacEmailsList($request) -> GetTransacEmailsListResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

This endpoint will show the list of emails for past 30 days by default. To retrieve emails before that time, please pass startDate and endDate in query filters.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->transactionalEmails->getTransacEmailsList(
    new GetTransacEmailsListRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$email:** `?string` — **Mandatory if templateId and messageId are not passed in query filters.** Email address to which transactional email has been sent.
    
</dd>
</dl>

<dl>
<dd>

**$templateId:** `?int` — **Mandatory if email and messageId are not passed in query filters.** Id of the template that was used to compose transactional email.
    
</dd>
</dl>

<dl>
<dd>

**$messageId:** `?string` — **Mandatory if templateId and email are not passed in query filters.** Message ID of the transactional email sent.
    
</dd>
</dl>

<dl>
<dd>

**$startDate:** `?string` — **Mandatory if endDate is used.** Starting date (YYYY-MM-DD) from which you want to fetch the list. **Maximum time period that can be selected is one month**.
    
</dd>
</dl>

<dl>
<dd>

**$endDate:** `?string` — **Mandatory if startDate is used.** Ending date (YYYY-MM-DD) till which you want to fetch the list. **Maximum time period that can be selected is one month.**
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?string` — Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` — Number of documents returned per page
    
</dd>
</dl>

<dl>
<dd>

**$offset:** `?int` — Index of the first document in the page
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;transactionalEmails-&gt;getTransacEmailContent($uuid) -> GetTransacEmailContentResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

<Note title="How to get uuid?">
You can get the uuid using either of the following methods:

Send a GET request to https://api.brevo.com/v3/smtp/emails and pass the message_id in the url. Use your api-key to authenticate the request and you will get your uuid as a response.

The uuid can also be fetched from the transactional logs page in your Brevo account, from the address URL.
</Note>
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->transactionalEmails->getTransacEmailContent(
    'uuid',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$uuid:** `string` — Unique id of the transactional email that has been sent to a particular contact
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;transactionalEmails-&gt;deleteAnSmtpTransactionalLog($identifier)</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->transactionalEmails->deleteAnSmtpTransactionalLog(
    'identifier',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$identifier:** `string` — MessageId of the transactional log(s) to delete
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;transactionalEmails-&gt;getAggregatedSmtpReport($request) -> GetAggregatedSmtpReportResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

This endpoint will show the aggregated stats for past 90 days by default if `startDate` and `endDate` OR `days` is not passed. The date range can not exceed 90 days
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->transactionalEmails->getAggregatedSmtpReport(
    new GetAggregatedSmtpReportRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$startDate:** `?string` — **Mandatory if endDate is used.** Starting date of the report (YYYY-MM-DD). Must be lower than equal to endDate
    
</dd>
</dl>

<dl>
<dd>

**$endDate:** `?string` — **Mandatory if startDate is used.** Ending date of the report (YYYY-MM-DD). Must be greater than equal to startDate
    
</dd>
</dl>

<dl>
<dd>

**$days:** `?int` — Number of days in the past including today (positive integer). _Not compatible with 'startDate' and 'endDate'_
    
</dd>
</dl>

<dl>
<dd>

**$tag:** `?string` — Tag of the emails
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;transactionalEmails-&gt;getEmailEventReport($request) -> GetEmailEventReportResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

This endpoint will show the aggregated stats for past 30 days by default if `startDate` and `endDate` OR `days` is not passed. The date range can not exceed 90 days
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->transactionalEmails->getEmailEventReport(
    new GetEmailEventReportRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$limit:** `?int` — Number limitation for the result returned
    
</dd>
</dl>

<dl>
<dd>

**$offset:** `?int` — Beginning point in the list to retrieve from.
    
</dd>
</dl>

<dl>
<dd>

**$startDate:** `?string` — **Mandatory if endDate is used.** Starting date of the report (YYYY-MM-DD). Must be lower than equal to endDate
    
</dd>
</dl>

<dl>
<dd>

**$endDate:** `?string` — **Mandatory if startDate is used.** Ending date of the report (YYYY-MM-DD). Must be greater than equal to startDate
    
</dd>
</dl>

<dl>
<dd>

**$days:** `?int` — Number of days in the past including today (positive integer). _Not compatible with 'startDate' and 'endDate'_
    
</dd>
</dl>

<dl>
<dd>

**$email:** `?string` — Filter the report for a specific email addresses
    
</dd>
</dl>

<dl>
<dd>

**$event:** `?string` — Filter the report for a specific event type
    
</dd>
</dl>

<dl>
<dd>

**$tags:** `?string` — Filter the report for tags (serialized and urlencoded array)
    
</dd>
</dl>

<dl>
<dd>

**$messageId:** `?string` — Filter on a specific message id
    
</dd>
</dl>

<dl>
<dd>

**$templateId:** `?int` — Filter on a specific template id
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?string` — Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;transactionalEmails-&gt;getSmtpReport($request) -> GetSmtpReportResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->transactionalEmails->getSmtpReport(
    new GetSmtpReportRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$limit:** `?int` — Number of documents returned per page
    
</dd>
</dl>

<dl>
<dd>

**$offset:** `?int` — Index of the first document on the page
    
</dd>
</dl>

<dl>
<dd>

**$startDate:** `?string` — **Mandatory if endDate is used.** Starting date of the report (YYYY-MM-DD)
    
</dd>
</dl>

<dl>
<dd>

**$endDate:** `?string` — **Mandatory if startDate is used.** Ending date of the report (YYYY-MM-DD)
    
</dd>
</dl>

<dl>
<dd>

**$days:** `?int` — Number of days in the past including today (positive integer). _Not compatible with 'startDate' and 'endDate'_
    
</dd>
</dl>

<dl>
<dd>

**$tag:** `?string` — Tag of the emails
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?string` — Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;transactionalEmails-&gt;postPreviewSmtpEmailTemplates($request) -> PostPreviewSmtpEmailTemplatesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->transactionalEmails->postPreviewSmtpEmailTemplates(
    [
        'key' => "value",
    ],
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$request:** `mixed` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;transactionalEmails-&gt;getSmtpTemplates($request) -> GetSmtpTemplatesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->transactionalEmails->getSmtpTemplates(
    new GetSmtpTemplatesRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$templateStatus:** `?bool` — Filter on the status of the template. Active = true, inactive = false
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` — Number of documents returned per page
    
</dd>
</dl>

<dl>
<dd>

**$offset:** `?int` — Index of the first document in the page
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?string` — Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;transactionalEmails-&gt;createSmtpTemplate($request) -> CreateSmtpTemplateResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->transactionalEmails->createSmtpTemplate(
    new CreateSmtpTemplateRequest([
        'sender' => new CreateSmtpTemplateRequestSender([]),
        'subject' => 'Thanks for your purchase !',
        'templateName' => 'Order Confirmation - EN',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$attachmentUrl:** `?string` — Absolute url of the attachment (**no local file**). Extension allowed: #### xlsx, xls, ods, docx, docm, doc, csv, pdf, txt, gif, jpg, jpeg, png, tif, tiff, rtf, bmp, cgm, css, shtml, html, htm, zip, xml, ppt, pptx, tar, ez, ics, mobi, msg, pub and eps'
    
</dd>
</dl>

<dl>
<dd>

**$htmlContent:** `?string` — Body of the message (HTML version). The field must have more than 10 characters. **REQUIRED if htmlUrl is empty**
    
</dd>
</dl>

<dl>
<dd>

**$htmlUrl:** `?string` — Url which contents the body of the email message. REQUIRED if htmlContent is empty
    
</dd>
</dl>

<dl>
<dd>

**$isActive:** `?bool` — Status of template. isActive = true means template is active and isActive = false means template is inactive
    
</dd>
</dl>

<dl>
<dd>

**$replyTo:** `?string` — Email on which campaign recipients will be able to reply to
    
</dd>
</dl>

<dl>
<dd>

**$sender:** `CreateSmtpTemplateRequestSender` — Sender details including id or email and name (_optional_). Only one of either Sender's email or Sender's ID shall be passed in one request at a time. For example: **{"name":"xyz", "email":"example@abc.com"}** **{"name":"xyz", "id":123}**
    
</dd>
</dl>

<dl>
<dd>

**$subject:** `string` — Subject of the template
    
</dd>
</dl>

<dl>
<dd>

**$tag:** `?string` — Tag of the template
    
</dd>
</dl>

<dl>
<dd>

**$templateName:** `string` — Name of the template
    
</dd>
</dl>

<dl>
<dd>

**$toField:** `?string` — To personalize the **To** Field. If you want to include the first name and last name of your recipient, add **{FNAME} {LNAME}**. These contact attributes must already exist in your Brevo account. If input parameter **params** used please use **{{contact.FNAME}} {{contact.LNAME}}** for personalization
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;transactionalEmails-&gt;getSmtpTemplate($templateId) -> GetSmtpTemplateOverview</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->transactionalEmails->getSmtpTemplate(
    1000000,
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$templateId:** `int` — id of the template
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;transactionalEmails-&gt;updateSmtpTemplate($templateId, $request)</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->transactionalEmails->updateSmtpTemplate(
    1000000,
    new UpdateSmtpTemplateRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$templateId:** `int` — id of the template
    
</dd>
</dl>

<dl>
<dd>

**$attachmentUrl:** `?string` — Absolute url of the attachment (**no local file**). Extensions allowed: #### xlsx, xls, ods, docx, docm, doc, csv, pdf, txt, gif, jpg, jpeg, png, tif, tiff, rtf, bmp, cgm, css, shtml, html, htm, zip, xml, ppt, pptx, tar, ez, ics, mobi, msg, pub and eps
    
</dd>
</dl>

<dl>
<dd>

**$htmlContent:** `?string` — **Required if htmlUrl is empty**. If the template is designed using Drag & Drop editor via HTML content, then the design page will not have Drag & Drop editor access for that template. Body of the message (HTML must have more than 10 characters)
    
</dd>
</dl>

<dl>
<dd>

**$htmlUrl:** `?string` — **Required if htmlContent is empty**. URL to the body of the email (HTML)
    
</dd>
</dl>

<dl>
<dd>

**$isActive:** `?bool` — Status of the template. isActive = false means template is inactive, isActive = true means template is active
    
</dd>
</dl>

<dl>
<dd>

**$replyTo:** `?string` — Email on which campaign recipients will be able to reply to
    
</dd>
</dl>

<dl>
<dd>

**$sender:** `?UpdateSmtpTemplateRequestSender` — Sender details including id or email and name (_optional_). Only one of either Sender's email or Sender's ID shall be passed in one request at a time. For example: **{"name":"xyz", "email":"example@abc.com"}** **{"name":"xyz", "id":123}**
    
</dd>
</dl>

<dl>
<dd>

**$subject:** `?string` — Subject of the email
    
</dd>
</dl>

<dl>
<dd>

**$tag:** `?string` — Tag of the template
    
</dd>
</dl>

<dl>
<dd>

**$templateName:** `?string` — Name of the template
    
</dd>
</dl>

<dl>
<dd>

**$toField:** `?string` — To personalize the **To** Field. If you want to include the first name and last name of your recipient, add **{FNAME} {LNAME}**. These contact attributes must already exist in your Brevo account. If input parameter **params** used please use **{{contact.FNAME}} {{contact.LNAME}}** for personalization
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;transactionalEmails-&gt;deleteSmtpTemplate($templateId)</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->transactionalEmails->deleteSmtpTemplate(
    1000000,
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$templateId:** `int` — id of the template
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;transactionalEmails-&gt;sendTestTemplate($templateId, $request)</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->transactionalEmails->sendTestTemplate(
    1000000,
    new SendTestTemplateRequest([
        'body' => new SendTestEmail([]),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$templateId:** `int` — Id of the template
    
</dd>
</dl>

<dl>
<dd>

**$request:** `SendTestEmail` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## TransactionalSms
<details><summary><code>$client-&gt;transactionalSms-&gt;sendAsyncTransactionalSms($request) -> SendAsyncTransactionalSmsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

<Note>
If the user includes stop code in the Transactional SMS, then it will be switched to Marketing SMS automatically and it will be interpreted as a Marketing SMS. To send Transactional SMS as Transactional, it is important not to use stop code.

Note: For adding a stop code, client has to add reply STOP to [STOP_CODE] and the [STOP_CODE] will be replaced with the number.
</Note>

<Note title="For end users in France">
Transactional SMS can be sent at any time without time restrictions. However, if a message is categorized as Marketing, it must adhere to specific time restrictions. Messages sent outside of these restricted hours will experience delays and will be processed during allowable times. Specifically, Marketing SMS cannot be processed between 10pm and 8am, on Sundays, and on French public holidays.
</Note>
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->transactionalSms->sendAsyncTransactionalSms(
    new SendTransacSms([
        'recipient' => '33689965433',
        'sender' => 'MyShop',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$request:** `SendTransacSms` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;transactionalSms-&gt;sendTransacSms($request) -> SendTransacSmsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->transactionalSms->sendTransacSms(
    new SendTransacSms([
        'recipient' => '33689965433',
        'sender' => 'MyShop',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$request:** `SendTransacSms` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;transactionalSms-&gt;getTransacAggregatedSmsReport($request) -> GetTransacAggregatedSmsReportResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->transactionalSms->getTransacAggregatedSmsReport(
    new GetTransacAggregatedSmsReportRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$startDate:** `?string` — **Mandatory if endDate is used.** Starting date (YYYY-MM-DD) of the report
    
</dd>
</dl>

<dl>
<dd>

**$endDate:** `?string` — **Mandatory if startDate is used.** Ending date (YYYY-MM-DD) of the report
    
</dd>
</dl>

<dl>
<dd>

**$days:** `?int` — Number of days in the past including today (positive integer). **Not compatible with startDate and endDate**
    
</dd>
</dl>

<dl>
<dd>

**$tag:** `?string` — Filter on a tag
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;transactionalSms-&gt;getSmsEvents($request) -> GetSmsEventsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->transactionalSms->getSmsEvents(
    new GetSmsEventsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$limit:** `?int` — Number of documents per page
    
</dd>
</dl>

<dl>
<dd>

**$startDate:** `?string` — **Mandatory if endDate is used.** Starting date (YYYY-MM-DD) of the report
    
</dd>
</dl>

<dl>
<dd>

**$endDate:** `?string` — **Mandatory if startDate is used.** Ending date (YYYY-MM-DD) of the report
    
</dd>
</dl>

<dl>
<dd>

**$offset:** `?int` — Index of the first document of the page
    
</dd>
</dl>

<dl>
<dd>

**$days:** `?int` — Number of days in the past including today (positive integer). **Not compatible with 'startDate' and 'endDate'**
    
</dd>
</dl>

<dl>
<dd>

**$phoneNumber:** `?string` — Filter the report for a specific phone number
    
</dd>
</dl>

<dl>
<dd>

**$event:** `?string` — Filter the report for specific events
    
</dd>
</dl>

<dl>
<dd>

**$tags:** `?string` — Filter the report for specific tags passed as a serialized urlencoded array
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?string` — Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;transactionalSms-&gt;getTransacSmsReport($request) -> GetTransacSmsReportResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->transactionalSms->getTransacSmsReport(
    new GetTransacSmsReportRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$startDate:** `?string` — **Mandatory if endDate is used.** Starting date (YYYY-MM-DD) of the report
    
</dd>
</dl>

<dl>
<dd>

**$endDate:** `?string` — **Mandatory if startDate is used.** Ending date (YYYY-MM-DD) of the report
    
</dd>
</dl>

<dl>
<dd>

**$days:** `?int` — Number of days in the past including today (positive integer). **Not compatible with 'startDate' and 'endDate'**
    
</dd>
</dl>

<dl>
<dd>

**$tag:** `?string` — Filter on a tag
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?string` — Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## SmsTemplates
<details><summary><code>$client-&gt;smsTemplates-&gt;getSmsTemplates($request) -> GetSmsTemplatesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->smsTemplates->getSmsTemplates(
    new GetSmsTemplatesRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$limit:** `?int` — Number of documents returned per page
    
</dd>
</dl>

<dl>
<dd>

**$offset:** `?int` — Index of the first document in the page
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?string` — Sort the results in the ascending/descending order of record creation. Default order is **descending** if `sort` is not passed
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>
