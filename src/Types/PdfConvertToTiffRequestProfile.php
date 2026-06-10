<?php

namespace Apifreaks\Types;

enum PdfConvertToTiffRequestProfile: string
{
    case Bw = "bw";
    case Gray = "gray";
    case Rgb = "rgb";
    case Rgba = "rgba";
    case Cmyk = "cmyk";
}
