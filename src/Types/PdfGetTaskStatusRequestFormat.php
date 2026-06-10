<?php

namespace Apifreaks\Types;

enum PdfGetTaskStatusRequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
