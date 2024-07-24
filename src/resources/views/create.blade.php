@extends('layouts.app')

@section('page-title')
    {!! isset($t[$type . '_title']) ? __($t[$type . '_title']) : trans('eliurkis::crud.' . $type . '_title') !!}
@stop

@section('content')
    @if (isset($data))
        {{ html()->modelForm($data, 'PUT', route($route . '.update', $data->id))->class('form-horizontal')->id('frm-' . $route . '-update')->acceptsFiles()->open() }}
    @else
        {{ html()->form('POST', route($route . '.store'))->class('form-horizontal')->id('frm-' . $route . '-store')->acceptsFiles()->open() }}
    @endif

    <div id="form-manage row">
        @foreach ($fieldsGroup as $fields)
            <div class="col-md-{{ 12 / $colsNumber }}">
                @foreach ($fields as $name => $field)
                    <div class="form-group fieldtype_{{ $field['type'] }} fieldname_{{ $name }}">
                        <label
                            class="{{ $formColsClasses[1] }} control-label">{{ isset($field['label']) ? __($field['label']) : __(title_case(preg_replace('/[^A-Za-z0-9 ]/', ' ', $name))) }}</label>
                        <div class="{{ $formColsClasses[2] }}">
                            {!! $field['html'] !!}
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <div class="text-center">
                    {{ html()->button()->class('btn btn-primary')->type('submit')->style('margin-right: 10px;')->content('<i class="fas fa-check"></i> ' . (isset($t['save']) ? __($t['save']) : trans('eliurkis::crud.save'))) }}
                    <a href="{{ $links['index'] }}" class="btn btn-default">
                        <i class="fas fa-times"></i>
                        {{ isset($t['cancel']) ? __($t['cancel']) : trans('eliurkis::crud.cancel') }}
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{ html()->closeModelForm() }}
@stop
