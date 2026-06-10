<?php

namespace Apifreaks\Types;

enum CurrencySupportedRequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
