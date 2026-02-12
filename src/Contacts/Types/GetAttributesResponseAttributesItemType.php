<?php

namespace Brevo\Contacts\Types;

enum GetAttributesResponseAttributesItemType: string
{
    case Text = "text";
    case Date = "date";
    case Float = "float";
    case Id = "id";
    case Boolean = "boolean";
    case MultipleChoice = "multiple-choice";
    case User = "user";
}
