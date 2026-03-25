<?php

namespace Brevo\Balance\Types;

enum GetLoyaltyBalanceProgramsPidTransactionHistoryRequestTransactionType: string
{
    case Credit = "credit";
    case Debit = "debit";
}
