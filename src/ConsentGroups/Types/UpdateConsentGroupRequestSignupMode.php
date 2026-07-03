<?php

namespace Brevo\ConsentGroups\Types;

enum UpdateConsentGroupRequestSignupMode: string
{
    case Manual = "manual";
    case Automatic = "automatic";
}
