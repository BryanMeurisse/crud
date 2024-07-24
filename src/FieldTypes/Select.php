<?php

namespace Eliurkis\Crud\FieldTypes;

use Illuminate\Support\Facades\Input;
use Spatie\Html\Facades\Html;

class Select
{
    public static function prepare($name, $options = [], $value = null, $properties = [])
    {
        return Html::select($name, $options)
                   ->value(Input::old($name, $value))
                   ->attributes($properties['attributes'] ?? []);
    }
}