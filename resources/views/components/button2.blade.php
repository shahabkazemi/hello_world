@php
    $class = isset($class) ? $class : 'btn-hello';
@endphp

<button class="{{ $class }}">{{ $slot }}</button>
