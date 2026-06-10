<?php

namespace Apifreaks\Types;

enum OcrPredictRequestModel: string
{
    case MiniOcrV1 = "mini-ocr-v1";
    case OcrV1 = "ocr-v1";
}
