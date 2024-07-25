<?php

namespace Eliurkis\Crud\FieldTypes;

use Illuminate\Support\Facades\Input;
use Spatie\Html\Facades\Html;

class Date
{
    public static function prepare($name, $value = null, $properties = [])
    {
        return '<div class="input-group date">
                    <span class="input-group-addon"><i class="far fa-calendar-alt"></i></span>
                    ' . Html::text($name)
                            ->value(old($name, $value))
                            ->attributes($properties['attributes'] ?? [])
                            ->toHtml() . '
                </div>';
    }
}