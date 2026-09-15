<?php

namespace Apifreaks\Types;

enum GeolocationLookupV2RequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
