<?php

namespace Brevo\Files\Types;

enum GetCrmFilesRequestEntity: string
{
    case Companies = "companies";
    case Deals = "deals";
    case Contacts = "contacts";
}
