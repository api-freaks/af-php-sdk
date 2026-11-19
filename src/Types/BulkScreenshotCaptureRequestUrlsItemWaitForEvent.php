<?php

namespace Apifreaks\Types;

enum BulkScreenshotCaptureRequestUrlsItemWaitForEvent: string
{
    case Load = "load";
    case Domcontentloaded = "domcontentloaded";
    case Networkidle = "networkidle";
}
