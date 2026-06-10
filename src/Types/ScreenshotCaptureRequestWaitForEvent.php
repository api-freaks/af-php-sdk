<?php

namespace Apifreaks\Types;

enum ScreenshotCaptureRequestWaitForEvent: string
{
    case Load = "load";
    case Domcontentloaded = "domcontentloaded";
    case Networkidle = "networkidle";
}
