<?php

namespace Apifreaks\Types;

enum PdfCompressRequestCompressionLevel: string
{
    case Low = "low";
    case Balanced = "balanced";
    case High = "high";
    case Extreme = "extreme";
}
