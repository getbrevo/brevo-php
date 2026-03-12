<?php

namespace Brevo\Contacts;

use Brevo\Contacts\Requests\GetContactsRequest;
use Brevo\Types\GetContacts;
use Brevo\Contacts\Requests\CreateContactRequest;
use Brevo\Contacts\Types\CreateContactResponse;
use Brevo\Contacts\Types\GetAttributesResponse;
use Brevo\Contacts\Types\CreateAttributeRequestAttributeCategory;
use Brevo\Contacts\Requests\CreateAttributeRequest;
use Brevo\Contacts\Types\UpdateAttributeRequestAttributeCategory;
use Brevo\Contacts\Requests\UpdateAttributeRequest;
use Brevo\Contacts\Types\DeleteAttributeRequestAttributeCategory;
use Brevo\Contacts\Requests\UpdateBatchContactsRequest;
use Brevo\Contacts\Requests\CreateDoiContactRequest;
use Brevo\Contacts\Requests\RequestContactExportRequest;
use Brevo\Contacts\Types\RequestContactExportResponse;
use Brevo\Contacts\Requests\GetFoldersRequest;
use Brevo\Contacts\Types\GetFoldersResponse;
use Brevo\Types\CreateUpdateFolder;
use Brevo\Contacts\Types\CreateFolderResponse;
use Brevo\Types\GetFolder;
use Brevo\Contacts\Requests\UpdateFolderRequest;
use Brevo\Contacts\Requests\GetFolderListsRequest;
use Brevo\Contacts\Types\GetFolderListsResponse;
use Brevo\Contacts\Requests\ImportContactsRequest;
use Brevo\Contacts\Types\ImportContactsResponse;
use Brevo\Contacts\Requests\GetListsRequest;
use Brevo\Contacts\Types\GetListsResponse;
use Brevo\Contacts\Requests\CreateListRequest;
use Brevo\Contacts\Types\CreateListResponse;
use Brevo\Contacts\Requests\GetListRequest;
use Brevo\Contacts\Types\GetListResponse;
use Brevo\Contacts\Requests\UpdateListRequest;
use Brevo\Contacts\Requests\GetContactsFromListRequest;
use Brevo\Contacts\Requests\AddContactToListRequest;
use Brevo\Types\PostContactInfo;
use Brevo\Contacts\Requests\RemoveContactFromListRequest;
use Brevo\Contacts\Requests\GetSegmentsRequest;
use Brevo\Contacts\Types\GetSegmentsResponse;
use Brevo\Contacts\Requests\GetContactInfoRequest;
use Brevo\Contacts\Types\GetContactInfoResponse;
use Brevo\Contacts\Requests\UpdateContactRequest;
use Brevo\Contacts\Requests\DeleteContactRequest;
use Brevo\Contacts\Requests\GetContactStatsRequest;
use Brevo\Contacts\Types\GetContactStatsResponse;

interface ContactsClientInterface
{
    /**
     * <Note title="Follow this format when passing a SMS phone number as an attribute">
     * Accepted Number Formats
     *
     * 91xxxxxxxxxx
     * +91xxxxxxxxxx
     * 0091xxxxxxxxxx
     * </Note>
     *
     * @param GetContactsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetContacts
     */
    public function getContacts(GetContactsRequest $request = new GetContactsRequest(), ?array $options = null): GetContacts;

    /**
     * Creates new contacts on Brevo. Contacts can be created by passing either - <br><br> 1. email address of the contact (email_id),  <br> 2. phone number of the contact (to be passed as "SMS" field in "attributes" along with proper country code), For example- {"SMS":"+91xxxxxxxxxx"} or {"SMS":"0091xxxxxxxxxx"} <br> 3. ext_id <br>
     *
     * @param CreateContactRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return CreateContactResponse
     */
    public function createContact(CreateContactRequest $request = new CreateContactRequest(), ?array $options = null): CreateContactResponse;

    /**
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetAttributesResponse
     */
    public function getAttributes(?array $options = null): GetAttributesResponse;

    /**
     * @param value-of<CreateAttributeRequestAttributeCategory> $attributeCategory Category of the attribute
     * @param string $attributeName Name of the attribute
     * @param CreateAttributeRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function createAttribute(string $attributeCategory, string $attributeName, CreateAttributeRequest $request = new CreateAttributeRequest(), ?array $options = null): void;

    /**
     * @param value-of<UpdateAttributeRequestAttributeCategory> $attributeCategory Category of the attribute
     * @param string $attributeName Name of the existing attribute
     * @param UpdateAttributeRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function updateAttribute(string $attributeCategory, string $attributeName, UpdateAttributeRequest $request = new UpdateAttributeRequest(), ?array $options = null): void;

    /**
     * @param value-of<DeleteAttributeRequestAttributeCategory> $attributeCategory Category of the attribute
     * @param string $attributeName Name of the existing attribute
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function deleteAttribute(string $attributeCategory, string $attributeName, ?array $options = null): void;

    /**
     * @param 'multiple-choice' $attributeType Type of the attribute
     * @param string $multipleChoiceAttribute Name of the existing multiple-choice attribute
     * @param string $multipleChoiceAttributeOption Name of the existing multiple-choice attribute option that you want to delete
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function deleteMultiAttributeOptions(string $attributeType, string $multipleChoiceAttribute, string $multipleChoiceAttributeOption, ?array $options = null): void;

    /**
     * @param UpdateBatchContactsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function updateBatchContacts(UpdateBatchContactsRequest $request = new UpdateBatchContactsRequest(), ?array $options = null): void;

    /**
     * <Note title="How to use attributes param?">
     * attributes param in this endpoint is an object containing key-value pairs where values can be either a string, integer, array, or boolean. You can create key-value pairs with these four datatypes. When a value is an array, it should be an array of strings.
     * </Note>
     *
     * @param CreateDoiContactRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function createDoiContact(CreateDoiContactRequest $request, ?array $options = null): void;

    /**
     * It returns the background process ID which on completion calls the notify URL that you have set in the input. File will be available in csv.
     *
     * @param RequestContactExportRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return RequestContactExportResponse
     */
    public function requestContactExport(RequestContactExportRequest $request, ?array $options = null): RequestContactExportResponse;

    /**
     * <Note>
     * Ongoing changes for this endpoint
     *
     * We're dropping support for the response attributes totalSubscribers and totalBlacklisted.
     *
     * These are non breaking changes.
     *
     * The default value for the attributes will be 0.
     *
     * The uniqueSubscribers field is deprecated
     * </Note>
     *
     * @param GetFoldersRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetFoldersResponse
     */
    public function getFolders(GetFoldersRequest $request = new GetFoldersRequest(), ?array $options = null): GetFoldersResponse;

    /**
     * @param CreateUpdateFolder $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return CreateFolderResponse
     */
    public function createFolder(CreateUpdateFolder $request, ?array $options = null): CreateFolderResponse;

    /**
     * <Note>
     * Ongoing changes for this endpoint.
     *
     * We're dropping support for the response attributes totalSubscribers and totalBlacklisted.
     *
     * These are non breaking changes. The default value for the attributes will be 0.
     * </Note>
     *
     * @param int $folderId id of the folder
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetFolder
     */
    public function getFolder(int $folderId, ?array $options = null): GetFolder;

    /**
     * @param int $folderId Id of the folder
     * @param UpdateFolderRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function updateFolder(int $folderId, UpdateFolderRequest $request, ?array $options = null): void;

    /**
     * @param int $folderId Id of the folder
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function deleteFolder(int $folderId, ?array $options = null): void;

    /**
     * <Note>
     * Ongoing changes for this endpoint.
     *
     * We're dropping support for the response attributes totalSubscribers and totalBlacklisted.
     *
     * These are non breaking changes. The default value for the attributes will be 0.
     * </Note>
     *
     * @param int $folderId Id of the folder
     * @param GetFolderListsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetFolderListsResponse
     */
    public function getFolderLists(int $folderId, GetFolderListsRequest $request = new GetFolderListsRequest(), ?array $options = null): GetFolderListsResponse;

    /**
     * It returns the background process ID which on completion calls the notify URL that you have set in the input. **Note**: - Any contact attribute that doesn't exist in your account will be ignored at import end.
     *
     * @param ImportContactsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ImportContactsResponse
     */
    public function importContacts(ImportContactsRequest $request = new ImportContactsRequest(), ?array $options = null): ImportContactsResponse;

    /**
     * <Note>
     * Ongoing changes for this endpoint.
     *
     * We're dropping support for the response attributes totalSubscribers and totalBlacklisted.
     *
     * These are non breaking changes. The default value for the attributes will be 0.
     * </Note>
     *
     * @param GetListsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetListsResponse
     */
    public function getLists(GetListsRequest $request = new GetListsRequest(), ?array $options = null): GetListsResponse;

    /**
     * @param CreateListRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return CreateListResponse
     */
    public function createList(CreateListRequest $request, ?array $options = null): CreateListResponse;

    /**
     * @param int $listId Id of the list
     * @param GetListRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetListResponse
     */
    public function getList(int $listId, GetListRequest $request = new GetListRequest(), ?array $options = null): GetListResponse;

    /**
     * @param int $listId Id of the list
     * @param UpdateListRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function updateList(int $listId, UpdateListRequest $request = new UpdateListRequest(), ?array $options = null): void;

    /**
     * @param int $listId Id of the list
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function deleteList(int $listId, ?array $options = null): void;

    /**
     * @param int $listId Id of the list
     * @param GetContactsFromListRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetContacts
     */
    public function getContactsFromList(int $listId, GetContactsFromListRequest $request = new GetContactsFromListRequest(), ?array $options = null): GetContacts;

    /**
     * @param int $listId Id of the list
     * @param AddContactToListRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return PostContactInfo
     */
    public function addContactToList(int $listId, AddContactToListRequest $request, ?array $options = null): PostContactInfo;

    /**
     * @param int $listId Id of the list
     * @param RemoveContactFromListRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return PostContactInfo
     */
    public function removeContactFromList(int $listId, RemoveContactFromListRequest $request, ?array $options = null): PostContactInfo;

    /**
     * @param GetSegmentsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetSegmentsResponse
     */
    public function getSegments(GetSegmentsRequest $request = new GetSegmentsRequest(), ?array $options = null): GetSegmentsResponse;

    /**
     * <Note title="Follow this format when passing a SMS phone number as an attribute">
     * Accepted Number Formats
     *
     * 91xxxxxxxxxx
     * +91xxxxxxxxxx
     * 0091xxxxxxxxxx
     * </Note>
     *
     * There are 2 ways to get a contact <br><br> Option 1- https://api.brevo.com/v3/contacts/{identifier} <br><br> Option 2- https://api.brevo.com/v3/contacts/{identifier}?identifierType={} <br> <br> Option 1 only works if identifierType is email_id (for EMAIL), phone_id (for SMS) or contact_id (for ID of the contact),where you can directly pass the value of EMAIL, SMS and ID of the contact.   <br><br> Option 2 works for all identifierType, use email_id for EMAIL attribute, phone_id for SMS attribute, contact_id for ID of the contact, ext_id for EXT_ID attribute, whatsapp_id for WHATSAPP attribute, landline_number_id for LANDLINE_NUMBER attribute <br><br>Along with the contact details, this endpoint will show the statistics of contact for the recent 90 days by default. To fetch the earlier statistics, please use Get contact campaign stats ``https://developers.brevo.com/reference/contacts-7#getcontactstats`` endpoint with the appropriate date ranges.
     *
     * @param (
     *    string
     *   |int
     * ) $identifier Email (urlencoded) OR ID of the contact OR its SMS attribute value OR EXT_ID attribute (urlencoded)
     * @param GetContactInfoRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetContactInfoResponse
     */
    public function getContactInfo(string|int $identifier, GetContactInfoRequest $request = new GetContactInfoRequest(), ?array $options = null): GetContactInfoResponse;

    /**
     * There are 2 ways to update a contact <br><br> Option 1- https://api.brevo.com/v3/contacts/{identifier} <br><br> Option 2- https://api.brevo.com/v3/contacts/{identifier}?identifierType={} <br> <br> Option 1 only works if identifierType is email_id (for EMAIL) or contact_id (for ID of the contact),where you can directly pass the value of EMAIL and ID of the contact.   <br><br> Option 2 works for all identifierType, use email_id for EMAIL attribute, contact_id for ID of the contact, ext_id for EXT_ID attribute, phone_id for SMS attribute, whatsapp_id for WHATSAPP attribute, landline_number_id for LANDLINE attribute
     *
     * @param (
     *    string
     *   |int
     * ) $identifier Email (urlencoded) OR ID of the contact OR EXT_ID attribute (urlencoded) OR its SMS attribute value OR its WHATSAPP attribute value OR its LANDLINE attribute value
     * @param UpdateContactRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function updateContact(string|int $identifier, UpdateContactRequest $request = new UpdateContactRequest(), ?array $options = null): void;

    /**
     * There are 2 ways to delete a contact <br><br> Option 1- https://api.brevo.com/v3/contacts/{identifier} <br><br> Option 2- https://api.brevo.com/v3/contacts/{identifier}?identifierType={} <br> <br> Option 1 only works if identifierType is email_id (for EMAIL) or contact_id (for ID of the contact),where you can directly pass the value of EMAIL and ID of the contact.   <br><br> Option 2 works for all identifierType, use email_id for EMAIL attribute, contact_id for ID of the contact, ext_id for EXT_ID attribute, phone_id for SMS attribute, whatsapp_id for WHATSAPP attribute, landline_number_id for LANDLINE_NUMBER attribute.
     *
     * @param (
     *    string
     *   |int
     * ) $identifier Email (urlencoded) OR ID of the contact OR EXT_ID attribute (urlencoded)
     * @param DeleteContactRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     */
    public function deleteContact(string|int $identifier, DeleteContactRequest $request = new DeleteContactRequest(), ?array $options = null): void;

    /**
     * @param (
     *    string
     *   |int
     * ) $identifier Email (urlencoded) OR ID of the contact
     * @param GetContactStatsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetContactStatsResponse
     */
    public function getContactStats(string|int $identifier, GetContactStatsRequest $request = new GetContactStatsRequest(), ?array $options = null): GetContactStatsResponse;
}
