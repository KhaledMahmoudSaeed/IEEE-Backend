@props([
    'active' => 'false',
    'type' => 'nav'
])
@php
    if ($type == 'registration') {
        $class = "px-3 py-2 text-sm font-medium text-primary";
    } else {
        if ($active == 'true') {
            $class = 'rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white';
        } else {
            $class = 'rounded-md px-3 py-2 text-sm font-medium text-amber-700 hover:bg-gray-700 hover:text-white';
        }
    }
@endphp
<a {{$attributes }}class="{{$class}}" aria-current="{{$active ? 'page' : 'false'}}">
    {{$slot}}</a>