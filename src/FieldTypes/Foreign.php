<?php

namespace Eliurkis\Crud\FieldTypes;

use Spatie\Html\Facades\Html;

class Foreign
{
    public static function prepare($name, $options = [], $value = null, $properties = [])
    {
        $colsSize = 12 / $properties['config']['cols'];

        $html = '<div class="row i-checks">';
        foreach ($options as $key => $option) {
            $uniqueId = uniqid('opt', true) . md5(mt_rand(1, 1000));
            $html .=
                '<div class="col-md-' . $colsSize . ' col-xs-12">' .
                Html::checkbox($name . '[]', in_array($key, (array) $value))
                    ->id($uniqueId)
                    ->value($key)
                    ->toHtml() .
                Html::label($uniqueId, $option)->toHtml() .
                '</div>';
        }
        $html .= '</div>';

        return $html;
    }
}