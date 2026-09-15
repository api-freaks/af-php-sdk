<?php

namespace Apifreaks\Types;

enum BulkGeolocationLookupV2RequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
