<?php

namespace Brevo\Types;

enum TransactionStatus: string
{
    case Draft = "draft";
    case Completed = "completed";
    case Rejected = "rejected";
    case Cancelled = "cancelled";
    case Expired = "expired";
}
