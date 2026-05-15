<?php

namespace Brevo\Balance\Types;

enum BeginTransactionRequestTransactionType: string
{
    case Credit = "credit";
    case Debit = "debit";
}
