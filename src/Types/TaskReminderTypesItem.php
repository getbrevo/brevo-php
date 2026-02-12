<?php

namespace Brevo\Types;

enum TaskReminderTypesItem: string
{
    case Email = "email";
    case Push = "push";
}
