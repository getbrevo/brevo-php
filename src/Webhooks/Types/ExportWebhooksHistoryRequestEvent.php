<?php

namespace Brevo\Webhooks\Types;

enum ExportWebhooksHistoryRequestEvent: string
{
    case InvalidParameter = "invalid_parameter";
    case MissingParameter = "missing_parameter";
    case HardBounce = "hardBounce";
    case SoftBounce = "softBounce";
    case Delivered = "delivered";
    case Spam = "spam";
    case Request = "request";
    case Opened = "opened";
    case Click = "click";
    case Invalid = "invalid";
    case Deferred = "deferred";
    case Blocked = "blocked";
    case Unsubscribed = "unsubscribed";
    case Error = "error";
    case UniqueOpened = "uniqueOpened";
    case LoadedByProxy = "loadedByProxy";
    case AllEvents = "allEvents";
}
