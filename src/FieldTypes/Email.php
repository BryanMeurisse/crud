<?php

namespace Eliurkis\Crud\FieldTypes;

use Illuminate\Support\Facades\Input;
use Spatie\Html\Facades\Html;

class Email
{
    public static function prepare($name, $value = null, $properties = [])
    {
        return Html::email($name)
                   ->value(Input::old($name, $value))
                   ->attributes($properties['attributes'] ?? []);
    }
}