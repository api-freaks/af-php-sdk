<?php

namespace Apifreaks\Types;

enum PdfUploadResourcesRequestFormat: string
{
    case Json = "json";
    case Xml = "xml";
}
