<?php

namespace Brevo\TransactionalSms\Types;

enum GetSmsEventsRequestEvent: string
{
    case Bounces = "bounces";
    case HardBounces = "hardBounces";
    case SoftBounces = "softBounces";
    case Delivered = "delivered";
    case Sent = "sent";
    case Accepted = "accepted";
    case Unsubscription = "unsubscription";
    case Replies = "replies";
    case Blocked = "blocked";
    case Rejected = "rejected";
    case Skipped = "skipped";
}
