<?php

namespace Apifreaks\Types;

enum BulkZipcodeLookupRequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
