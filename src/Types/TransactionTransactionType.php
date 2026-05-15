<?php

namespace Brevo\Types;

enum TransactionTransactionType: string
{
    case Credit = "credit";
    case Debit = "debit";
}
