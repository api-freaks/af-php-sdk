<?php

namespace Apifreaks\Types;

enum BulkVatRateByCountryRequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
