<?php

namespace Apifreaks\Types;

enum BulkEmailValidateResponseEmailResponseItemValidEmail: string
{
    case Valid = "valid";
    case Invalid = "invalid";
}
