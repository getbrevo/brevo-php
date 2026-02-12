<?php

namespace Brevo\TransactionalEmails\Types;

enum GetScheduledEmailByIdRequestSort: string
{
    case Asc = "asc";
    case Desc = "desc";
}
