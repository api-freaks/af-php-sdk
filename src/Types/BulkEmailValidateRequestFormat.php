<?php

namespace Apifreaks\Types;

enum BulkEmailValidateRequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
