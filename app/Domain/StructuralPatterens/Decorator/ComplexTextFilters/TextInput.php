<?php

namespace App\Domain\StructuralPatterens\Decorator\ComplexTextFilters;

class TextInput implements InputFormat
{
    public function formatText(string $text): string
    {
        return $text;
    }
}
