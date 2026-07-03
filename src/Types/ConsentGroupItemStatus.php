<?php

namespace Brevo\Types;

enum ConsentGroupItemStatus: string
{
    case Subscribed = "subscribed";
    case Unsubscribed = "unsubscribed";
}
