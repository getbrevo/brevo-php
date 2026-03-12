<?php

namespace Brevo\Tests;

use Brevo\Tests\Wire\WireMockTestCase;
use Brevo\Brevo;
use Brevo\Contacts\Requests\GetContactsRequest;
use Brevo\Contacts\Requests\CreateContactRequest;
use Brevo\Contacts\Types\CreateAttributeRequestAttributeCategory;
use Brevo\Contacts\Requests\CreateAttributeRequest;
use Brevo\Contacts\Types\UpdateAttributeRequestAttributeCategory;
use Brevo\Contacts\Requests\UpdateAttributeRequest;
use Brevo\Contacts\Types\DeleteAttributeRequestAttributeCategory;
use Brevo\Contacts\Requests\UpdateBatchContactsRequest;
use Brevo\Contacts\Requests\CreateDoiContactRequest;
use Brevo\Contacts\Requests\RequestContactExportRequest;
use Brevo\Contacts\Types\RequestContactExportRequestCustomContactFilter;
use Brevo\Contacts\Requests\GetFoldersRequest;
use Brevo\Types\CreateUpdateFolder;
use Brevo\Contacts\Requests\UpdateFolderRequest;
use Brevo\Contacts\Requests\GetFolderListsRequest;
use Brevo\Contacts\Requests\ImportContactsRequest;
use Brevo\Contacts\Requests\GetListsRequest;
use Brevo\Contacts\Requests\CreateListRequest;
use Brevo\Contacts\Requests\GetListRequest;
use Brevo\Contacts\Requests\UpdateListRequest;
use Brevo\Contacts\Requests\GetContactsFromListRequest;
use Brevo\Contacts\Requests\AddContactToListRequest;
use Brevo\Contacts\Types\AddContactToListRequestBodyEmails;
use Brevo\Contacts\Requests\RemoveContactFromListRequest;
use Brevo\Contacts\Types\RemoveContactFromListRequestBodyEmails;
use Brevo\Contacts\Requests\GetSegmentsRequest;
use Brevo\Contacts\Requests\GetContactInfoRequest;
use Brevo\Contacts\Requests\UpdateContactRequest;
use Brevo\Contacts\Requests\DeleteContactRequest;
use Brevo\Contacts\Requests\GetContactStatsRequest;

class ContactsWireTest extends WireMockTestCase
{
    /**
     * @var Brevo $client
     */
    private Brevo $client;

    /**
     */
    public function testGetContacts(): void {
        $testId = 'contacts.get_contacts.0';
        $this->client->contacts->getContacts(
            new GetContactsRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'contacts.get_contacts.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/contacts",
            null,
            1
        );
    }

    /**
     */
    public function testCreateContact(): void {
        $testId = 'contacts.create_contact.0';
        $this->client->contacts->createContact(
            new CreateContactRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'contacts.create_contact.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/contacts",
            null,
            1
        );
    }

    /**
     */
    public function testGetAttributes(): void {
        $testId = 'contacts.get_attributes.0';
        $this->client->contacts->getAttributes(
            [
                'headers' => [
                    'X-Test-Id' => 'contacts.get_attributes.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/contacts/attributes",
            null,
            1
        );
    }

    /**
     */
    public function testCreateAttribute(): void {
        $testId = 'contacts.create_attribute.0';
        $this->client->contacts->createAttribute(
            CreateAttributeRequestAttributeCategory::Normal->value,
            'attributeName',
            new CreateAttributeRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'contacts.create_attribute.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/contacts/attributes/normal/attributeName",
            null,
            1
        );
    }

    /**
     */
    public function testUpdateAttribute(): void {
        $testId = 'contacts.update_attribute.0';
        $this->client->contacts->updateAttribute(
            UpdateAttributeRequestAttributeCategory::Category->value,
            'attributeName',
            new UpdateAttributeRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'contacts.update_attribute.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "PUT",
            "/contacts/attributes/category/attributeName",
            null,
            1
        );
    }

    /**
     */
    public function testDeleteAttribute(): void {
        $testId = 'contacts.delete_attribute.0';
        $this->client->contacts->deleteAttribute(
            DeleteAttributeRequestAttributeCategory::Normal->value,
            'attributeName',
            [
                'headers' => [
                    'X-Test-Id' => 'contacts.delete_attribute.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "DELETE",
            "/contacts/attributes/normal/attributeName",
            null,
            1
        );
    }

    /**
     */
    public function testDeleteMultiAttributeOptions(): void {
        $testId = 'contacts.delete_multi_attribute_options.0';
        $this->client->contacts->deleteMultiAttributeOptions(
            'multiple-choice',
            'multipleChoiceAttribute',
            'multipleChoiceAttributeOption',
            [
                'headers' => [
                    'X-Test-Id' => 'contacts.delete_multi_attribute_options.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "DELETE",
            "/contacts/attributes/multiple-choice/multipleChoiceAttribute/multipleChoiceAttributeOption",
            null,
            1
        );
    }

    /**
     */
    public function testUpdateBatchContacts(): void {
        $testId = 'contacts.update_batch_contacts.0';
        $this->client->contacts->updateBatchContacts(
            new UpdateBatchContactsRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'contacts.update_batch_contacts.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/contacts/batch",
            null,
            1
        );
    }

    /**
     */
    public function testCreateDoiContact(): void {
        $testId = 'contacts.create_doi_contact.0';
        $this->client->contacts->createDoiContact(
            new CreateDoiContactRequest([
                'email' => 'elly@example.com',
                'includeListIds' => [
                    36,
                ],
                'redirectionUrl' => 'http://requestb.in/173lyyx1',
                'templateId' => 2,
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'contacts.create_doi_contact.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/contacts/doubleOptinConfirmation",
            null,
            1
        );
    }

    /**
     */
    public function testRequestContactExport(): void {
        $testId = 'contacts.request_contact_export.0';
        $this->client->contacts->requestContactExport(
            new RequestContactExportRequest([
                'customContactFilter' => new RequestContactExportRequestCustomContactFilter([]),
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'contacts.request_contact_export.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/contacts/export",
            null,
            1
        );
    }

    /**
     */
    public function testGetFolders(): void {
        $testId = 'contacts.get_folders.0';
        $this->client->contacts->getFolders(
            new GetFoldersRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'contacts.get_folders.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/contacts/folders",
            null,
            1
        );
    }

    /**
     */
    public function testCreateFolder(): void {
        $testId = 'contacts.create_folder.0';
        $this->client->contacts->createFolder(
            new CreateUpdateFolder([]),
            [
                'headers' => [
                    'X-Test-Id' => 'contacts.create_folder.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/contacts/folders",
            null,
            1
        );
    }

    /**
     */
    public function testGetFolder(): void {
        $testId = 'contacts.get_folder.0';
        $this->client->contacts->getFolder(
            1000000,
            [
                'headers' => [
                    'X-Test-Id' => 'contacts.get_folder.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/contacts/folders/1000000",
            null,
            1
        );
    }

    /**
     */
    public function testUpdateFolder(): void {
        $testId = 'contacts.update_folder.0';
        $this->client->contacts->updateFolder(
            1000000,
            new UpdateFolderRequest([
                'body' => new CreateUpdateFolder([]),
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'contacts.update_folder.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "PUT",
            "/contacts/folders/1000000",
            null,
            1
        );
    }

    /**
     */
    public function testDeleteFolder(): void {
        $testId = 'contacts.delete_folder.0';
        $this->client->contacts->deleteFolder(
            1000000,
            [
                'headers' => [
                    'X-Test-Id' => 'contacts.delete_folder.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "DELETE",
            "/contacts/folders/1000000",
            null,
            1
        );
    }

    /**
     */
    public function testGetFolderLists(): void {
        $testId = 'contacts.get_folder_lists.0';
        $this->client->contacts->getFolderLists(
            1000000,
            new GetFolderListsRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'contacts.get_folder_lists.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/contacts/folders/1000000/lists",
            null,
            1
        );
    }

    /**
     */
    public function testImportContacts(): void {
        $testId = 'contacts.import_contacts.0';
        $this->client->contacts->importContacts(
            new ImportContactsRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'contacts.import_contacts.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/contacts/import",
            null,
            1
        );
    }

    /**
     */
    public function testGetLists(): void {
        $testId = 'contacts.get_lists.0';
        $this->client->contacts->getLists(
            new GetListsRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'contacts.get_lists.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/contacts/lists",
            null,
            1
        );
    }

    /**
     */
    public function testCreateList(): void {
        $testId = 'contacts.create_list.0';
        $this->client->contacts->createList(
            new CreateListRequest([
                'folderId' => 2,
                'name' => 'Magento Customer - ES',
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'contacts.create_list.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/contacts/lists",
            null,
            1
        );
    }

    /**
     */
    public function testGetList(): void {
        $testId = 'contacts.get_list.0';
        $this->client->contacts->getList(
            1000000,
            new GetListRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'contacts.get_list.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/contacts/lists/1000000",
            null,
            1
        );
    }

    /**
     */
    public function testUpdateList(): void {
        $testId = 'contacts.update_list.0';
        $this->client->contacts->updateList(
            1000000,
            new UpdateListRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'contacts.update_list.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "PUT",
            "/contacts/lists/1000000",
            null,
            1
        );
    }

    /**
     */
    public function testDeleteList(): void {
        $testId = 'contacts.delete_list.0';
        $this->client->contacts->deleteList(
            1000000,
            [
                'headers' => [
                    'X-Test-Id' => 'contacts.delete_list.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "DELETE",
            "/contacts/lists/1000000",
            null,
            1
        );
    }

    /**
     */
    public function testGetContactsFromList(): void {
        $testId = 'contacts.get_contacts_from_list.0';
        $this->client->contacts->getContactsFromList(
            1000000,
            new GetContactsFromListRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'contacts.get_contacts_from_list.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/contacts/lists/1000000/contacts",
            null,
            1
        );
    }

    /**
     */
    public function testAddContactToList(): void {
        $testId = 'contacts.add_contact_to_list.0';
        $this->client->contacts->addContactToList(
            1000000,
            new AddContactToListRequest([
                'body' => new AddContactToListRequestBodyEmails([
                    'emails' => [
                        'jeff32@example.com',
                        'jim56@example.com',
                    ],
                ]),
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'contacts.add_contact_to_list.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/contacts/lists/1000000/contacts/add",
            null,
            1
        );
    }

    /**
     */
    public function testRemoveContactFromList(): void {
        $testId = 'contacts.remove_contact_from_list.0';
        $this->client->contacts->removeContactFromList(
            1000000,
            new RemoveContactFromListRequest([
                'body' => new RemoveContactFromListRequestBodyEmails([]),
            ]),
            [
                'headers' => [
                    'X-Test-Id' => 'contacts.remove_contact_from_list.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "POST",
            "/contacts/lists/1000000/contacts/remove",
            null,
            1
        );
    }

    /**
     */
    public function testGetSegments(): void {
        $testId = 'contacts.get_segments.0';
        $this->client->contacts->getSegments(
            new GetSegmentsRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'contacts.get_segments.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/contacts/segments",
            null,
            1
        );
    }

    /**
     */
    public function testGetContactInfo(): void {
        $testId = 'contacts.get_contact_info.0';
        $this->client->contacts->getContactInfo(
            'identifier',
            new GetContactInfoRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'contacts.get_contact_info.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/contacts/identifier",
            null,
            1
        );
    }

    /**
     */
    public function testUpdateContact(): void {
        $testId = 'contacts.update_contact.0';
        $this->client->contacts->updateContact(
            'identifier',
            new UpdateContactRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'contacts.update_contact.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "PUT",
            "/contacts/identifier",
            null,
            1
        );
    }

    /**
     */
    public function testDeleteContact(): void {
        $testId = 'contacts.delete_contact.0';
        $this->client->contacts->deleteContact(
            'identifier',
            new DeleteContactRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'contacts.delete_contact.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "DELETE",
            "/contacts/identifier",
            null,
            1
        );
    }

    /**
     */
    public function testGetContactStats(): void {
        $testId = 'contacts.get_contact_stats.0';
        $this->client->contacts->getContactStats(
            'identifier',
            new GetContactStatsRequest([]),
            [
                'headers' => [
                    'X-Test-Id' => 'contacts.get_contact_stats.0',
                ],
            ],
        );
        $this->verifyRequestCount(
            $testId,
            "GET",
            "/contacts/identifier/campaignStats",
            null,
            1
        );
    }

    /**
     */
    protected function setUp(): void {
        parent::setUp();
        $this->client = new Brevo(
            apiKey: 'test-apiKey',
        options: [
            'baseUrl' => 'http://localhost:8080',
        ],
        );
    }
}
