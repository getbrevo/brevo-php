<?php

namespace Brevo\Balance\Types;

enum GetLoyaltyBalanceProgramsPidTransactionHistoryRequestStatus: string
{
    case Draft = "draft";
    case Completed = "completed";
    case Rejected = "rejected";
    case Cancelled = "cancelled";
    case Expired = "expired";
}
