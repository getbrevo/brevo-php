<?php

namespace Brevo\Balance\Types;

enum UpdateBalanceLimitRequestTransactionType: string
{
    case Credit = "credit";
    case Debit = "debit";
}
