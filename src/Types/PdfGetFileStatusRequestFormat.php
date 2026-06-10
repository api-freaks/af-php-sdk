<?php

namespace Apifreaks\Types;

enum PdfGetFileStatusRequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
