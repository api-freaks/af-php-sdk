<?php

namespace Apifreaks\Types;

enum VatSupportedCountriesRequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
