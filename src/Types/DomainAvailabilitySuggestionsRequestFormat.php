<?php

namespace Apifreaks\Types;

enum DomainAvailabilitySuggestionsRequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
