<?php

namespace Brevo\TransactionalEmails\Types;

enum GetTransacBlockedContactsResponseContactsItemReasonCode: string
{
    case UnsubscribedViaMa = "unsubscribedViaMA";
    case UnsubscribedViaEmail = "unsubscribedViaEmail";
    case AdminBlocked = "adminBlocked";
    case UnsubscribedViaApi = "unsubscribedViaApi";
    case HardBounce = "hardBounce";
    case ContactFlaggedAsSpam = "contactFlaggedAsSpam";
}
