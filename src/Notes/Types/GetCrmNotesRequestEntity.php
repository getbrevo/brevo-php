<?php

namespace Brevo\Notes\Types;

enum GetCrmNotesRequestEntity: string
{
    case Companies = "companies";
    case Deals = "deals";
    case Contacts = "contacts";
}
