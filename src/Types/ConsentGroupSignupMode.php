<?php

namespace Brevo\Types;

enum ConsentGroupSignupMode: string
{
    case Manual = "manual";
    case Automatic = "automatic";
}
