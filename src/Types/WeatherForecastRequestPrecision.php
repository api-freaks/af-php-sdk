<?php

namespace Apifreaks\Types;

enum WeatherForecastRequestPrecision: string
{
    case Daily = "daily";
    case Hourly = "hourly";
    case Minutely = "minutely";
}
