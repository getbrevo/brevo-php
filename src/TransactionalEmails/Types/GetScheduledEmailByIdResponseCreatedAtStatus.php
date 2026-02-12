<?php

namespace Brevo\TransactionalEmails\Types;

enum GetScheduledEmailByIdResponseCreatedAtStatus: string
{
    case InProgress = "inProgress";
    case Queued = "queued";
    case Processed = "processed";
    case Error = "error";
}
