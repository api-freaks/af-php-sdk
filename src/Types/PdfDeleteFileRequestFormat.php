<?php

namespace Apifreaks\Types;

enum PdfDeleteFileRequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
