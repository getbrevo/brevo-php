<?php

namespace Brevo\Types;

enum ConversationsMessageType: string
{
    case Agent = "agent";
    case Visitor = "visitor";
}
