<?php

namespace Apifreaks\Types;

enum CurrentWeatherRequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
