<?php

namespace Apifreaks\Types;

enum WeatherForecastRequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
