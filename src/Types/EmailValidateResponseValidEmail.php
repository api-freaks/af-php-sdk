<?php

namespace Apifreaks\Types;

enum EmailValidateResponseValidEmail: string
{
    case Valid = "valid";
    case Invalid = "invalid";
}
