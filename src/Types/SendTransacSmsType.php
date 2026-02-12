<?php

namespace Brevo\Types;

enum SendTransacSmsType: string
{
    case Transactional = "transactional";
    case Marketing = "marketing";
}
