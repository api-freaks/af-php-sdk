<?php

namespace Apifreaks\Types;

enum VatRateByCountryRequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
