<?php

namespace Apifreaks\Types;

enum WeatherTimeSeriesRequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
