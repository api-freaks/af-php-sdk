<?php

namespace Apifreaks\Types;

enum GetCountryDetailsRequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
