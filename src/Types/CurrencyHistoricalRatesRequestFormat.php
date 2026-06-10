<?php

namespace Apifreaks\Types;

enum CurrencyHistoricalRatesRequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
