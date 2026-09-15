<?php

namespace Apifreaks\Types;

enum AstronomyLookupV2RequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
