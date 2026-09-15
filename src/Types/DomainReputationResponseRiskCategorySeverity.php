<?php

namespace Apifreaks\Types;

enum DomainReputationResponseRiskCategorySeverity: string
{
    case None = "none";
    case Low = "low";
    case Medium = "medium";
    case High = "high";
}
