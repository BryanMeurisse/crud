<?php

namespace Eliurkis\Crud\FieldTypes;

use Illuminate\Support\Facades\Input;
use Spatie\Html\Facades\Html;

class Number
{
    public static function prepare($name, $value = null, $properties = [])
    {
        return Html::input('number', $name)
                   ->value(Input::old($name, $value))
                   ->attributes($properties['attributes'] ?? []);
    }
}