<?php

namespace Apifreaks\Types;

enum PhoneValidateResponseLineType: string
{
    case Mobile = "MOBILE";
    case FixedLine = "FIXED_LINE";
    case FixedLineOrMobile = "FIXED_LINE_OR_MOBILE";
    case Voip = "VOIP";
    case TollFree = "TOLL_FREE";
    case PremiumRate = "PREMIUM_RATE";
    case SharedCost = "SHARED_COST";
    case PersonalNumber = "PERSONAL_NUMBER";
    case Pager = "PAGER";
    case Uan = "UAN";
    case Voicemail = "VOICEMAIL";
    case Unknown = "UNKNOWN";
}
