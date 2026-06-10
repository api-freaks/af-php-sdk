<?php

namespace Apifreaks\Types;

enum PdfExtractPagesRequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
