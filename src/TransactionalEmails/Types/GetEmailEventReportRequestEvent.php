<?php

namespace Brevo\TransactionalEmails\Types;

enum GetEmailEventReportRequestEvent: string
{
    case Bounces = "bounces";
    case HardBounces = "hardBounces";
    case SoftBounces = "softBounces";
    case Delivered = "delivered";
    case Spam = "spam";
    case Requests = "requests";
    case Opened = "opened";
    case Clicks = "clicks";
    case Invalid = "invalid";
    case Deferred = "deferred";
    case Blocked = "blocked";
    case Unsubscribed = "unsubscribed";
    case Error = "error";
    case LoadedByProxy = "loadedByProxy";
}
