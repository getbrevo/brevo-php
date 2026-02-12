<?php

namespace Brevo\TransactionalEmails\Types;

enum GetSmtpTemplatesRequestSort: string
{
    case Asc = "asc";
    case Desc = "desc";
}
