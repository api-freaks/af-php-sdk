<?php

namespace Apifreaks\Types;

enum DomainWhoisLookupV2RequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
