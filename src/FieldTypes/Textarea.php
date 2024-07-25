<?php

namespace Eliurkis\Crud\FieldTypes;

use Illuminate\Support\Facades\Input;
use Spatie\Html\Facades\Html;

class Textarea
{
    public static function prepare($name, $value = null, $properties = [])
    {
        return Html::textarea($name)
                   ->value(old($name, $value))
                   ->attributes($properties['attributes']);
    }
}