<?php

namespace App\Domain\StructuralPatterens\Decorator\ComplexTextFilters;

interface InputFormat
{
    public function formatText(string $text):string;
}
