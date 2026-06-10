<?php

namespace Apifreaks\Types;

enum IbanValidateRequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
