<?php

namespace Apifreaks\Types;

enum BulkScreenshotCaptureRequestUrlsItemOcrModel: string
{
    case MiniOcrV1 = "mini-ocr-v1";
    case OcrV1 = "ocr-v1";
}
