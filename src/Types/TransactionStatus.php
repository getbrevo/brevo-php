<?php

namespace Brevo\Types;

enum TransactionStatus: string
{
    case Pending = "pending";
    case Complete = "complete";
    case Rejected = "rejected";
    case Cancelled = "cancelled";
    case Expired = "expired";
}
