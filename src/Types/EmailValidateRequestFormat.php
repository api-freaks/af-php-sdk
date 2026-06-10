<?php

namespace Apifreaks\Types;

enum EmailValidateRequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
