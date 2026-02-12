<?php

namespace Brevo\Reward\Types;

enum GetLoyaltyOfferProgramsPidOffersRequestVersion: string
{
    case Active = "active";
    case Draft = "draft";
}
