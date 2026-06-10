<?php

namespace Apifreaks\Types;

enum DomainAvailabilityCheckRequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
