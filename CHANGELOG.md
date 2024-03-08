# Changelog

## 1.0.3 (2024-03-08)
- Modification in Get all the contacts, contact can be filtered by segmentId and listIds as well
 **segmentId** | **int**| Id of the segment. **Either listIds or segmentId can be passed.** | [optional]
 **listIds** | [**int[]**](../Model/int.md)| Ids of the list. **Either listIds or segmentId can be passed.** | [optional]
-  Modification in Get a list's details
startDate and endDate (YYYY-MM-DDTHH:mm:ss.SSSZ) support added.
- Get order details route added in eCommerceAPI
- Below routes added MasterAccountAPI
    Update a group of sub-accounts
    Create a new group of sub-accounts
- Below routes added In UsersApi
    Update permission for a user 
    Send invitation to user
    Revoke user permission
    Resend / Cancel invitation
- In Return all your created WhatsApp templates source parameters also now supported
    **source** | **string**| source of the template | [optional]

## 1.0.2 (2023-07-17)
- Added Coupons route
- Added **previewText** | **string** | Preview text or preheader of the email campaign | [optional] 
- language support for Whatsapp template creation
- Making WhatsAppCampaignsApi PSR-4 compliant.

## 1.0.1 (2023-05-28)
- API's changed from sendinblue.com domain to api brevo.com domain
- For installation follow this process
- Follow reference example in order to use this SDK
