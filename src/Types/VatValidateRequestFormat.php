<?php

namespace Apifreaks\Types;

enum VatValidateRequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
