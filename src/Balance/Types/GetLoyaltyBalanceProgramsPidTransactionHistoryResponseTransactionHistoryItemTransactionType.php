<?php

namespace Brevo\Balance\Types;

enum GetLoyaltyBalanceProgramsPidTransactionHistoryResponseTransactionHistoryItemTransactionType: string
{
    case Credit = "credit";
    case Debit = "debit";
}
