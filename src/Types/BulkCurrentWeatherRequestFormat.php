<?php

namespace Apifreaks\Types;

enum BulkCurrentWeatherRequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
