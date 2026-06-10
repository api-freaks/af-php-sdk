<?php

namespace Apifreaks\Types;

enum BulkEmailValidateResponseEmailValidationResponsesItemValidEmail: string
{
    case Valid = "valid";
    case Invalid = "invalid";
}
