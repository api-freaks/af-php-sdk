<?php

namespace Apifreaks\Types;

enum DomainReputationResponseTrustSignalsSignalsPositiveItemPolarity: string
{
    case Positive = "positive";
    case Negative = "negative";
    case Neutral = "neutral";
}
