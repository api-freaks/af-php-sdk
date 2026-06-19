<?php

namespace Apifreaks\Types;

enum EmailValidateResponseValidEmail: string
{
    case Valid = "valid";
    case Invalid = "Invalid";
    case Unknown = "Unknown";
    case Risky = "Risky";
}
