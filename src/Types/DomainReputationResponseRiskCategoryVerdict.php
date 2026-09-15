<?php

namespace Apifreaks\Types;

enum DomainReputationResponseRiskCategoryVerdict: string
{
    case Safe = "safe";
    case Suspicious = "suspicious";
}
