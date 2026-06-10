<?php

namespace Apifreaks\Types;

enum BulkGeolocationLookupRequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
