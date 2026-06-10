<?php

namespace Apifreaks\Types;

enum BulkDomainAvailabilityCheckRequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
