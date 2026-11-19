<?php

namespace Apifreaks\Types;

enum GetCreditsUsageResponseSubSurchargeStatus: string
{
    case None = "none";
    case PaymentAdded = "payment_added";
    case PaymentCleared = "payment_cleared";
}
