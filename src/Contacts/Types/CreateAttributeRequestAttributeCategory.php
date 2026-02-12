<?php

namespace Brevo\Contacts\Types;

enum CreateAttributeRequestAttributeCategory: string
{
    case Normal = "normal";
    case Transactional = "transactional";
    case Category = "category";
    case Calculated = "calculated";
    case Global_ = "global";
}
