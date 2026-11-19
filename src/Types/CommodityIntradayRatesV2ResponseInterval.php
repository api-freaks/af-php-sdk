<?php

namespace Apifreaks\Types;

enum CommodityIntradayRatesV2ResponseInterval: string
{
    case OneM = "1m";
    case FiveM = "5m";
    case TenM = "10m";
    case FifteenM = "15m";
    case ThirtyM = "30m";
    case FortyFiveM = "45m";
    case OneH = "1h";
    case TwoH = "2h";
    case FourH = "4h";
    case EightH = "8h";
    case TwelveH = "12h";
    case OneD = "1d";
}
