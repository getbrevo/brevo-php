<?php

namespace Brevo\Balance\Types;

enum UpdateBalanceDefinitionRequestUnit: string
{
    case Points = "POINTS";
    case Eur = "EUR";
    case Usd = "USD";
    case Mxn = "MXN";
    case Gbp = "GBP";
    case Inr = "INR";
    case Cad = "CAD";
    case Sgd = "SGD";
    case Ron = "RON";
    case Jpy = "JPY";
    case Myr = "MYR";
    case Clp = "CLP";
    case Pen = "PEN";
    case Mad = "MAD";
    case Aud = "AUD";
    case Chf = "CHF";
    case Brl = "BRL";
}
