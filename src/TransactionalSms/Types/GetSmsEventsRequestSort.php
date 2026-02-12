<?php

namespace Brevo\TransactionalSms\Types;

enum GetSmsEventsRequestSort: string
{
    case Asc = "asc";
    case Desc = "desc";
}
