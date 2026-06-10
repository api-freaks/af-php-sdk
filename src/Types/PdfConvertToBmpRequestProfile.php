<?php

namespace Apifreaks\Types;

enum PdfConvertToBmpRequestProfile: string
{
    case Bw = "bw";
    case Gray = "gray";
    case Rgb = "rgb";
    case FourBit = "4-bit";
    case EightBit = "8-bit";
}
