<?php

namespace App\Models\Enums;

use ReflectionClass;

trait HasEnums
{
    public static function enums(): array
    {
        return (new ReflectionClass(get_called_class()))->getConstants();
    }

    public static function values(): array
    {
        return array_values(static::enums());
    }

    public static function isValid(string $value): bool
    {
        return in_array($value, static::enums());
    }
}
