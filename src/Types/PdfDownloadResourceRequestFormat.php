<?php

namespace Apifreaks\Types;

enum PdfDownloadResourceRequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
