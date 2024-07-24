<?php

namespace Eliurkis\Crud\FieldTypes;

use Spatie\Html\Facades\Html;

class FileLegacy
{
    public static function prepare($name, $value = null, $properties = [])
    {
        return Html::file($name)
                   ->attributes($properties['attributes'] ?? []);
    }
}