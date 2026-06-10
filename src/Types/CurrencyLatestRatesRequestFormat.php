<?php

namespace Apifreaks\Types;

enum CurrencyLatestRatesRequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
