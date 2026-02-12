<?php

namespace Brevo\Process\Types;

enum GetProcessResponseStatus: string
{
    case Queued = "queued";
    case Processing = "processing";
    case Completed = "completed";
    case Failed = "failed";
    case Cancelled = "cancelled";
}
