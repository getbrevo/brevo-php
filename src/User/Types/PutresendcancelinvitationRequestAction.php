<?php

namespace Brevo\User\Types;

enum PutresendcancelinvitationRequestAction: string
{
    case Resend = "resend";
    case Cancel = "cancel";
}
