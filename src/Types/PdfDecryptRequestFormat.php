<?php

namespace Apifreaks\Types;

enum PdfDecryptRequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
