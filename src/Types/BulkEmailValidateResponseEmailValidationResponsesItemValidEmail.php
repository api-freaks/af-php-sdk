<?php

namespace Apifreaks\Types;

enum BulkEmailValidateResponseEmailValidationResponsesItemValidEmail: string
{
    case Valid = "valid";
    case Invalid = "Invalid";
    case Unknown = "Unknown";
    case Risky = "Risky";
}
