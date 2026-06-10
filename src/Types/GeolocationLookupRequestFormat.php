<?php

namespace Apifreaks\Types;

enum GeolocationLookupRequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
