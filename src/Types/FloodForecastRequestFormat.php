<?php

namespace Apifreaks\Types;

enum FloodForecastRequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
