<?php

namespace Brevo\Contacts\Types;

enum RequestContactExportRequestCustomContactFilterActionForContacts: string
{
    case AllContacts = "allContacts";
    case Subscribed = "subscribed";
    case Unsubscribed = "unsubscribed";
    case UnsubscribedPerList = "unsubscribedPerList";
}
