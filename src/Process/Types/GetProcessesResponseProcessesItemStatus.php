<?php

namespace Brevo\Process\Types;

enum GetProcessesResponseProcessesItemStatus: string
{
    case Queued = "queued";
    case Processing = "processing";
    case Completed = "completed";
    case Failed = "failed";
    case Cancelled = "cancelled";
}
