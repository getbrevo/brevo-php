<?php

namespace Brevo\Contacts\Types;

enum CreateAttributeRequestType: string
{
    case Text = "text";
    case Date = "date";
    case Float = "float";
    case Boolean = "boolean";
    case Id = "id";
    case Category = "category";
    case MultipleChoice = "multiple-choice";
    case User = "user";
}
