<?php

namespace Brevo\Tasks\Types;

enum GetCrmTasksRequestFilterDate: string
{
    case Overdue = "overdue";
    case Today = "today";
    case Tomorrow = "tomorrow";
    case Week = "week";
    case Range = "range";
}
