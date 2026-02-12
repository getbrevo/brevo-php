<?php

namespace Brevo\Balance\Types;

enum CreateBalanceLimitRequestTransactionType: string
{
    case Credit = "credit";
    case Debit = "debit";
}
