<?php

namespace Brevo\Types;

enum BalanceLimitTransactionType: string
{
    case Credit = "credit";
    case Debit = "debit";
}
