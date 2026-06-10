<?php

namespace Apifreaks\Types;

enum HistoricalWeatherRequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
