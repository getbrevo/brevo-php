<?php

namespace Brevo\TransactionalEmails\Types;

enum GetScheduledEmailByIdRequestStatus: string
{
    case Processed = "processed";
    case InProgress = "inProgress";
    case Queued = "queued";
}
