<?php

namespace Apifreaks\Types;

enum PdfConvertToGifRequestProfile: string
{
    case Bw = "bw";
    case Gray = "gray";
    case Rgb = "rgb";
    case Rgba = "rgba";
    case FourBit = "4-bit";
    case EightBit = "8-bit";
}
