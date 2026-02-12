<?php

namespace Brevo\Types;

enum TaskReminderUnit: string
{
    case Minutes = "minutes";
    case Hours = "hours";
    case Weeks = "weeks";
    case Days = "days";
}
