<?php

namespace Brevo\Payments\Types;

enum GetPaymentRequestResponseStatus: string
{
    case Created = "created";
    case Sent = "sent";
    case ReminderSent = "reminderSent";
    case Paid = "paid";
}
