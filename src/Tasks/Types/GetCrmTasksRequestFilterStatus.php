<?php

namespace Brevo\Tasks\Types;

enum GetCrmTasksRequestFilterStatus: string
{
    case Done = "done";
    case Undone = "undone";
}
