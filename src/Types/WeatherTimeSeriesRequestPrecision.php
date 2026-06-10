<?php

namespace Apifreaks\Types;

enum WeatherTimeSeriesRequestPrecision: string
{
    case Daily = "daily";
    case Hourly = "hourly";
}
