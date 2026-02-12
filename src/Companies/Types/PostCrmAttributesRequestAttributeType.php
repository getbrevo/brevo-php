<?php

namespace Brevo\Companies\Types;

enum PostCrmAttributesRequestAttributeType: string
{
    case Text = "text";
    case User = "user";
    case Number = "number";
    case SingleSelect = "single-select";
    case Date = "date";
    case Boolean = "boolean";
    case MultiChoice = "multi-choice";
}
