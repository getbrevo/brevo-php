<?php

namespace Brevo\Contacts\Types;

enum UpdateAttributeRequestAttributeCategory: string
{
    case Category = "category";
    case Calculated = "calculated";
    case Global_ = "global";
    case Normal = "normal";
}
