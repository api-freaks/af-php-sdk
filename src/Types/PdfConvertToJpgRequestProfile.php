<?php

namespace Apifreaks\Types;

enum PdfConvertToJpgRequestProfile: string
{
    case Gray = "gray";
    case Rgb = "rgb";
    case Cmyk = "cmyk";
}
