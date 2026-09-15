<?php

namespace Apifreaks\Types;

enum BulkDomainWhoisLookupV2RequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
