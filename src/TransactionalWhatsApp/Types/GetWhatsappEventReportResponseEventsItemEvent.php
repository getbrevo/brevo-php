<?php

namespace Brevo\TransactionalWhatsApp\Types;

enum GetWhatsappEventReportResponseEventsItemEvent: string
{
    case Sent = "sent";
    case Delivered = "delivered";
    case Read = "read";
    case Error = "error";
    case Unsubscribe = "unsubscribe";
    case Reply = "reply";
    case SoftBounce = "soft-bounce";
}
