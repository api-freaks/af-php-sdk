<?php

namespace Apifreaks\Types;

enum HistoricalWeatherRequestPrecision: string
{
    case Daily = "daily";
    case Hourly = "hourly";
}
