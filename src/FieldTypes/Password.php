<?php

namespace Eliurkis\Crud\FieldTypes;

use Spatie\Html\Facades\Html;

class Password
{
    public static function prepare($name, $value = null, $properties = [])
    {
        return Html::password($name)->attributes($properties['attributes']);
    }
}
