<?php

namespace Apifreaks\Types;

enum DomainReputationResponseTrustSignalsSignalsNegativeItemPolarity: string
{
    case Positive = "positive";
    case Negative = "negative";
    case Neutral = "neutral";
}
