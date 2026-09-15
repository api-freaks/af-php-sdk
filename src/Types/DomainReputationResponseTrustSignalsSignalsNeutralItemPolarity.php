<?php

namespace Apifreaks\Types;

enum DomainReputationResponseTrustSignalsSignalsNeutralItemPolarity: string
{
    case Positive = "positive";
    case Negative = "negative";
    case Neutral = "neutral";
}
