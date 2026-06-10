<?php

namespace Apifreaks\Types;

enum PdfRestrictRequestRestrictionsItem: string
{
    case PrintHigh = "print_high";
    case PrintLow = "print_low";
    case EditDocumentAssembly = "edit_document_assembly";
    case FillFormFields = "fill_form_fields";
    case EditAnnotations = "edit_annotations";
    case ModifyContent = "modify_content";
    case CopyAndExtractContent = "copy_and_extract_content";
    case UseAccessibility = "use_accessibility";
}
