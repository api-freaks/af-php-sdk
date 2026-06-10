<?php

namespace Apifreaks\Types;

enum MarineWeatherRequestPrecision: string
{
    case Daily = "daily";
    case Hourly = "hourly";
    case Minutely = "minutely";
}
