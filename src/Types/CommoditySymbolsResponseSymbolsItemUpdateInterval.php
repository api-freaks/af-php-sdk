<?php

namespace Apifreaks\Types;

enum CommoditySymbolsResponseSymbolsItemUpdateInterval: string
{
    case PerSecond = "PER_SECOND";
    case PerMinute = "PER_MINUTE";
    case Per10Minutes = "PER_10_MINUTES";
    case PerHour = "PER_HOUR";
    case PerDay = "PER_DAY";
    case PerWeek = "PER_WEEK";
    case PerMonth = "PER_MONTH";
    case Per6Months = "PER_6_MONTHS";
}
