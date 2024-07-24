<?php

namespace Eliurkis\Crud\FieldTypes;

use Illuminate\Support\Facades\Input;
use Spatie\Html\Facades\Html;

class Text
{
    public static function prepare($name, $value = null, $properties = [])
    {
        return Html::text($name)
                   ->value(Input::old($name, $value))
                   ->attributes($properties['attributes'] ?? []);
    }
}