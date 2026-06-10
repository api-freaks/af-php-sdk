<?php

namespace Apifreaks\Types;

enum GetCountriesRequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
