<?php

namespace Apifreaks\Types;

enum BulkScreenshotCaptureRequestUrlsItemFileType: string
{
    case Png = "PNG";
    case Jpeg = "JPEG";
    case Webp = "WEBP";
    case Pdf = "PDF";
    case Mp4 = "MP4";
    case Gif = "GIF";
    case Webm = "WEBM";
}
