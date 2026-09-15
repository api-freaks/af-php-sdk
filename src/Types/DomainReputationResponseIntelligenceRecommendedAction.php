<?php

namespace Apifreaks\Types;

enum DomainReputationResponseIntelligenceRecommendedAction: string
{
    case Allow = "allow";
    case Monitor = "monitor";
    case Block = "block";
}
