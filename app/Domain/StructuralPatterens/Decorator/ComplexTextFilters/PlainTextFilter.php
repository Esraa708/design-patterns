<?php

namespace App\Domain\StructuralPatterens\Decorator\ComplexTextFilters;

/**
 * This Concrete Decorator strips out all HTML tags from the given text.
 */
class PlainTextFilter extends TextFormat
{
    public function formatText(string $text): string
    {
        $text = parent::formatText($text);

        return strip_tags($text);
    }

}
