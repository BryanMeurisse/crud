<?php

namespace Eliurkis\Crud\FieldTypes;

use Spatie\Html\Facades\Html;

class Text
{
    public static function prepare($name, $value = null, $properties = [])
    {
        return Html::text($name)
                   ->value(old($name, $value))
                   ->attributes($properties['attributes'] ?? []);
    }
}