<?php

namespace Brevo\Webhooks\Types;

enum CreateWebhookRequestEventsItem: string
{
    case Sent = "sent";
    case HardBounce = "hardBounce";
    case SoftBounce = "softBounce";
    case Blocked = "blocked";
    case Spam = "spam";
    case Delivered = "delivered";
    case Request = "request";
    case Click = "click";
    case Invalid = "invalid";
    case Deferred = "deferred";
    case Opened = "opened";
    case UniqueOpened = "uniqueOpened";
    case Unsubscribed = "unsubscribed";
    case ListAddition = "listAddition";
    case ContactUpdated = "contactUpdated";
    case ContactDeleted = "contactDeleted";
    case InboundEmailProcessed = "inboundEmailProcessed";
}
