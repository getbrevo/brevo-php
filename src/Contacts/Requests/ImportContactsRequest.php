<?php

namespace Brevo\Contacts\Requests;

use Brevo\Core\Json\JsonSerializableType;
use Brevo\Core\Json\JsonProperty;
use Brevo\Contacts\Types\ImportContactsRequestJsonBodyItem;
use Brevo\Core\Types\ArrayType;
use Brevo\Contacts\Types\ImportContactsRequestNewList;

class ImportContactsRequest extends JsonSerializableType
{
    /**
     * @var ?bool $disableNotification To disable email notification
     */
    #[JsonProperty('disableNotification')]
    public ?bool $disableNotification;

    /**
     * @var ?bool $emailBlacklist To blacklist all the contacts for email
     */
    #[JsonProperty('emailBlacklist')]
    public ?bool $emailBlacklist;

    /**
     * @var ?bool $emptyContactsAttributes To facilitate the choice to erase any attribute of the existing contacts with empty value. emptyContactsAttributes = true means the empty fields in your import will erase any attribute that currently contain data in Brevo, & emptyContactsAttributes = false means the empty fields will not affect your existing data ( **only available if `updateExistingContacts` set to true **)
     */
    #[JsonProperty('emptyContactsAttributes')]
    public ?bool $emptyContactsAttributes;

    /**
     * @var ?string $fileBody **Mandatory if fileUrl and jsonBody is not defined.** CSV content to be imported. Use semicolon to separate multiple attributes. **Maximum allowed file body size is 10MB** . However we recommend a safe limit of around 8 MB to avoid the issues caused due to increase of file body size while parsing. Please use fileUrl instead to import bigger files.
     */
    #[JsonProperty('fileBody')]
    public ?string $fileBody;

    /**
     * @var ?string $fileUrl **Mandatory if fileBody and jsonBody is not defined.** URL of the file to be imported (**no local file**). Possible file formats: #### .txt, .csv, .json
     */
    #[JsonProperty('fileUrl')]
    public ?string $fileUrl;

    /**
     * @var ?array<ImportContactsRequestJsonBodyItem> $jsonBody **Mandatory if fileUrl and fileBody is not defined.** JSON content to be imported. **Maximum allowed json body size is 10MB** . However we recommend a safe limit of around 8 MB to avoid the issues caused due to increase of json body size while parsing. Please use fileUrl instead to import bigger files.
     */
    #[JsonProperty('jsonBody'), ArrayType([ImportContactsRequestJsonBodyItem::class])]
    public ?array $jsonBody;

    /**
     * @var ?array<int> $listIds **Mandatory if newList is not defined.** Ids of the lists in which the contacts shall be imported. For example, **[2, 4, 7]**.
     */
    #[JsonProperty('listIds'), ArrayType(['integer'])]
    public ?array $listIds;

    /**
     * @var ?ImportContactsRequestNewList $newList To create a new list and import the contacts into it, pass the listName and an optional folderId.
     */
    #[JsonProperty('newList')]
    public ?ImportContactsRequestNewList $newList;

    /**
     * @var ?string $notifyUrl URL that will be called once the import process is finished. For reference, https://help.brevo.com/hc/en-us/articles/360007666479
     */
    #[JsonProperty('notifyUrl')]
    public ?string $notifyUrl;

    /**
     * @var ?bool $smsBlacklist To blacklist all the contacts for sms
     */
    #[JsonProperty('smsBlacklist')]
    public ?bool $smsBlacklist;

    /**
     * @var ?bool $updateExistingContacts To facilitate the choice to update the existing contacts
     */
    #[JsonProperty('updateExistingContacts')]
    public ?bool $updateExistingContacts;

    /**
     * @param array{
     *   disableNotification?: ?bool,
     *   emailBlacklist?: ?bool,
     *   emptyContactsAttributes?: ?bool,
     *   fileBody?: ?string,
     *   fileUrl?: ?string,
     *   jsonBody?: ?array<ImportContactsRequestJsonBodyItem>,
     *   listIds?: ?array<int>,
     *   newList?: ?ImportContactsRequestNewList,
     *   notifyUrl?: ?string,
     *   smsBlacklist?: ?bool,
     *   updateExistingContacts?: ?bool,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->disableNotification = $values['disableNotification'] ?? null;
        $this->emailBlacklist = $values['emailBlacklist'] ?? null;
        $this->emptyContactsAttributes = $values['emptyContactsAttributes'] ?? null;
        $this->fileBody = $values['fileBody'] ?? null;
        $this->fileUrl = $values['fileUrl'] ?? null;
        $this->jsonBody = $values['jsonBody'] ?? null;
        $this->listIds = $values['listIds'] ?? null;
        $this->newList = $values['newList'] ?? null;
        $this->notifyUrl = $values['notifyUrl'] ?? null;
        $this->smsBlacklist = $values['smsBlacklist'] ?? null;
        $this->updateExistingContacts = $values['updateExistingContacts'] ?? null;
    }
}
