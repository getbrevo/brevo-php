<?php

namespace Brevo\Contacts\Types;

enum GetContactInfoRequestIdentifierType: string
{
    case EmailId = "email_id";
    case PhoneId = "phone_id";
    case ContactId = "contact_id";
    case ExtId = "ext_id";
    case WhatsappId = "whatsapp_id";
    case LandlineNumberId = "landline_number_id";
}
